<?php

	include "conexion.php";

	if( isset($_GET['idRadioButton']) && !empty($_GET['idRadioButton'])){
	    	
			$busqueda=$_GET['idRadioButton'];
	    	
	    	$con = mysqli_connect($host,$user,$pw,$db)
			or die ("Problemas al conectar server");
			
			
			
			mysqli_query($con, "SET NAMES 'utf8'");

			$consulta = mysqli_query($con, "SELECT ID_Canaima FROM alumno where alumno.CedulaAlumno='".$busqueda."'");
			
			$obj = array();
			if (mysqli_num_rows($consulta) > 0){

				$row=mysqli_fetch_array($consulta);
				$obj['serialCanaima']=$row['ID_Canaima'];

				$consulta2 = mysqli_query($con, "SELECT * FROM canaima where canaima.CodigoCanaima='".$row['ID_Canaima']."'");
				$row2=mysqli_fetch_array($consulta2);

				$obj['modeloCanaima']=$row2['ModeloCanaima'];

				echo json_encode($obj);

			}
	    } else {
	    	echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
	    	
	    };


?>