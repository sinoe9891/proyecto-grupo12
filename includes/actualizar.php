<?php
	$id = $_GET['id'];
	$editar = $_POST['editar'];
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	$imagen = $_POST['imagen'];
	echo $id;
	if(isset($editar)){
		include 'conexion.php';
		$sql = "UPDATE paquetes SET nombre_paquete = '$nombre', precio = '$precio', url_img = '$imagen' WHERE id = '$id'";
		$resultado = $grupo12->query($sql);
		if($resultado){
			header('Location: ../paquetes.php?resultado=exito');
		}else{
			header('Location: ../paquetes.php?resultado=error');
		}
	}
?>