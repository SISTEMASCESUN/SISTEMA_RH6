
<?php 
	session_start();
	require_once "../conexion.php";
	

 ?>
<div class="row">
	<div class="col-sm-12">
		 
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				<span class="glyphicon glyphicon-plus"></span>
				Agregar nuevo  	
				
			</button>
		 <br/>
	
	<h2>USUARIOS DEL SISTEMA</h2>
		<table class="table table-hover table-condensed table-bordered">
			<tr>
				<td>ID</td>
				
				<td>Nombre</td>
				<td>AP</td>
				<td>AM</td>
				<td>USER</td>
				<td>PASS</td>
				<td>TIPO</td>
				<td>EDITAR</td>
				<td>ELIMINAR</td>
			</tr>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT *	from usuarios where id_user='$idp'";
					}else{
						$sql="SELECT * from usuarios";
					}
				}else{
					$sql="SELECT * from usuarios";
				}

				$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
					       $ver[4]."||".
						   $ver[5]."||".
						   $ver[6];
			 ?>

			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
                <td><?php echo $ver[5] ?></td>
                <td><?php echo $ver[6] ?></td>

				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')">
						
					</button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon glyphicon-trash" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>