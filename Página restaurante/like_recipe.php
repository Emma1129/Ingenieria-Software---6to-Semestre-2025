<?php
// Incluye el archivo de conexión a la base de datos
require_once 'db.php';

// Especifica que la respuesta será en formato JSON
header('Content-Type: application/json');

// Lee el cuerpo de la solicitud (request body) enviado por JavaScript como JSON
$input = json_decode(file_get_contents('php://input'), true);

// Extrae el ID de la receta desde el JSON recibido (o 0 si no existe)
$recipe_id = (int) ($input['recipe_id'] ?? 0);

// Obtiene la dirección IP del cliente que hizo la solicitud
$ip = $_SERVER['REMOTE_ADDR'];

// Verifica que el ID de la receta sea válido (mayor a 0)
if ($recipe_id > 0) {
    // Conecta a la base de datos
    $mysqli = connect_db();

    // Prepara una sentencia SQL para insertar un nuevo like
    $stmt = $mysqli->prepare("INSERT INTO likes (recipe_id, ip_address) VALUES (?, ?)");

    // Si no se pudo preparar la consulta, devuelve un error en formato JSON
    if (!$stmt) {
        echo json_encode(['success' => false, 'error' => 'Error en prepare']);
        exit;
    }

    // Asocia los parámetros a la sentencia preparada: 'i' = entero, 's' = string
    $stmt->bind_param('is', $recipe_id, $ip);

    // Ejecuta la sentencia para guardar el like en la base de datos
    $stmt->execute();

    // Cierra la sentencia
    $stmt->close();

    // Realiza una consulta para obtener el total de likes actualizados de esa receta
    $res = $mysqli->query("SELECT COUNT(*) AS total FROM likes WHERE recipe_id = $recipe_id");

    // Obtiene el resultado como arreglo asociativo
    $row = $res->fetch_assoc();

    // Devuelve un JSON indicando éxito y el nuevo total de likes
    echo json_encode([
        'success' => true,
        'likes' => $row['total']
    ]);

    // Cierra la conexión a la base de datos
    $mysqli->close();
} else {
    // Si el ID no es válido, devuelve un error en formato JSON
    echo json_encode(['success' => false, 'error' => 'ID inválido']);
}

// Finaliza el script
exit;