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
$nacimiento = $row['Nacimiento'];
$serialCanaima = $row['ID_Canaima'];

$fecha = time() - strtotime($nacimiento);
$edad = floor($fecha/31556926);

$idGrado = $row['ID_Grado'];
$consulta = mysqli_query($con, "select * from grado where IDGrado='".$idGrado."'");
$row = mysqli_fetch_array($consulta);
$descripcionGrado = $row['DescripcionGrado'];

$consulta = mysqli_query($con, "SELECT * FROM periodoescolar where Actual='1';");
$row = mysqli_fetch_array($consulta);
$periodo = $row['DescripcionPeriodo'];

$consulta = mysqli_query($con, "select * from comportamiento where IDComportamiento='".$idComportamiento."'");
$row = mysqli_fetch_array($consulta);
$descripcionComportamiento = $row['DescripcionComportamiento'];

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
			body footer{
				color: #BDBDBD;
				border-top: solid 1px #BDBDBD;
			}
			.firma{
				border-bottom: solid 1px black;
				width: 180px;
				margin: 0 auto;
			}
			.documento h2 strong{
				
				border-bottom: 2px solid black;
				pading-bottom: 0px;
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
		<div class="documento"><h2><strong>NOTIFICACIÓN DE ROBO DE CANAIMA</strong></h2></div></br>
		<p class="principal">
		Quien suscribe, <strong>'.$nombreDirector.' '.$apellidoDirector.'</strong>, titular de la cédula de identidad <strong>Nº '.$cedulaDirector.'</strong>, Director(a) de la '.$nombreInstitucion.', resolución de funcionamiento  código <strong>Nº '.$idInstitucion.'</strong>, por medio de la presente hace constar que al estudiante: <strong>'.$nombreAlumno.' '.$apellidoAlumno.'</strong>, cédula ';

	$caracteresCed = strlen($cedulaAlumno);
	if ($caracteresCed == 8) {
		$html .= 'de identidad';
	}else {
		$html .= 'escolar';
	}

	$html .=' <strong>N°: '.$cedulaAlumno.'</strong>, de <strong>'.$edad.'</strong> años de edad, natural  de  la  ciudad  de: <strong>'.$ciudad.'</strong>, estado: <strong>'.$estado.'</strong>; cursante del <strong>'.$descripcionGrado.'</strong> de  Educación ';

	if ($descripcionGrado == "3er Nivel") {
		$html .= 'Preescolar';
	} else {
		$html .= 'Básica';
	}

	$html .= ' en el periodo escolar <strong>'.$periodo.'</strong>, le fue robado su equipo Canaima, tal como consta en denuncia realizada por el representante legal ante las autoridades policiales.<br></p>
		<p class="principal">
		Constancia que se expide de parte interesada en ANACO, <strong>'.$fecha_letras.'</strong>.
		</p><br><br><br><br><br>
		<p>
			<div class="firma"></div>
			<strong>'.$nombreDirector.' '.$apellidoDirector.'</strong><br>
			Director(a)
		</p> <br><br><br><br><br><br><br>
		<footer>
		Dirección: '.$direccionInstitucion.'<br>
		Teléfonos: '.$telefonoInstitucion.' / '.$telefonoAlternativo.'
		</footer>
	</body>
</html>';
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();

$dompdf->stream("Constancia Robo Canaima -".$nombreAlumno." ".$apellidoAlumno.".pdf", array("Attachment" => 0));

?> 