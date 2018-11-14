<?php
	
	require 'conexion2.php';
	
	$nombre = $_POST['nombre'];
	 $ap = $_POST['ap'];
	$am = $_POST['am'];
	 $matricula = $_POST['matricula'];
	 $idmodalidad = $_POST['idmodalidad'];

	 $grupo = $_POST['grupo'];

	$sql = "call nuevo_alumno ('$nombre', '$ap', '$am', '$matricula', '$idmodalidad','$grupo')";
$resultado = $mysqli->query($sql);
	
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
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="cat_alumnos.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
