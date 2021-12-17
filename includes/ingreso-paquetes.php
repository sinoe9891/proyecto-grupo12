<?php
	$nuevo = $_POST['nuevo'];
	$nombre = $_POST['nombre'];
	$precio = $_POST['precio'];
	$imagen = $_POST['imagen'];
	if(isset($nuevo)){
		include 'conexion.php';
		$sql = "INSERT INTO paquetes (nombre_paquete, precio, url_img) VALUES ('$nombre', '$precio', '$imagen')";
		$resultado = $grupo12->query($sql);
		if($resultado){
			echo "Paquete agregado";
			header('Location: ../paquetes.php?resultado=exito');
		}else{
			header('Location: ../paquetes.php?resultado=error');
			echo "Error al agregar paquete";
		}
	}
?>