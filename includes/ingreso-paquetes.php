<?php
$nuevo = $_POST['nuevo'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$imagen = $_FILES['imagen']['name'];

if (isset($nuevo)) {
	$tipo = $_FILES['imagen']['type'];
	$tamano = $_FILES['imagen']['size'];
	$temp = $_FILES['imagen']['tmp_name'];
	$ruta = 'D:/xampp7.2/htdocs/ceutec/proyecto-conn/images/'.$imagen;
	move_uploaded_file($temp, $ruta);
	//Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
	chmod($ruta, 0777);
	//Mostramos el mensaje de que se ha subido co éxito
	include 'conexion.php';
	$sql = "INSERT INTO paquetes (nombre_paquete, precio, url_img) VALUES ('$nombre', '$precio', 'images/$imagen')";
	$resultado = $conn->query($sql);
	if ($resultado) {
		echo "Paquete agregado";
		header('Location: ../paquetes.php?crear=exito');
	} else {
		header('Location: ../paquetes.php?crear=error');
		echo "Error al agregar paquete";
	}
}
