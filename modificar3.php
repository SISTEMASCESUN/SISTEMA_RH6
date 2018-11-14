<?php
	require 'conexion2.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM catalogo_alumnos WHERE id = '$id'";
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
			
			<form class="form-horizontal" method="POST" action="update3.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">NOMBRE</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="ap" class="col-sm-2 control-label">APELLIDO PATERNO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ap" name="ap" placeholder="ap" value="<?php echo $row['ap']; ?>"  required>
					</div>
				 
				 </div>
				 
				 
				 
				<div class="form-group">
					<label for="am" class="col-sm-2 control-label">APELLIDO MATERNO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="am" name="am" placeholder="am" value="<?php echo $row['am']; ?>"  required>
					</div>
				 
				 </div>
				 
				 
				<div class="form-group">
					<label for="idcarrera" class="col-sm-2 control-label">MATRICULA</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="idcarrera" name="matricula" placeholder="idcarrera" value="<?php echo $row['matricula']; ?>"  required>
					</div>
					
					
				 
				<div class="form-group">
					<label for="idmodalidad" class="col-sm-2 control-label">MODALIDAD</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="idmodalidad" name="idmodalidad" placeholder="idmodalidad" value="<?php echo $row['idmodalidad']; ?>"  required>
					</div>
				 <div class="form-group">
					<label for="grupo" class="col-sm-2 control-label">GRUPO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="grupo" name="grupo" placeholder="grupo" value="<?php echo $row['grupo']; ?>"  required>
					</div>
				 </div>
				 
				 
				 
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>