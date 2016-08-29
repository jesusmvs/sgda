<?php
	
	include "conexion.php";
	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	
	
	mysqli_query($con, "SET NAMES 'utf8'");

	$consulta = mysqli_query($con, "SELECT NombreUsuario FROM usuario where ID_StatusU=2 order by NombreUsuario ASC");
	
	if (mysqli_num_rows($consulta) > 0){
		echo '<select multiple class="form-control input-lg" id="comboCBloq">
				  <option value="bloqueado">- Seleccione un Usuario -</option>';
		while ($row=mysqli_fetch_array($consulta)) {
			echo '<option value="'.$row['NombreUsuario'].'">'.$row['NombreUsuario'].'</option>';
		}
		echo '</select>';

	} else {
    	
    	echo "<h2>NO EXISTEN REGISTROS!</h2>";
    	
    };
?>