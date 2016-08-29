<?php

include "conexion.php";

$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");

			
mysqli_query($con, "SET NAMES 'utf8'");

$consulta=mysqli_query($con, "SELECT * FROM periodoescolar WHERE Actual = '1'") or die (mysqli_error());
$row = mysqli_fetch_array($consulta);
$IDPer = $row['IDPeriodo'];

$consulta=mysqli_query($con, "SELECT * FROM documento where DescripcionDocumento='$_POST[doc]'") or die(mysqli_error());
$row = mysqli_fetch_array($consulta);
$IDDoc = $row['IDDocumento'];

$consulta = mysqli_query($con, "SELECT * FROM reldocper WHERE IDDoc='".$IDDoc."' and IDPer='".$IDPer."' ") or die(mysqli_error());

if (mysqli_num_rows($consulta)>0) {
	mysqli_query($con, "UPDATE reldocper SET Cantidad=Cantidad+1 WHERE IDDoc='".$IDDoc."' and IDPer='".$IDPer."'") or die(mysqli_error());
	//echo "act";
} else{
	mysqli_query($con, "INSERT INTO reldocper (IDrelDocPer,IDDoc,IDPer,Cantidad)
VALUES (NULL ,'".$IDDoc."','".$IDPer."','1');") or die(mysqli_error());
	//echo "insert";
}

$consulta=mysqli_query($con, "SELECT * FROM documento where DescripcionDocumento='$_POST[doc2]'") or die(mysqli_error());
$row = mysqli_fetch_array($consulta);
$IDDoc = $row['IDDocumento'];

$consulta = mysqli_query($con, "SELECT * FROM reldocper WHERE IDDoc='".$IDDoc."' and IDPer='".$IDPer."' ") or die(mysqli_error());

if (mysqli_num_rows($consulta)>0) {
	mysqli_query($con, "UPDATE reldocper SET Cantidad=Cantidad+1 WHERE IDDoc='".$IDDoc."' and IDPer='".$IDPer."'") or die(mysqli_error());
	//echo "act";
} else{
	mysqli_query($con, "INSERT INTO reldocper (IDrelDocPer,IDDoc,IDPer,Cantidad)
VALUES (NULL ,'".$IDDoc."','".$IDPer."','1');") or die(mysqli_error());
	//echo "insert";
}

?>