<?php
require_once("php/conexion.php");
	
if(isset($_POST['import_data'])){
// validate to check uploaded file is a valid csv file
$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$file_mimes)){
if(is_uploaded_file($_FILES['file']['tmp_name'])){
$csv_file = fopen($_FILES['file']['tmp_name'], 'r');
//fgetcsv($csv_file);
// get data records from csv file
while(($emp_record = fgetcsv($csv_file)) !== FALSE){
// Check if employee already exists with same email
$sql_query = "SELECT * FROM PREGUNTAS WHERE id !=''";
$resultset = mysqli_query($con, $sql_query) or die("database error1:". mysqli_error($con));

// if employee already exist then update details otherwise insert new record
if(mysqli_num_rows($resultset) AND $FLAG==0) {
$sql_update = "DELETE from preguntas where id !=''";
mysqli_query($con, $sql_update) or die("database error2:". mysqli_error($con));
$FLAG=$FLAG+1;
} else{
$mysql_insert = "CALL importar_preguntas ('".$emp_record[0]."')";
mysqli_query($con, $mysql_insert) or die("database error4:". mysqli_error($con));

}
	
}$FLAG=0;	
fclose($csv_file);
$import_status = '?import_status=success';
	   
} else {
$import_status = '?import_status=error';
}
} else {
$import_status = '?import_status=invalid_file';
}
}

 
header("Location: preguntas.php".$import_status);
?>