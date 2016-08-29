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
			table{
				 width: 100%;
			}
			td{

				text-align: center;
				border: 1px solid #000;
   				border-collapse: collapse;
			}
			.tabla{
				text-align: center;
				border: 1px solid #000;
   				border-collapse: collapse;
   				  background: #eee;
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
		<div class="documento"><h2><strong>REPORTE DE ESTADÍSTICAS DE documentoS GENERADOS</strong></h2></div></br>';

$consulta = mysqli_query($con, "SELECT documento.DescripcionDocumento, reldocper.Cantidad, periodoescolar.DescripcionPeriodo FROM reldocper INNER JOIN documento ON documento.IDDocumento=reldocper.IDDoc INNER JOIN periodoescolar ON periodoescolar.IDPeriodo=reldocper.IDPer and periodoescolar.IDPeriodo='$_GET[periodo]'") or die(mysqli_error());
$total = 0;
if (mysqli_num_rows($consulta)) {
	$html .= '<table class="table table-striped table-bordered">
			<thead>
			    <tr>
    				<td><strong>Documento Generado</strong></td>
    				<td><strong>Cantidad</strong></td>
    				<td><strong>Periodo</strong></td>
	    		</tr>
			</thead>
		<tbody >';
	while($row=mysqli_fetch_array($consulta)){
		$html .= '<tr>
		            <td>'.$row['DescripcionDocumento'].'</td>
		            <td>'.$row['Cantidad'].'</td>
		            <td>'.$row['DescripcionPeriodo'].'</td>
		            </tr>';
		$total += $row['Cantidad'];
	}
	$html .= '<tr class="tabla"><strong>Total de Documentos Generados: '.$total.' Documentos</strong></tr>
	    </tbody>
	</table>';
} else {
	$htm .= 'No se encontro Ningun Registro';
}

	//$html .='<p class="principal"></p>';

	$html .= '</body></html>';
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();

$dompdf->stream("REPORTE DE ESTADISTICAS.pdf", array("Attachment" => 0));

?> 