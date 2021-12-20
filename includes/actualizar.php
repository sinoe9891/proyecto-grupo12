<?php
$id = $_GET['id'];
$editar = $_POST['editar'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$imagen = $_FILES['imagen']['name'];
echo $imagen;
if (isset($editar)) {
	$tipo = $_FILES['imagen']['type'];
	$tamano = $_FILES['imagen']['size'];
	$temp = $_FILES['imagen']['tmp_name'];
	$ruta = 'D:/xampp7.2/htdocs/ceutec/proyecto-grupo12/images/'.$imagen;
	echo $ruta;
	if(file_exists('images/'.$imagen)) {
		chmod('images/'.$imagen,0777); //Change the file permissions if allowed
		unlink('images/'.$imagen); //remove the file
	}

	move_uploaded_file($temp, $ruta);
	//Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
	chmod($ruta, 0777);
	echo 'images/'.$imagen;
	//Mostramos el mensaje de que se ha subido co éxito
	include 'conexion.php';
	$sql = "UPDATE paquetes SET nombre_paquete = '$nombre', precio = '$precio', url_img = 'images/$imagen' WHERE id = '$id'";
	$resultado = $grupo12->query($sql);
	if ($resultado) {
		header('Location: ../paquetes.php?actualizar=exito');
	} else {
		header('Location: ../paquetes.php?actualizar=error');
	}
}
?>
