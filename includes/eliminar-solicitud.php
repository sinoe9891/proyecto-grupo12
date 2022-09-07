<?php
	$id = $_GET['id'];
	if(isset($id)){
		include 'conexion.php';
		$sql = "DELETE FROM solicitudes WHERE id = '$id'";
		$resultado = $conn->query($sql);
		if($resultado){
			header('Location: ../solicitudes.php?eliminado=eliminado');
		}else{
			header('Location: ../solicitudes.php?eliminado=error-delete');
		}
	}
?>