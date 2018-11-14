<?php
session_start();
?>
<?php
include_once"conexion.php";
if($con->connect_error)
{
	die("LA CONEXION FALLO".$con->connect_error);
}
echo $user=$_GET['usuario'];
echo $password=$_GET['password'];
$result = mysqli_query($con, "SELECT * FROM usuarios where user = '".$user."' AND password = '".$password."'");
 if($result){
   if(mysqli_num_rows($result) > 0) {
	   $ID=$_SESSION['ID'];
	   $NOMBRE=$_SESSION['NOMBRE'];
	   $AP=$_SESSION['APELLIDO_PATERNO'];
	   echo $NOMBRE+$AP; 
	   header('location:index.html');
   }
   else {
       echo "<script>
                alert('VERIFIQUE SUS DATOS ACCESO DE NAGADO');
                window.location= 'login.html'
    </script>";

   }
}
else
 {
echo  "Problemas en la query:" . mysqli_error($con);
}
mysqli_close($con);
?>
