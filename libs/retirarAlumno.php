<?php

include "conexion.php";

$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			
mysqli_query($con, "SET NAMES 'utf8'");

mysqli_query($con, "UPDATE alumno SET 
ID_Status = '4' 
WHERE alumno.CedulaAlumno = '$_POST[idRadioButton]';") or die (mysqli_error());

$consulta=mysqli_query($con, "SELECT * FROM periodoescolar WHERE Actual = '1'") or die (mysqli_error());
$row = mysqli_fetch_array($consulta);
$IDPer = $row['IDPeriodo'];

$consulta=mysqli_query($con, "SELECT * FROM motivoret where DescripcionMotivo='$_POST[motivo]'") or die(mysqli_error());
$row = mysqli_fetch_array($consulta);
$IDMotivo = $row['IDMotivo'];

$fecha = date("Y/m/d");

mysqli_query($con, "INSERT INTO retiro (IDRetiro,FechaRetiro,IDAlumno,IDPeriodo,IDMotivo) 
	VALUES (NULL, '".$fecha."', '$_POST[idRadioButton]', '".$IDPer."', '".$IDMotivo."');") or die(mysqli_error());

echo "exito";

?>