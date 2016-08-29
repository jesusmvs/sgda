<?php

include "conexion.php";

$idMin = $_GET['idMin'];
$nombreMin = $_GET['nombreMin'];

$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
	
mysqli_query($con, "SET NAMES 'utf8'");

if ($idMin == "") {
	
	mysqli_query($con, "INSERT INTO ministerio (IDMinisterio,NombreMinisterio) VALUES (NULL,'".$nombreMin."');") or die (mysqli_error());
		
} else {
	
	mysqli_query($con, "UPDATE ministerio SET NombreMinisterio = '".$nombreMin."' WHERE IDMinisterio ='".$idMin."';") or die (mysqli_error());
	
}



?>