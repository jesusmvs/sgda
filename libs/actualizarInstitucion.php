<?php

include "conexion.php";

$idIns = $_GET['idIns'];
$codigo = $_GET['codigo'];
//$nombreIns = $_GET['nombreIns'];

$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			
mysqli_query($con, "SET NAMES 'utf8'");

if ($idIns=='') {

	mysqli_query($con, "INSERT INTO institucion (IDinstitucion,DireccionInstitucion,TelefonoInstitucion,TelefonoAlternativo,NombreInstitucion)
	VALUES ('".$codigo."','$_GET[DireccionInstitucion]', '$_GET[TelefonoInstitucion]', '$_GET[TelefonoAlternativo]', '$_GET[NombreInstitucion]');")
	or die(mysqli_error());
} else {
	mysqli_query($con, "UPDATE institucion SET IDinstitucion='".$codigo."',
	DireccionInstitucion = '$_GET[DireccionInstitucion]',
	TelefonoInstitucion = '$_GET[TelefonoInstitucion]',
	TelefonoAlternativo = '$_GET[TelefonoAlternativo]',
	NombreInstitucion = '$_GET[NombreInstitucion]' 
	WHERE IDinstitucion = '".$idIns."';") or die (mysqli_error());
}


?>