<?php 
  
session_start();
require_once("php/conexion.php")
 
 ?>

  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>CARGA DE DOCUMENTOS ALUMNOS</title>
    
	 

<link href="css/bootstrap.min.css" rel="stylesheet" >
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery.dataTables.min.js"></script>
	
	<script src="librerias/bootstrap/js/bootstrap.js"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>
   <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <style type="text/css">
  body {
	background-color: #79CDFC;
}
  </style>
  <script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.dataTables.min.js"></script>
  
  

		<script>
			/*LEE LA TABLA CUANDO */
			$(document).ready(function(){
				$('#mitabla4').DataTable({
					"order": [[1, "asc"]],
					"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina",
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					},
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "server_process4.php"
				});	
			});
			
		</script>
  
  
  
  
</head>

	
</div>


<!-- Modal para edicion de datos -->
I
	
	
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
   
   <img src="IMAGEN/LOGO CESUN BLANCO.png" width="250" height="50" alt="" href="index.html"/>

     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-address-book"></i>
            <span class="nav-link-text">usuarios</span>
          </a>
        </li>

        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
			  <i class="fa fas fa-upload"></i>
            <span class="nav-link-text">Carga de documentos</span>
          </a>
          
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="cat_alumnos.php">Cat. Alumnos</a>
            </li>
            <li>
              <a href="asignacion.php">Asignacion</a>
            </li>
             <li>
              <a href="preguntas.php">Carga de preguntas</a>
            </li>
		  </ul>
            
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Encuestas</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Navbar</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
         
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Salir</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Carga_Documentos</a>
        </li>
        <li class="breadcrumb-item active">Alumnos</li>
      </ol>
       
       
       
       
	<div class="container2">
     
<div class="panel panel-default">
<div class="panel-body">
<br>
<div class="row">
<form action="import2.php" method="post" enctype="multipart/form-data" id="import_form">
<div class="col-md-3">
  <table width="200" border="0">
  <tbody>
    <tr>
      <td><strong>SUBIR ARCHIVO:</strong></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="file" name="file" /></td>
      <td><input type="submit" class="btn btn-primary" name="import_data" value="CARGAR"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</div>
<div class="col-md-5">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
  </p>
</div>
	</form>
</div>
<div class="container">
			<div class="row">
			<br/>
				<h2 style="text-align:center"></h2>
			</div>
			
			<div class="row">
				<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
			</div>
			
			<br>
			
			<div class="row table-responsive">
			  <table width="1059"  id="mitabla4">
					<thead>
						<tr>
							
							<th>MATRICULA</th>
							<th>ID_MATERIA</th>
							<th>NOMBRE DE MATERIA</th>
							<th>ID_PROFESOR</th>
							<th>NOMBRE DE PROFESOR</th>
							<th>ID_MODALIDAD</th>
							<th>NOMBRE DE MODALIDAD</th>
							<th>EDITAR</th>
							<th>ELIMINAR</th>
						</tr>
					</thead>
					
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
		
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
</div>
</div>
</div>
	</div>
	
       
      <!-- Blank div to give the page height to preview the fixed vs. static navbar-->
      <div style="height: 1000px;"></div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © CESUN</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Salir</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Esta seguro de avandonar la seccion."</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Aceptar</a>
          </div>
        </div>
      </div>
    </div>
    
    
    
     
</div> 
</body>

</html>

