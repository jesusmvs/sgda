<?php

include "conexion.php";

$canaimita = $_GET['canaimita'];
$cedula = $_GET['idRadioButton'];
$con = mysqli_connect($host,$user,$pw,$db) or die ("Problemas al conectar server");
			
mysqli_query($con, "SET NAMES 'utf8'");

mysqli_query($con, "UPDATE alumno SET ID_Canaima = '".$canaimita."' where alumno.CedulaAlumno = '".$cedula."';") or die (mysqli_error());
mysqli_query($con, "UPDATE canaima SET IDStatusCanaima = '2' where canaima.CodigoCanaima = '".$canaimita."';") or die (mysqli_error());

?>