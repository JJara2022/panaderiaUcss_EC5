<?php
	$servidor = "localhost";
	$usuario = "id19651015_user1807";
	$password = "S>ah[(qkMd[O+6qM";
	$db = "id19651015_eventos";
	$conexion = new mysqli($servidor, $usuario, $password, $db);
	
	if ($conexion->connect_error){
		die("Conexion fallida: " . $conexion->connect_error);
    }

?>