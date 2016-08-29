<?php
	
	include "conexion.php";
	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	
	
	mysqli_query($con, "SET NAMES 'utf8'");

	$consulta = mysqli_query($con, "SELECT canaima.CodigoCanaima, canaima.ModeloCanaima, statuscanaima.DescripcionStatusCanaima FROM canaima JOIN statuscanaima ON canaima.IDStatusCanaima = statuscanaima.IDStatusCanaima AND (canaima.IDStatusCanaima=1 OR canaima.IDStatusCanaima=2) order by CodigoCanaima ASC");
	
	if (mysqli_num_rows($consulta) > 0){
		echo '<select multiple class="form-control input-lg" id="comboCCan">
				  <option value="canaima">- Seleccione una Canaimita -</option>';
		while ($row=mysqli_fetch_array($consulta)) {
			echo '<option value="'.$row['CodigoCanaima'].'">'.$row['CodigoCanaima'].', '.$row['ModeloCanaima'].', '.$row['DescripcionStatusCanaima'].'</option>';
		}
		echo '</select>';

	} else {
    	
    	echo "<h2>NO EXISTEN REGISTROS!</h2>";
    	
    };
?>