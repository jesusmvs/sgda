<?php

include "conexion.php";

$serial = $_GET['codigo'];
$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			

			
mysqli_query($con, "SET NAMES 'utf8'");

mysqli_query($con, "UPDATE canaima SET IDStatusCanaima = '3' 
where CodigoCanaima = '".$serial."';") or die (mysqli_error());

$consulta = mysqli_query($con, "SELECT * FROM alumno WHERE alumno.ID_Canaima = '".$serial."'");
if (mysqli_num_rows($consulta)>0) {
	mysqli_query($con, "UPDATE alumno SET ID_Canaima=null where ID_Canaima = '".$serial."'");
}

?>