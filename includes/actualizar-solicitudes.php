<?php
	$id = $_GET['id'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$celular = $_POST['celular'];
	$paquete = $_POST['paquete'];
	$editar = $_POST['editar'];
	echo $id;

	
	if(isset($editar)){
		include 'conexion.php';
		$sql = "UPDATE solicitudes SET nombres = '$nombre', correo = '$correo', celular = '$celular', paquetes = '$paquete' WHERE id = '$id'";
		$resultado = $conn->query($sql);
		if($resultado){
			header('Location: ../solicitudes.php?resultado=exito');
		}else{
			header('Location: ../solicitudes.php?resultado=error');
		}
	}
?>