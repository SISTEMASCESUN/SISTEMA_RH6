
<?php 
	require_once "conexion.php";
	 
	$id=$_POST['id'];

	$sql="DELETE from usuarios where id_user='$id'";
	echo $result=mysqli_query($con,$sql);
 ?>