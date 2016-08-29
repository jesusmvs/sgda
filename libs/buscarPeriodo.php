<?php

	include "conexion.php";
 	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	
	
	mysqli_query($con, "SET NAMES 'utf8'");

	$consulta=mysqli_query($con, "SELECT * FROM periodoescolar where Actual='1';");
	
	$obj = array();
	if (mysqli_num_rows($consulta) > 0){
		$row=mysqli_fetch_array($consulta);
		echo '<input type="text" class="form-control input-lg" maxlength="12" placeholder="Periodo Escolar" name="periodoEscolarM"
		 id="periodoEscolarM" title="Ingresar Periodo Escolar con formato Año Inicial - Año Finalización" value="'.$row['DescripcionPeriodo'].'" 
		 required/>';
		/*$row=mysqli_fetch_array($consulta);
		$obj['idPer']=$row['IDPeriodo'];
		$obj['periodo']=$row['DescripcionPeriodo'];
		
		echo json_encode($obj);*/
	} else {
		echo "No existe ningun periodo guardado";
	}
?>