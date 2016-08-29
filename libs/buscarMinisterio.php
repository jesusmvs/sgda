<?php

	include "conexion.php";
 	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	
	
	mysqli_query($con, "SET NAMES 'utf8'");

	$consulta=mysqli_query($con, "SELECT * FROM ministerio;");
	
	$obj = array();
	if (mysqli_num_rows($consulta) > 0){

		$row=mysqli_fetch_array($consulta);
		$obj['idMin']=$row['IDMinisterio'];
		$obj['nombreMin']=$row['NombreMinisterio'];
	} else {
		$obj['idMin']="";
		$obj['nombreMin']="";
	}
	echo json_encode($obj);

	 

?>