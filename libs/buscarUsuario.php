<?php

	include "conexion.php";
	
	 if( isset($_GET['nombreU']) && !empty($_GET['nombreU'])){
	    	
			$busqueda=$_GET['nombreU'];
	    	
	    	$con = mysqli_connect($host,$user,$pw,$db)
			or die ("Problemas al conectar server");
			
			
			
			mysqli_query($con, "SET NAMES 'utf8'");

			$consulta = mysqli_query($con, "SELECT * FROM usuario where NombreUsuario='$_GET[nombreU]';") or die(mysqli_error());
			

			
			if (mysqli_num_rows($consulta) > 0){
				echo "1";
			} 
			
	    } else {
	    	echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
	    	
	    };


?>