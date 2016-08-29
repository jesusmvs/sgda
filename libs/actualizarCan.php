<?php

include "conexion.php";

$serial = $_GET['serial'];
$modelo = $_GET['modelo'];
$serialV = $_GET['serialV'];
$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			
mysqli_query($con, "SET NAMES 'utf8'");

mysqli_query($con, "UPDATE canaima SET CodigoCanaima = '".$serial."', ModeloCanaima='".$modelo."' 
where CodigoCanaima = '".$serialV."';") or die (mysqli_error());
mysqli_query($con, "UPDATE alumno SET ID_Canaima='".$serial."' where ID_Canaima='".$serialV."'") or die(mysqli_error());

?>