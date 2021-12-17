<?php
	$solicitud = $_POST['solicitud'];
	$nombre = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$celular = $_POST['tel'];
	$correo = $_POST['correo'];
	$paquete = $_POST['paquetes'];

	if(isset($solicitud)){
		include 'conexion.php';
		$sql = "INSERT INTO solicitudes (nombres, apellidos, celular, correo, paquetes) VALUES ('$nombre', '$apellidos', '$celular', '$correo', '$paquete')";
		$resultado = $grupo12->query($sql);
		if($resultado){
			echo "Paquete agregado";
			header('Location: ../formulario.php?resultado=exito');
		}else{
			header('Location: ../formulario.php?resultado=error');
			echo "Error al agregar paquete";
		}
	}
?>