<?php

	include "conexion.php";

	if( isset($_GET['codigo']) && !empty($_GET['codigo'])){
	    	
			$busqueda=$_GET['codigo'];
	    	
	    	$con = mysqli_connect($host,$user,$pw,$db)
			or die ("Problemas al conectar server");
			
			
			
			mysqli_query($con, "SET NAMES 'utf8'");

			$consulta = mysqli_query($con, "SELECT CodigoCanaima, ModeloCanaima FROM canaima where CodigoCanaima='".$busqueda."'");
			
			$obj = array();
			if (mysqli_num_rows($consulta) > 0){

				$row=mysqli_fetch_array($consulta);
				$obj['codigoCanaima']=$row['CodigoCanaima'];
				$obj['modeloCanaima']=$row['ModeloCanaima'];

				echo json_encode($obj);

			}
	    } else {
	    	echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
	    	
	    };


?>