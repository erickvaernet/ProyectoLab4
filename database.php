<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "juego_memoria";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);
if (!$enlace) {
    echo "ERROR EN LA CONEXION AL SERVIDOR: ";
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>