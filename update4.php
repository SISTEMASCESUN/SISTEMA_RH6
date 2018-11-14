<?php
	
	require 'conexion2.php';
	

	 $id = $_GET['id'];

	$matricula = $_POST['matricula'];
	$id_materia = $_POST['id_materia'];
	$nom_materia = $_POST['nom_materia'];
	$id_maestro = $_POST['id_maestro'];
	$nombre_maestro = $_POST['nombre_maestro'];
	$id_modalidad = $_POST['id_modalidad'];
	$nombre_modalidad = $_POST['nombre_modalidad'];
	

	$sql = "UPDATE asignacion SET matricula='$matricula', id_materia='$id_materia', nom_materia='$nom_materia',id_maestro='$id_maestro',nombre_maestro='$nombre_maestro', id_modalidad='$id_modalidad',nombre_modalidad='$nombre_modalidad' WHERE id_asignacion = '$id'";
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
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					 
					<a href="asignacion.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
