<?php

	require_once('Conexion.php');

	$nombre = $_POST['nombre'];
	$identidad = $_POST['identidad'];
	$email=$_POST['email'];
	$numero = $_POST['numero'];



	$sql = "INSERT INTO contacto (nombre,identidad,correo,telefono)
	VALUES ('$nombre', $identidad,$email,'$numero')";

	$result=$conn->query($sql);

	if (!$result) {
	    die("error". $conn->connect_error);



	}else{
		die("exito");
	}


?>























?>
