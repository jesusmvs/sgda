<?php

	include "conexion.php";

	if( isset($_GET['idRadioButton']) && !empty($_GET['idRadioButton'])){
	    	
		$busqueda=$_GET['idRadioButton'];
    	
    	$con = mysqli_connect($host,$user,$pw,$db)
		or die ("Problemas al conectar server");
		
		
		
		mysqli_query($con, "SET NAMES 'utf8'");

		mysqli_query($con, "DELETE FROM alumno WHERE alumno.CedulaAlumno = '".$busqueda."'");

		mysqli_query($con, "DELETE FROM relalumnorepresentanteparentesco WHERE relalumnorepresentanteparentesco.ID_Alumno = '".
		$busqueda."'");
	}
?>