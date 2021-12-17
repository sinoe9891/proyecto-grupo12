<?php
	$id = $_GET['id'];
	if(isset($id)){
		include 'conexion.php';
		$sql = "DELETE FROM paquetes WHERE id = '$id'";
		$resultado = $grupo12->query($sql);
		if($resultado){
			header('Location: ../paquetes.php?resultado=exito');
		}else{
			header('Location: ../paquetes.php?resultado=error');
		}
	}
?>