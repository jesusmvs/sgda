<?php

include "conexion.php";
$serial = $_GET['serial'];
$modelo = $_GET['modelo'];
$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			

			
mysqli_query($con, "SET NAMES 'utf8'");

mysqli_query($con, "INSERT INTO canaima (CodigoCanaima,ModeloCanaima,IDStatusCanaima) VALUES ('".$serial."', '".$modelo."', '1');") 
or die (mysqli_error());

//$consulta = mysqli_query($con, "SELECT * FROM parentesco where parentesco.DescripcionParentesco='".$repParentesco."'");


?>