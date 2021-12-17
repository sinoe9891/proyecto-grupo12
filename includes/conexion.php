<?php
$servidor = "localhost";
$usuarios = "root";
$contrasena = "";
$basedatos = "agencia_viajes";

$grupo12 = new mysqli($servidor, $usuarios, $contrasena, $basedatos);
if ($grupo12->connect_error) {
	die("Conexión fallida: " . $grupo12->connect_error);
}else{
	echo "Conexión exitosa";
}
$grupo12->set_charset("utf8");