<?php 

header("Content-Type: text/html;charset=utf-8");
//La generacion de PDF's requiere un minimo de memoria
 ini_set('memory_limit', '128M');
 ini_set('max_execution_time', '300');

// Inclusion de la libreria DomPDF
require_once 'dompdf/dompdf_config.inc.php';

include "conexion.php";
include "lib_fecha_letras.php";

$fecha = date("d/m/Y");
$fecha_letras= fechaALetras($fecha);
	
$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");



mysqli_query($con, "SET NAMES 'utf8'");

$consulta = mysqli_query($con, "select * from institucion");
$row = mysqli_fetch_array($consulta);
$nombreInstitucion = $row['NombreInstitucion'];
$direccionInstitucion = $row['DireccionInstitucion'];
$telefonoInstitucion = $row['TelefonoInstitucion'];
$telefonoAlternativo = $row['TelefonoAlternativo'];
$idInstitucion = $row['IDinstitucion'];

$consulta = mysqli_query($con, "select * from ministerio");
$row = mysqli_fetch_array($consulta);
$nombreMinisterio = $row['NombreMinisterio'];

$consulta = mysqli_query($con, "select * from director");
$row = mysqli_fetch_array($consulta);
$nombreDirector = $row['NombresDirector'];
$apellidoDirector = $row['ApellidosDirector'];
$cedulaDirector = $row['CedulaDirector'];

$consulta = mysqli_query($con, "select * from alumno where alumno.CedulaAlumno='$_GET[idRadioButton]'");
$row = mysqli_fetch_array($consulta);
$nombreAlumno = $row['NombresAlumno'];
$apellidoAlumno = $row['ApellidosAlumno'];
$cedulaAlumno = $row['CedulaAlumno'];
$ciudad = $row['Ciudad'];
$estado = $row['Estado'];
$idSexo = $row['ID_Sexo'];
$idComportamiento = $row['ID_Comportamiento'];
$idLiteral = $row['ID_Literal'];
$nacimiento = $row['Nacimiento'];
$serialCanaima = $row['ID_Canaima'];

list($anio,$mes,$dia)= explode('-', $nacimiento);
$fechaInvertida = $dia."/".$mes."/".$anio;

$idGrado = $row['ID_Grado'];
$consulta = mysqli_query($con, "select * from grado where IDGrado='".$idGrado."'");
$row = mysqli_fetch_array($consulta);
$descripcionGrado = $row['DescripcionGrado'];


$idGradoAnterior = $idGrado-1;
$consulta = mysqli_query($con, "select * from grado where IDGrado='".$idGradoAnterior."'");
$row = mysqli_fetch_array($consulta);
$descripcionGradoAnterior = $row['DescripcionGrado'];


$consulta = mysqli_query($con, "select * from literal where IDLiteral='".$idLiteral."'");
$row = mysqli_fetch_array($consulta);
$descripcionLiteral = $row['DescripcionLiteral'];

$consulta = mysqli_query($con, "SELECT * FROM periodoescolar where Actual='1';");
$row = mysqli_fetch_array($consulta);
$periodo = $row['DescripcionPeriodo'];

$consulta = mysqli_query($con, "select * from comportamiento where IDComportamiento='".$idComportamiento."'");
$row = mysqli_fetch_array($consulta);
$descripcionComportamiento = $row['DescripcionComportamiento'];

if ($idGrado >= 2) {
	
	$html = '
	<html>
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<style type="text/css">
				body{
					width: 600px;
					height: auto;
					margin: 0 auto;
					text-align: center;
				}
				body .principal{
					text-align: justify;
					line-height: 22pt;
					text-indent: 1.25cm;  
				}
				.foot{
					color: #BDBDBD;
				}
				.firmaIzquierda{
					border-top: solid 1px black;
					width: 180px;
					margin-left: 5%;
					margin-bottom: 5%;
					position: absolute;
				}
				.firmaDerecha{
					border-top: solid 1px black;
					width: 180px;
					margin-left: 65%;
					position: absolute;
					margin-bottom: 5%;
				}
				img.alineadoTextoImagenArriba{
	 				width: 115px;
	 				height: 150px;
	 				float: left;  
	 				position: absolute;
	 				margin-top: 3%;
				}
			</style>
		</head>
		<body>
			<header>
				<img class="alineadoTextoImagenArriba" src="img/logo.jpg"/>
				<h2>'.$nombreInstitucion.'</h2>
				Inscrita en el<br>'.$nombreMinisterio.'<br>Preescolar y Básica<br>
				<strong>Código DEA Nº '.$idInstitucion.'</strong>
				<br>Anaco - Estado Anzoátegui<br><br><br><br><br>
			</header>
			<div ><h2><strong> CONSTANCIA DE PROMOCIÓN EN EL NIVEL DE EDUCACION PRIMARIA </strong></h2></div></br>
			<p class="principal">
			Quien suscribe, <strong>'.$nombreDirector.' '.$apellidoDirector.'</strong>, titular de la cédula de identidad <strong>Nº '.$cedulaDirector.'</strong>, en su condición de Director(a) de la <strong>'.$nombreInstitucion.'</strong>, certifica por medio de la presente que ';
		if ($idSexo == 1) {
		 	$html .= 'el ';
		 } else{
		 	$html .= 'la ';
		 }

		$html .= 'estudiante: <strong>'.$nombreAlumno.' '.$apellidoAlumno.'</strong>, portador de la Cédula ';

		$caracteresCed = strlen($cedulaAlumno);
		if ($caracteresCed == 8) {
			$html .= 'de identidad';
		}else {
			$html .= 'escolar';
		}

		$html .=' <strong>N°: '.$cedulaAlumno.'</strong>, nacido en <strong>'.$ciudad.'</strong>, fecha <strong>'.$fechaInvertida.'</strong>, cursó y aprobó el <strong>'.$descripcionGradoAnterior.'</strong> del Nivel de  Educación ';

		if ($descripcionGrado == "3er Nivel") {
			$html .= 'Preescolar';
		} else {
			$html .= 'Primaria';
		}

		$html .= ', donde  alcanzó las competencias  previstas para  el grado, correspondiéndole la escala alfabética <strong>("'.$descripcionLiteral.'")</strong> durante el Año Escolar <strong>'.$periodo.'</strong> y fue promovido al <strong>'.$descripcionGrado.'</strong>, previo cumplimiento de los requisitos exigidos en la normativa legal vigente.<br></p>
			<p class="principal">
			Certificado que se expide en Anaco, '.$fecha_letras.'.
			</p><br><br><br><br><br>
			<div class="firmaIzquierda">
				<strong>'.$nombreDirector.' '.$apellidoDirector.'</strong><br>
				Director(a) del Plantel
			</div>
			<div class="firmaDerecha">
				Firma del(la)<br>
				Director(a)
			</div><br><br><br><br>
			<p class="foot">Sello del Plantel</p>
			
		</body>
	</html>';
	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
	$dompdf->render();

	$dompdf->stream("Constancia Promoción -".$nombreAlumno." ".$apellidoAlumno.".pdf", array("Attachment" => 0));
} else {
	echo "ERROR, no posee Grado Anterior!";
}
?> 