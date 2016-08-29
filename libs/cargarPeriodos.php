<?php
	
	include "conexion.php";
	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	
	
	mysqli_query($con, "SET NAMES 'utf8'");

	$consulta = mysqli_query($con, "SELECT * FROM periodoescolar ORDER BY IDPeriodo DESC");
	
	if (mysqli_num_rows($consulta) > 0){
		echo '<select class="form-control input-lg" id="comboPer">
				  <option value="periodo">- Seleccione un Periodo Escolar -</option>';
		while ($row=mysqli_fetch_array($consulta)) {
			echo '<option value="'.$row['IDPeriodo'].'">'.$row['DescripcionPeriodo'].'</option>';
		}
		echo '</select>';

	} else {
    	
    	echo "<h2>NO EXISTEN REGISTROS!</h2>";
    	
    };
?>