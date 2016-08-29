<?php

include "conexion.php";

$cedulaVieja = $_GET['cedulaDirec'];
$cedulaNva = $_GET['cedulaDirectorNva'];
$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
						
mysqli_query($con, "SET NAMES 'utf8'");

if ($cedulaVieja == '') {
	mysqli_query($con, "INSERT INTO director (CedulaDirector,NombresDirector,ApellidosDirector) 
	VALUES ('".$cedulaNva."','$_GET[nombreDirector]','$_GET[apellidoDirector]');") or die (mysqli_error());
} else {
	mysqli_query($con, "UPDATE director SET CedulaDirector = '".$cedulaNva."',
	NombresDirector = '$_GET[nombreDirector]',
	ApellidosDirector = '$_GET[apellidoDirector]' 
	WHERE director.CedulaDirector = '".$cedulaVieja."';") or die (mysqli_error());
}

?>