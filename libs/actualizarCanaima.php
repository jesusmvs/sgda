<?php

include "conexion.php";

$serial = $_GET['serial'];
$modelo = $_GET['modelo'];
$cedula = $_GET['idRadioButton'];

$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
						
mysqli_query($con, "SET NAMES 'utf8'");

$consulta = mysqli_query($con, "SELECT ID_Canaima FROM alumno where alumno.CedulaAlumno='".$cedula."'");
$row = mysqli_fetch_array($consulta);
$serialViejo  = $row['ID_Canaima'];

$consulta=mysqli_query($con, "SELECT * FROM canaima WHERE canaima.CodigoCanaima='".$serialViejo."'");

if (mysqli_num_rows($consulta)>0) {
	mysqli_query($con, "UPDATE canaima SET 
	CodigoCanaima ='".$serial."',
	ModeloCanaima ='".$modelo."' 
	WHERE canaima.CodigoCanaima = '".$serialViejo."';") or die (mysqli_error());
} else {
	mysqli_query($con, "INSERT INTO canaima (CodigoCanaima,ModeloCanaima)VALUES ('".$serial."', '".$modelo."');") or die (mysqli_error());
}


mysqli_query($con, "UPDATE alumno SET ID_Canaima = '".$serial."' 
where alumno.CedulaAlumno = '".$cedula."';") or die (mysqli_error());

?>