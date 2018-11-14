<?php
session_start();
include_once"conexion.php";



echo $nombre=$_GET['nombre'];
echo $ap=$_GET['ap'];
echo $am=$_GET['am'];
echo $user=$_GET['user'];
echo $password1=$_GET['password1'];
echo $password2=$_GET['password2'];
echo $tipo=$_GET['tipo'];
if ($password1==$password2)
{
 
$result = mysqli_query($con, "call alta_usuario('".$nombre."','".$ap."','".$am."','".$user."','".$password1."','".$tipo."')");
	 echo "<script>
                alert('Registro guardado con existo');
                window.location= 'index.html'
    </script>";	
}
else
{
	 echo "<script>
                alert('Las Contraseñas son incorrectas');
                window.location= 'index.html'
    </script>";	
}
?>
