<?php
	$solicitud = $_POST['solicitud'];
	$nombre = $_POST['nombres'];
	$celular = $_POST['tel'];
	$correo = $_POST['correo'];
	$paquete = $_POST['paquetes'];
	$fecha_salida = $_POST['fecha_salida'];
	$estadia = $_POST['estadia'];
	$adultos = $_POST['adultos'];
	$ninos = $_POST['ninos'];
	

	if(isset($solicitud)){
		include 'conexion.php';
		$sql = "INSERT INTO solicitudes (nombres, celular, correo, paquetes, fecha_salida, estadia, adultos, ninos) VALUES ('$nombre', '$celular', '$correo', '$paquete', '$fecha_salida', '$estadia', '$adultos', '$ninos')";
		$resultado = $grupo12->query($sql);
		if($resultado){
			echo "Paquete agregado";
			// header('Location: ../gracias.php?resultado=exito');
		}else{
			header('Location: ../gracias.php?resultado=error');
			echo "Error al agregar paquete";
			die("Error al insertar datos".$grupo12->error);
		}
	}
?>