<?php

include "conexion.php";

$u = $_GET['u'];
$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			

			
mysqli_query($con, "SET NAMES 'utf8'");

mysqli_query($con, "UPDATE usuario SET ID_StatusU = '1', PwUsuario='".$u."' where NombreUsuario = '".$u."';") or die (mysqli_error());

echo $u;
?>