<?php

	include "conexion.php";

	

	 if( isset($_POST['CIMadre']) && !empty($_POST['CIMadre'])){
	    	
			$busqueda=$_POST['CIMadre'];
	    	
	    	$con = mysqli_connect($host,$user,$pw,$db)
			or die ("Problemas al conectar server");
			
			
			
			mysqli_query($con, "SET NAMES 'utf8'");

			$consulta = mysqli_query($con, "SELECT * FROM representante where representante.CedulaRepresentante='".$busqueda."'");
			
			$obj = array();
			if (mysqli_num_rows($consulta) > 0){
				while ($row=mysqli_fetch_array($consulta)) {
					
					$obj['nombre']=$row['NombreRepresentante'];
					$obj['apellido']= $row['ApellidoRepresentante'];
				
                }

                echo json_encode($obj);

			}
	    } else {
	    	echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
	    	
	    };


?>