<?php
	
	$mysqli = new mysqli('localhost', 'root', 'Root1234', 'sistema_nomina');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>