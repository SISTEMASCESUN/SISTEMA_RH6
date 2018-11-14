<?php 
	require_once "conexion.php";
 
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$ap=$_POST['apellido'];
	$am=$_POST['apellido2'];
	$user=$_POST['usuario'];
$pass=$_POST['pass'];
$tipo=$_POST['tipo'];

	$sql="UPDATE usuarios set nombre='$nombre',
								ap='$ap',
								am='$am',
								user='$user',
								password='$pass',
								tipo_usuario='$tipo'
				where id_user='$id'";
	echo $result=mysqli_query($con,$sql);

 ?>