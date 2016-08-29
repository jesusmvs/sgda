<?php

include "conexion.php";

$nombreAl  = $_GET['nombreAlumno'];
$nombreRep = $_GET['nombreRep'];
$nombrePad = $_GET['nombrePadre'];
$nombreMad = $_GET['nombreMadre'];
$grado     = $_GET['comboAlGrado'];
$literal   = $_GET['comboAlLiteral'];
$padreRep  = $_GET['padreRep'];
$madreRep  = $_GET['madreRep'];
$existePad = $_GET['existePad'];
$existeMad = $_GET['existeMad'];
$existeRep = $_GET['existeRep'];
$repParentesco = $_GET['comboRepPar'];

$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			

			
mysqli_query($con, "SET NAMES 'utf8'");

if ($_GET['comboAlSex'] == "Masculino")  {
	$idSexo = 1;
} else {
	$idSexo = 2;
}

$consulta = mysqli_query($con, "SELECT * FROM grado where grado.DescripcionGrado='".$grado."'");

$row=mysqli_fetch_array($consulta);
$idGrado  = $row['IDGrado'];

$consulta = mysqli_query($con, "SELECT * FROM literal where literal.DescripcionLiteral='".$literal."'");
$row=mysqli_fetch_array($consulta);
$idLiteral = $row['IDLiteral'];

$consulta = mysqli_query($con, "SELECT * FROM status where status.DescripcionStatus='$_GET[comboStatus]'");
$row=mysqli_fetch_array($consulta);
$idStatus = $row['IDStatus'];

mysqli_query($con, "INSERT INTO alumno (CedulaAlumno,NombresAlumno,ApellidosAlumno,Nacimiento,Ciudad,Estado,ID_Grado,ID_Sexo,ID_Canaima,ID_Comportamiento,ID_Literal,Municipio,Direccion,Alergias,ID_Status)
VALUES ('$_GET[cedEsc]', '$_GET[nombreAlumno]', '$_GET[apellidoAlumno]', '$_GET[nacim]', '$_GET[CiudadNacimiento]', '$_GET[EstadoNacimiento]', '".$idGrado."', '".$idSexo."','', '1', '".$idLiteral."', '$_GET[municipioNacimiento]', '$_GET[direccion]', '$_GET[enfermedades]', '".$idStatus."' );") 
or die (mysqli_error());

$consulta = mysqli_query($con, "SELECT * FROM parentesco where parentesco.DescripcionParentesco='".$repParentesco."'");

$row=mysqli_fetch_array($consulta);
$idParentesco  = $row['IDParentesco'];

if ($madreRep == 1) {
	mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) 
	VALUES (NULL, '$_GET[cedEsc]', '$_GET[CedulaMadre]', '2', '1');") or die(mysqli_error());
	if ($existeMad == 0){
		mysqli_query($con, "INSERT INTO representante (CedulaRepresentante,NombreRepresentante,ApellidoRepresentante)
		VALUES ('$_GET[CedulaMadre]', '$_GET[nombreMadre]', '$_GET[apellidoMadre]');") or die (mysqli_error());
	}
	if (isset($_GET['CedulaPadre']) && !empty($_GET['CedulaPadre'])){
		mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco, ID_alumno, ID_representante,ID_parentesco,RepresentanteEmpresa) 
		VALUES (NULL, '$_GET[cedEsc]', '$_GET[CedulaPadre]', '1', '0');") or die(mysqli_error());
		if ($existePad == 0) {
		mysqli_query($con, "INSERT INTO representante(CedulaRepresentante,NombreRepresentante,ApellidoRepresentante)
		VALUES ('$_GET[CedulaPadre]', '$_GET[nombrePadre]', '$_GET[apellidoPadre]');") or die (mysqli_error());
		} 
	}
} elseif ($padreRep == 1) {
	mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) 
	VALUES (NULL, '$_GET[cedEsc]', '$_GET[CedulaPadre]', '1', '1');") or die(mysqli_error());
	if ($existePad == 0) {
		mysqli_query($con, "INSERT INTO representante (CedulaRepresentante,NombreRepresentante,ApellidoRepresentante)
		VALUES ('$_GET[CedulaPadre]', '$_GET[nombrePadre]', '$_GET[apellidoPadre]');") or die (mysqli_error());
	}
	
	if (isset($_GET['CedulaMadre']) && !empty($_GET['CedulaMadre'])){
		echo "si existe la madre";
		mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) 
		VALUES (NULL, '$_GET[cedEsc]', '$_GET[CedulaMadre]', '2', '0');") or die(mysqli_error());
		if ($existeMad == 0){
		mysqli_query($con, "INSERT INTO representante (CedulaRepresentante,NombreRepresentante,ApellidoRepresentante)
		VALUES ('$_GET[CedulaMadre]', '$_GET[nombreMadre]', '$_GET[apellidoMadre]');") or die (mysqli_error());
		}

	}
} else {
	mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) 
	VALUES (NULL, '$_GET[cedEsc]', '$_GET[CedulaRep]', '".$idParentesco."', '1');") or die(mysqli_error());
	
	echo "existe rep es = ".$existeRep;
	if ($existeRep == 0) {
		
		mysqli_query($con, "INSERT INTO representante (CedulaRepresentante,NombreRepresentante,ApellidoRepresentante)
		VALUES ('$_GET[CedulaRep]', '$_GET[nombreRep]', '$_GET[apellidoRep]');") or die (mysqli_error());
	}
	
	if (isset($_GET['CedulaMadre']) && !empty($_GET['CedulaMadre'])){
		mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) 
		VALUES (NULL, '$_GET[cedEsc]', '$_GET[CedulaMadre]', '2', '0');") or die(mysqli_error());
		if ($existeMad == 0){
		mysqli_query($con, "INSERT INTO representante (CedulaRepresentante,NombreRepresentante,ApellidoRepresentante)
		VALUES ('$_GET[CedulaMadre]', '$_GET[nombreMadre]', '$_GET[apellidoMadre]');") or die (mysqli_error());
		}

	}
	if (isset($_GET['CedulaPadre']) && !empty($_GET['CedulaPadre'])){
		mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) 
		VALUES (NULL, '$_GET[cedEsc]', '$_GET[CedulaPadre]', '1', '0');") or die(mysqli_error());
		if ($existePad == 0) {
		mysqli_query($con, "INSERT INTO representante (CedulaRepresentante,NombreRepresentante,ApellidoRepresentante)
		VALUES ('$_GET[CedulaPadre]', '$_GET[nombrePadre]', '$_GET[apellidoPadre]');") or die (mysqli_error());
		} 
	}

}

?>