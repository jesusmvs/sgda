<?php
	
	include "conexion.php";
	$cedula = $_GET['idRadioButton'];
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	
	//echo $cedula;
	mysqli_query($con, "SET NAMES 'utf8'");
	$consultax = mysqli_query($con, "SELECT ID_Canaima FROM alumno WHERE alumno.CedulaAlumno='".$cedula."'");
	$celda = mysqli_fetch_array($consultax);
	$codigo = $celda['ID_Canaima'];
	//echo is_null($codigo);
	/*$aux = is_null($codigo);
	$aux2 = '0';
	if ($codigo=='') {
		$aux2 = '2';
	}
	if ($aux === true) {
		$aux2 = '1';
	}
	if ($codigo != '0') {
		if ($aux2!='1') {
			echo 'El alumno tiene asignada la canaimita '.$codigo.', si le asigna un nuevo equipo el actual pasara a status "Inactivo"</br>';
		}
		
	}*/
	$consulta = mysqli_query($con, "SELECT * FROM canaima WHERE canaima.IDStatusCanaima='1' ORDER BY canaima.CodigoCanaima DESC");
	
	if (mysqli_num_rows($consulta) > 0){
		echo '<select class="form-control input-lg" id="comboACanaima2">
				  <option value="Canaimita">- Seleccione una Canaimita -</option>';
		while ($row=mysqli_fetch_array($consulta)) {
			echo '<option value="'.$row['CodigoCanaima'].'">'.$row['CodigoCanaima'].', '.$row['ModeloCanaima'].'</option>';
		}
		echo '</select>';

	} else {
    	
    	echo "<h2>NO EXISTEN REGISTROS!</h2>";
    	
    };
?>