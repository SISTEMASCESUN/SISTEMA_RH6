	<?php
	  $d=$_GET[d];
	  $n=$_GET['n'];
	  $user=$_GET['nombre'];
	  include("variables1.php");
	  include("ip.php");
	  include("conectarse.php"); 
	  $link=Conectarse();    
	  $select;
	  // SE OBTIENE EL IP DE LA PC
	  $ip=getIP();		    
	  //SE OBTIENE EL NOMBRE DEL HOST 
	  $host = gethostbyaddr($ip);
	   $host;
		 
	 
$result2 = mysql_query('SELECT * FROM proveedores WHERE CodProveedor=\''.$codproveedor.'\''); 
	  if($row = mysql_fetch_array($result2 ))
					{
					 $CodProveedor2= $row['CodProveedor'];
					}	  

		 
		 if($CodProveedor2=="")
		 {
		$query = 'INSERT INTO proveedores (CodProveedor,Nombre,Contacto,Domicilio,RFC,TEL,Fax,Correo,Credito,TipoCambio,user,Depto,ip,host,fecha) VALUES (\''.$codproveedor.'\',\''.$nombre.'\',\''.$contacto.'\',\''.$domicilio.'\',\''.$rfc.'\',\''.$tel.'\',\''.$fax.'\',\''.$correo.'\',\''.$credito.'\',\''.$moneda.'\',\''.$user.'\',\''.$d.'\',\''.$ip.'\',\''.$host.'\',\''.date("Y-m-d G:i").'\' )';	
					
		mysql_query($query) or die(mysql_error());		  
		   echo  "<img src =\"images/procesando.gif\" width=300px height=200px border=0> ";

	
	echo " <script language=JavaScript> 
                alert('Guardado'); 
                </script>";

	

echo "<script language=\"javascript\">
			window.location.href=\"alta_proveedor.php?nombre=$user&n=$n&d=$d\";
			</script>";


		 }
		 else
		 {
		  $q = "UPDATE proveedores set Nombre='".$nombre."', Contacto='".$contacto."', Domicilio='".$domicilio."', RFC='".$rfc."' ,TEL='".$tel."', Fax='".$fax."',Correo='".$correo."',Credito='".$credito."', TipoCambio='".$moneda."'  where CodProveedor='".$CodProveedor2."' AND Depto='".$d."'";
mysql_query($q, $link) or die ("problema con query1");
  
	echo " <script language=JavaScript> 
                alert('MODIFICADO'); 
                </script>";


echo "<script language=\"javascript\">
			window.location.href=\"alta_proveedor.php?nombre=$user&n=$n&d=$d\";
			</script>";
	 
		 }
		 
		 
		
 
?>

<html>
<br>
<br>
<br>
 
</html>




