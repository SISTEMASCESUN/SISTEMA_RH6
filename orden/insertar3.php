	<?php
	   include("variable3.php");
	   include("ip.php");
	   $n=$_GET['n'];
	   $d=$_GET['d'];
	   echo $user=$_GET['nombre'];
	   $codproveedor=$_GET['codproveedor'];
	   $iva=$_GET['iva'];
	   $autorizo=$_POST[autoriza];
	   $select;
	// SE OBTIENE EL IP DE LA PC
	 $ip=getIP();		    
	  //SE OBTIENE EL NOMBRE DEL HOST 
		 $host = gethostbyaddr($ip);
		 $host;
		 
 	
	$conexion = mysql_connect('localhost','jorge','noen'); 
 	// se conecta con el servidor
	 mysql_select_db('pasesmercancia', $conexion); 
 	// selecciona la base de datos
 	$tabla = mysql_query("SELECT Deptoid FROM usuariosnew where Nombre='".trim($user, " ")."'"); 
 	// selecciono todos los registros de la tabla usuarios, ordenado por nombre
   if($registro = mysql_fetch_array($tabla ))
 
  { 
 // comienza un bucle que leera todos los registros y ejecutara las ordenes que siguen 
 $depto= $registro['Deptoid'];
 } // fin del bucle de ordenes
 
 mysql_free_result($tabla); // libera los registros de la tabla
mysql_close($conexion); // cierra la conexion con la base de datos.
			  
 

	   include("conectarse.php"); 
	     $link=Conectarse(); 
		 
		 if($n==2)
		 {
		$result2 = mysql_query('SELECT * FROM producto WHERE CodProducto=\''.$codproducto.'\' '); 
		 }
		 else
		 {
		$result2 = mysql_query('SELECT * FROM producto WHERE CodProducto=\''.$codproducto.'\' AND Depto=\''.$d.'\''); 
		 }
	  
	  if($row = mysql_fetch_array($result2 ))
					{
					 $CodProducto2= $row['CodProducto'];
					 $NombreProducto= $row['NombreProducto'];
					 $Descripcion= $row['Descripcion'];
					 $Unidad= $row['Unidad'];
					 $PrecioUni= $row['PrecioUni'];
					 $Moneda= $row['Moneda'];
					  $Unidad= $row['Unidad'];
					}	 
					$total=$PrecioUni*$cantidad;
					$status="A";

		 if($CodProducto2!="")
		 {
if ($precuni!="")
{


  
	  $q = "UPDATE producto set PrecioUni='".$precuni."'  where CodProducto='".$CodProducto2."'";
mysql_query($q,$link) or die ("problema con query");

$result3 = mysql_query('SELECT * FROM producto WHERE CodProducto=\''.$codproducto.'\' '); 
 
	  if($row = mysql_fetch_array($result3 ))
		{
 			$PrecioUni2= $row['PrecioUni'];
			$total2=$PrecioUni2*$cantidad;
		}


$query = 'INSERT INTO orden_temp (CodProveedor,CodProducto,NombreProducto,Descripcion,Cantidad,Unidad,PrecUni,Importe,iva,Moneda,Facturar,FechaOrden,autorizo,FechaEntrega,Entregar,user,ip,host,Depto, status) VALUES (\''.$codproveedor.'\',\''.$CodProducto2.'\',\''.$NombreProducto.'\',\''.$Descripcion.'\',\''.$cantidad.'\',\''.$Unidad.'\',\''.$PrecioUni2.'\',\''.$total2.'\',\''.$iva.'\',\''.$Moneda.'\',\''.$facturar.'\',\''.date("Y-m-d ").'\',\''.$autorizo.'\',\''.$fechaentrega.'\',\''.$entregar.'\',\''.$user.'\',\''.$ip.'\',\''.$host.'\',\''.$depto.'\', \''.$status.'\'  )';
	
	   
	
	
}
else
{
	$query = 'INSERT INTO orden_temp (CodProveedor,CodProducto,NombreProducto,Descripcion,Cantidad,Unidad,PrecUni,Importe,iva,Moneda,Facturar,FechaOrden,autorizo,FechaEntrega,Entregar,user,ip,host,Depto, status) VALUES (\''.$codproveedor.'\',\''.$CodProducto2.'\',\''.$NombreProducto.'\',\''.$Descripcion.'\',\''.$cantidad.'\',\''.$Unidad.'\',\''.$PrecioUni.'\',\''.$total.'\',\''.$iva.'\',\''.$Moneda.'\',\''.$facturar.'\',\''.date("Y-m-d ").'\',\''.$autorizo.'\',\''.$fechaentrega.'\',\''.$entregar.'\',\''.$user.'\',\''.$ip.'\',\''.$host.'\',\''.$depto.'\', \''.$status.'\'  )';
}		
	mysql_query($query) or die(mysql_error());
	
	
	
			  
	echo  "<img src =\"images/procesando.gif\" width=300px height=200px border=0> ";	
	echo "<script language=\"javascript\">			window.location.href=\"crear_orden.php?codproveedor=$codproveedor&nombre=$user&iva=$iva&fecha=$fechaentrega&autorizo=$autorizo&entregar=$entregar&facturar=$facturar&n=$n&d=$d\";
			</script>";
		 }
		 else
		 {
	 	echo  "<img src =\"images/error404.png\"> "; 
   	    echo " <script language=JavaScript> 
                alert('Error el producto no pertenece a su Depto.'); 
                </script>";
		echo "<script language=\"javascript\">		window.location.href=\"crear_orden.php?codproveedor=$codproveedor&nombre=$user&iva=$iva&fecha=$fechaentrega&autorizo=$autorizo&entregar=$entregar&facturar=$facturar&n=$n&d=$d\";
			</script>"; 
		 }
?>
<html>
<br>
<br>
<br>
</html>




