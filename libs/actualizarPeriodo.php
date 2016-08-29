<?php

include "conexion.php";

$idPer = $_GET['idPer'];
$descripcionPeriodo = $_GET['descripcionPeriodo'];

$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			
mysqli_query($con, "SET NAMES 'utf8'");


mysqli_query($con, "UPDATE periodoescolar SET DescripcionPeriodo ='".$descripcionPeriodo."' 
WHERE Actual ='1';") or die (mysqli_error());

/*mysqli_query($con, "INSERT INTO periodoescolar (IDPeriodo,DescripcionPeriodo,Actual)
VALUES (NULL ,'".$descripcionPeriodo."','1')") or die(mysqli_error())
*/
?>