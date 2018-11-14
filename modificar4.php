<?php
	require 'conexion2.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM asignacion WHERE id_asignacion = '$id'";
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
			
		  <form class="form-horizontal" method="POST" action="update4.php?id=<?php echo $id;?>" autocomplete="off">
		  
			<table width="813" border="0">
  <tbody>
    <tr>
      <td width="0">&nbsp;</td>
      <td width="309"><span class="form-group">
        <label for="matricula" class="col-sm-2 control-label">MATRICULA</label>
      </span></td>
      <td width="262"><span class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="matricula" placeholder="matricula" value="<?php echo $row['matricula']; ?>" required>
      </span></td>
      <td width="24">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="form-group">
        <label for="id_materia2" class="col-sm-2 control-label">ID_MATERIA</label>
      </span></td>
      <td><span class="col-sm-10">
        <input type="text" class="form-control" id="id_materia" name="id_materia" placeholder="id_materia" value="<?php echo $row['id_materia']; ?>"  required>
      </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="form-horizontal">
      NOMBRE DE MATERIA
      </span></td>
      <td><span class="col-sm-10">
        <input type="text" class="form-control" id="am2" name="nom_materia" placeholder="nom_materia" value="<?php echo $row['nom_materia']; ?>"  required>
      </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label for="id_maestro" class="col-sm-2 control-label">ID_MAESTRO</label></td>
      <td><span class="col-sm-10">
        <input type="text" class="form-control" id="am3" name="id_maestro" placeholder="id_maestro" value="<?php echo $row['id_maestro']; ?>"  required>
      </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="form-horizontal">
        NOMBRE DE MAESTRO
      </span></td>
      <td><span class="col-sm-10">
        <input type="text" class="form-control" id="am" name="nombre_maestro" placeholder="nombre_maestro" value="<?php echo $row['nombre_maestro']; ?>"  required>
      </span></td>
      <td><input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label for="id_modalidad" class="col-sm-2 control-label">ID_MODALIDAD</label></td>
      <td><span class="col-sm-10">
        <input type="text" class="form-control" id="id_modalidad" name="id_modalidad" placeholder="id_modalidad" value="<?php echo $row['id_modalidad']; ?>"  required>
      </span></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>NOMBRE DE MODALIDAD
		</td>
      <td><span class="col-sm-10">
        <input type="text" class="form-control" id="nombre_modalidad" name="nombre_modalidad" placeholder="nombre_modalidad" value="<?php echo $row['nombre_modalidad']; ?>"  required>
      </span></td>
      <td></td>
      
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