<?php

	include "conexion.php";

	

	 if( isset($_POST['Respuesta']) && !empty($_POST['Respuesta'])){
	    	
			$con = mysqli_connect($host,$user,$pw,$db)
			or die ("Problemas al conectar server");
			
			mysqli_query($con, "SET NAMES 'utf8'");

			$consulta = mysqli_query($con, "SELECT RespuestaSecreta FROM usuario where NombreUsuario='$_POST[nombreU]' and PreguntaSecreta='$_POST[Pregunta]'");
			
			//$obj = array();
			$respuesta = '';
			if (mysqli_num_rows($consulta) > 0){
				$row = mysqli_fetch_array($consulta);
				$respuesta = $row['RespuestaSecreta'];

				if ($respuesta == $_POST['Respuesta']) {
					echo "Coinciden";
				}

			}
	    } else {
	    	echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
	    	
	    };


?>