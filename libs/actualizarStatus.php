<?php

include "conexion.php";

$cedula = $_GET['idRadioButton'];

$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
						
mysqli_query($con, "SET NAMES 'utf8'");

mysqli_query($con, "UPDATE alumno 
SET ID_Status = '2' 
WHERE alumno.CedulaAlumno = '".$cedula."';") or die (mysqli_error());

?>