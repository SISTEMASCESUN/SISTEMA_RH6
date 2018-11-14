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
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="id" class="col-sm-2 control-label">NOMBRE</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="siglas" class="col-sm-2 control-label">AP</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ap" name="ap" placeholder="ap" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="am" class="col-sm-2 control-label">AM</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="am" name="am" placeholder="am">
					</div>
				</div>
				
					<div class="form-group">
					<label for="matricula" class="col-sm-2 control-label">MATRICULA</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="matricula" name="matricula" placeholder="matricula">
					</div>
				</div>
					<div class="form-group">
					<label for="idmodalidad" class="col-sm-2 control-label">IDMODALIDAD</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="idmodalidad" name="idmodalidad" placeholder="idmodalidad">
					</div>
				</div>
				<div class="form-group">
					<label for="GRUPO" class="col-sm-2 control-label">GRUPO</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="grupo" name="grupo" placeholder="grupo">
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