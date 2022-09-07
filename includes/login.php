<?php
$usuario = $_POST['usuario'];
$password = $_POST['password'];

if (isset($_POST['login'])) {
	include 'conexion.php';
	$sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$password'";
	$resultado = $conn->query($sql);
	echo $usuario, $password;
	if ($resultado->num_rows > 0) {
		echo 'Inició sesión';
		header('Location: ../dashboard.php');
	}else{
		echo 'No inició sesión';
		header('Location: ../login.php?error=1');
	}
}
