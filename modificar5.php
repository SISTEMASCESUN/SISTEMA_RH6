<?php
	require 'conexion2.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM preguntas WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
		  <form class="form-horizontal" method="POST" action="update5.php?id=<?php echo $id;?>" autocomplete="off">
		  
			<table width="813" border="0">
  <tbody>
    <tr>
      <td width="0">&nbsp;</td>
      <td width="309"><span class="form-group">
        <label for="matricula" class="col-sm-2 control-label">PREGUNTA</label>
      </span></td>
      <td width="262"><span class="col-sm-10">
        <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="pregunta" value="<?php echo $row['pregunta']; ?>" required>
      </span></td>
      <td width="24">&nbsp;</td>
    </tr>
      
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

				<div class="form-group">
				  <div class="col-sm-10"></div>
				</div>
				<div class="form-group">
				  <div class="col-sm-10"></div>
				 
				 </div>
				 
				 
				 
				<div class="form-group">
				<div class="col-sm-10"></div>
				 
				<div class="form-group">
					
					<div class="col-sm-10"></div>
					
					
				<div class="form-group">
				<div class="col-sm-10"></div>
					
				<div class="form-group">
					
					<div class="col-sm-10"></div>
					
			<div class="form-group">
			  		<div class="col-sm-10"></div>
					
					
					
					
		    </div>
				 
				 
				 
				<div class="form-group">
			</div>
			</form>
		</div>
	</body>
</html>