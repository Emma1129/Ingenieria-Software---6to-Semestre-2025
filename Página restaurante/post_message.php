<?php
// Incluye el archivo que contiene la función de conexión a la base de datos
require_once 'db.php';

// Indica que la respuesta será en formato JSON
header('Content-Type: application/json');

// Lee el cuerpo de la solicitud (normalmente enviada por JavaScript) y lo convierte en un arreglo asociativo
$input = json_decode(file_get_contents('php://input'), true);

// Obtiene y limpia (quita espacios en blanco) los datos recibidos: nombre y contenido del mensaje
$nombre = trim($input['nombre'] ?? '');
$contenido = trim($input['contenido'] ?? '');

// Verifica que ambos campos no estén vacíos
if ($nombre && $contenido) {
    // Se conecta a la base de datos
    $mysqli = connect_db();

    // Prepara una sentencia SQL para insertar el mensaje en la tabla 'mensajes'
    $stmt = $mysqli->prepare("INSERT INTO mensajes (nombre, contenido) VALUES (?, ?)");

    // Verifica si la sentencia fue preparada correctamente
    if ($stmt) {
        // Enlaza los parámetros recibidos (nombre y contenido) a la consulta preparada
        $stmt->bind_param('ss', $nombre, $contenido);

        // Ejecuta la inserción en la base de datos
        $stmt->execute();

        // Cierra la sentencia preparada
        $stmt->close();
    } else {
        // Si hubo un error al preparar la consulta, devuelve error 500 (error interno del servidor)
        http_response_code(500);
        echo json_encode(['error' => $mysqli->error]);
        exit;
    }

    // Cierra la conexión a la base de datos
    $mysqli->close();

    // Devuelve una respuesta JSON indicando que la operación fue exitosa
    echo json_encode(['ok' => true]);
} else {
    // Si los datos no son válidos, devuelve error 400 (mala solicitud)
    http_response_code(400);
    echo json_encode(['error' => 'Datos inválidos']);
}

// Finaliza el script
exit;
?>