<?php
// Incluye el archivo de conexión a la base de datos (debe contener la función connect_db())
require_once 'db.php';

// Establece la conexión con la base de datos
$mysqli = connect_db();

// Ejecuta una consulta SQL para obtener los 100 mensajes más antiguos de la tabla 'mensajes'
// Se seleccionan las columnas: nombre, contenido y fecha (formateada a 'YYYY-MM-DD HH:MM:SS')
$res = $mysqli->query(
    "SELECT nombre, contenido, DATE_FORMAT(fecha, '%Y-%m-%d %H:%i:%s') AS fecha 
     FROM mensajes 
     ORDER BY mensaje_id ASC 
     LIMIT 100"
);

// Inicializa un arreglo vacío para almacenar los datos
$data = [];

// Si la consulta fue exitosa...
if ($res) {
    // Se recorren todas las filas del resultado y se agregan al arreglo $data como arreglos asociativos
    while ($row = $res->fetch_assoc()) {
        $data[] = $row;
    }
}

// Cierra la conexión a la base de datos para liberar recursos
$mysqli->close();

// Especifica que la respuesta que se va a enviar es de tipo JSON
header('Content-Type: application/json');

// Codifica el arreglo $data en formato JSON y lo imprime (lo cual será la respuesta del servidor)
echo json_encode($data);

// Finaliza el script para asegurarse de que no se ejecute nada más después
exit;
?>