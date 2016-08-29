<?php

include "conexion.php";
$nombre = $_GET['nombre'];
$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			

			
mysqli_query($con, "SET NAMES 'utf8'");

mysqli_query($con, "INSERT INTO usuario (
IDUsuario ,
NombreUsuario ,
PwUsuario ,
PreguntaSecreta ,
RespuestaSecreta ,
ID_TipoDeUsuario)
VALUES (NULL , '".$nombre."', '$_GET[ContraseniaNuevoUsuario]', '$_GET[PreguntaSeguridadNvoUsuario]', '$_GET[RespuestaSeguridadNvoUsuario]', '$_GET[comboRol]');") 
or die (mysqli_error());

//$consulta = mysqli_query($con, "SELECT * FROM parentesco where parentesco.DescripcionParentesco='".$repParentesco."'");


?>
