<?php
// Definición de constantes para la conexión a la base de datos
define('DB_HOST', 'localhost');   // Dirección del servidor de base de datos (normalmente 'localhost')
define('DB_USER', 'root');        // Nombre de usuario de la base de datos (por defecto en local suele ser 'root')
define('DB_PASS', '');            // Contraseña del usuario (vacía por defecto en muchos entornos locales)
define('DB_NAME', 'foodiecraft'); // Nombre de la base de datos a la que se conectará el sistema

// Función que establece y devuelve una conexión con la base de datos utilizando MySQLi
function connect_db() {
    // Se crea una nueva instancia del objeto mysqli con los datos de conexión definidos arriba
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Se verifica si hubo un error al intentar conectarse a la base de datos
    if ($mysqli->connect_errno) {
        // Si hay un error, se detiene la ejecución y se muestra un mensaje con el número y la descripción del error
        die("Error de conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
    }

    // Si la conexión fue exitosa, se devuelve el objeto de conexión mysqli
    return $mysqli;
}
?>