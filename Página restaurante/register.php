<?php
// Incluye el archivo de conexión a la base de datos
require_once __DIR__ . '/db.php';

// Verifica si la petición fue enviada mediante el método POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Conecta a la base de datos
    $mysqli = connect_db();

    // Obtiene los valores enviados desde el formulario y elimina espacios en blanco
    $nombre = trim($_POST['nombre'] ?? '');
    $email  = trim($_POST['email'] ?? '');

    // Si algún campo está vacío, redirige al formulario con un código de error (error=1)
    if (empty($nombre) || empty($email)) {
        header('Location: registro.php?error=1');
        exit;
    }

    // Prepara una sentencia SQL para insertar los datos en la tabla 'usuarios'
    $stmt = $mysqli->prepare("INSERT INTO usuarios (nombre, email, fecha_registro) VALUES (?, ?, ?)");

    // Si la preparación de la consulta falla, redirige con un código de error (error=2)
    if (!$stmt) {
        header('Location: registro.php?error=2');
        exit;
    }

    // Obtiene la fecha actual en formato YYYY-MM-DD
    $hoy = date('Y-m-d');

    // Enlaza los parámetros a la consulta preparada: nombre, email y fecha de registro
    $stmt->bind_param('sss', $nombre, $email, $hoy);

    // Ejecuta la consulta y guarda el resultado (true o false)
    $executed = $stmt->execute();

    // Cierra la sentencia y la conexión
    $stmt->close();
    $mysqli->close();

    // Si la ejecución fue exitosa, redirige con mensaje de éxito y nombre del usuario
    if ($executed) {
        header('Location: registro.php?success=1&nombre=' . urlencode($nombre));
        exit;
    } else {
        // Si falló la ejecución, redirige con otro código de error (error=3)
        header('Location: registro.php?error=3');
        exit;
    }
}
