<?php
	
	//header("Content-Type: text/html;charset=utf-8");
	include "conexion.php";
	
	$busqueda = $_GET['cedulaEscolar'];
	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	mysqli_query($con, "SET NAMES 'utf8'");

	$consulta = mysqli_query($con, "SELECT * FROM alumno where alumno.CedulaAlumno='".$busqueda."'");
	
	if (mysqli_num_rows($consulta) > 0){
	
		echo 1;

	} else {
    	
    	echo 0;
    	
    };
?>