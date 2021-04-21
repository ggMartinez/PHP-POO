<?php 

	
	require "classes/Cliente.class.php";

	$p = new Cliente($_GET['nombre'],$_GET['apellido'],$_GET['telefono']);


	echo "Nombre: " . $p -> decirNombre() . "<br >";
	echo "Apellido: " . $p -> decirApellido() . "<br >";
	echo "Telefono: " . $p -> decirTelefono() . "<br >";
