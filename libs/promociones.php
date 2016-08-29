<?php
	include "conexion.php";
	
	
    if( isset($_POST['literales']) && !empty($_POST['literales']) && isset($_POST['cedulas']) && !empty($_POST['cedulas'])){
    	
		$arregloC = explode(',' , $_POST['cedulas']);
    	$arregloL = explode(',' , $_POST['literales']);
    	

    	$con = mysqli_connect($host,$user,$pw,$db)
		or die ("Problemas al conectar server");
		
		
		
		mysqli_query($con, "SET NAMES 'utf8'");

		$sql = "UPDATE alumno SET ID_Grado = CASE CedulaAlumno ";
		$sql2 = "END, ID_literal = CASE CedulaAlumno ";
		$i=0;
		foreach ($arregloC as $valor) {
			if ($arregloL[$i] == '5') {
				$sql .= "WHEN ".$valor." THEN ID_Grado ";
				$sql2 .= "WHEN ".$valor." THEN ".$arregloL[$i]." ";
			} else{
				$sql .= "WHEN ".$valor." THEN ID_Grado+1 ";
				$sql2 .= "WHEN ".$valor." THEN ".$arregloL[$i]." ";
			}
			
			$i++;
		}
		$sql2 .= "END WHERE CedulaAlumno IN (".$_POST['cedulas'].")";
		
		$sql .= $sql2;
		
		mysqli_query($con, $sql) or die (mysqli_error());

		$sql2 = "UPDATE alumno SET ID_Status='3' where ID_Grado='8'";
		
		mysqli_query($con, $sql2) or die (mysqli_error());

    } else {
    	echo("<script>alert('¡No se pudieron guardar los cambios!');</script>");
    	
    };
	
?>