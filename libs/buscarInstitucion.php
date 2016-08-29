<?php

	include "conexion.php";
 	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	
	
	mysqli_query($con, "SET NAMES 'utf8'");

	$consulta=mysqli_query($con, "SELECT * FROM institucion;");
	
	$obj = array();
	if (mysqli_num_rows($consulta) > 0){

		$row=mysqli_fetch_array($consulta);
		$obj['idIns']=$row['IDinstitucion'];
		$obj['nombreIns']=$row['NombreInstitucion'];
		$obj['direccionIns']=$row['DireccionInstitucion'];
		$obj['telefonoIns']=$row['TelefonoInstitucion'];
		$obj['telefonoAlt']=$row['TelefonoAlternativo'];
	} else {
		$obj['idIns']='';
		$obj['nombreIns']='';
		$obj['direccionIns']='';
		$obj['telefonoIns']='';
		$obj['telefonoAlt']='';
	}
	echo json_encode($obj);   
	 

?>