<?php

	include "conexion.php";
 	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	
	
	mysqli_query($con, "SET NAMES 'utf8'");

	$consulta=mysqli_query($con, "SELECT * FROM director;");
	
	$obj = array();
	if (mysqli_num_rows($consulta) > 0){

		$row=mysqli_fetch_array($consulta);
		$obj['cedula']=$row['CedulaDirector'];
		$obj['nombre']=$row['NombresDirector'];
		$obj['apellido']=$row['ApellidosDirector'];
	} else {
		$obj['cedula']='';
		$obj['nombre']='';
		$obj['apellido']='';
	}
	echo json_encode($obj);   
	 

?>