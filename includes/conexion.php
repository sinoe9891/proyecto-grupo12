<?php
$servidor = "localhost";
$usuarios = "root";
$contrasena = "";
$basedatos = "agencia_viajes";

$conn = new mysqli($servidor, $usuarios, $contrasena, $basedatos);
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}else{
	// echo "Conexión exitosa";
}
$conn->set_charset("utf8");