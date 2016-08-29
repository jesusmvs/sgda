<?php

	include "conexion.php";
	//echo $_POST['codigoCanaima'];
	if( isset($_POST['codigoCanaima']) && !empty($_POST['codigoCanaima'])){
	    	
		$busqueda=$_POST['codigoCanaima'];
    	//echo $busqueda."segunda";
    	$con = mysqli_connect($host,$user,$pw,$db)
		or die ("Problemas al conectar server");
		
		mysqli_query($con, "SET NAMES 'utf8'");

		$consulta = mysqli_query($con, "SELECT * FROM canaima where canaima.CodigoCanaima='".$busqueda."'");
		
		//$obj = array();
		if (mysqli_num_rows($consulta) > 0){
			$row= mysqli_fetch_array($consulta);
			echo $row['CodigoCanaima'];
		}
	}


?>