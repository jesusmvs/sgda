<?php

	include "conexion.php";

	

	 if( isset($_POST['nombreU']) && !empty($_POST['nombreU'])){
	    	
			$busqueda=$_POST['nombreU'];
	    	
	    	$con = mysqli_connect($host,$user,$pw,$db)
			or die ("Problemas al conectar server");
			
			$consulta = mysqli_query($con, "SELECT * FROM usuario where NombreUsuario='".$busqueda."'");
			
			//$obj = array();
			if (mysqli_num_rows($consulta) > 0){
				$row=mysqli_fetch_array($consulta);
				
				if ($row['ID_StatusU']==2) {
						echo "bloqueado";
				} else {
					echo $row['PreguntaSecreta'];
				}	
				

			}
	    } else {
	    	echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
	    	
	    };


?>