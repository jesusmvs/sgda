<?php

include "conexion.php";

$grado          = $_GET['comboAlGrado2'];
$literal        = $_GET['comboAlLiteral2'];
$comportamiento = $_GET['comboComportamiento'];

$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			
mysqli_query($con, "SET NAMES 'utf8'");

$consulta = mysqli_query($con, "SELECT * FROM grado where grado.DescripcionGrado='".$grado."'");
$row=mysqli_fetch_array($consulta);
$idGrado  = $row['IDGrado'];

$consulta = mysqli_query($con, "SELECT * FROM literal where literal.DescripcionLiteral='".$literal."'");
$row=mysqli_fetch_array($consulta);
$idLiteral = $row['IDLiteral'];

$consulta = mysqli_query($con, "SELECT * FROM comportamiento where comportamiento.DescripcionComportamiento='".$comportamiento."'");
$row=mysqli_fetch_array($consulta);
$idComportamiento  = $row['IDComportamiento'];

mysqli_query($con, "UPDATE alumno SET 
CedulaAlumno ='$_GET[cedula]',
NombresAlumno = '$_GET[nombreAlumno2]',
ApellidosAlumno = '$_GET[apellidoAlumno2]',
Ciudad = '$_GET[ciudadNacimiento2]',
Estado = '$_GET[estadoNacimiento2]',
ID_Grado = '".$idGrado."',
ID_Comportamiento = '".$idComportamiento."',
ID_Literal = '".$idLiteral."',
Municipio = '$_GET[municipio2]',
Direccion = '$_GET[direccion2]',
Alergias = '$_GET[enfermedad2]' 
WHERE alumno.CedulaAlumno = '$_GET[idRadioButton]';") or die (mysqli_error());

mysqli_query($con, "UPDATE relalumnorepresentanteparentesco SET ID_alumno = '$_GET[cedula]' WHERE relalumnorepresentanteparentesco.ID_alumno = '$_GET[idRadioButton]';") or die (mysqli_error());

?>