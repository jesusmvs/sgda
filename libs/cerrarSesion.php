<?php
session_start();
include "conexion.php";
$con = mysqli_connect($host,$user,$pw,$db) or die ("Problemas al conectar server");              

mysqli_query($con, "SET NAMES 'utf8'");
mysqli_query($con, "UPDATE usuario set SesionInv='0' where NombreUsuario='jesusmvs'") or die(mysqli_error());
session_destroy();
?>