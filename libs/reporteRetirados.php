<?php 

/*header("Content-Type: text/html;charset=utf-8");
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
		<div class="documento"><h2><strong>REPORTE DE RETIRADOS</strong></h2></div></br>';

$consulta = mysqli_query($con, "SELECT retiro.FechaRetiro, motivoret.DescripcionMotivo, alumno.CedulaAlumno, 
	alumno.NombresAlumno, alumno.ApellidosAlumno, alumno.Nacimiento, sexo.DescripcionSexo, literal.DescripcionLiteral, 
	grado.DescripcionGrado, alumno.Ciudad, alumno.Municipio, alumno.Estado, alumno.Direccion, 
	periodoescolar.DescripcionPeriodo
FROM retiro
INNER JOIN alumno ON alumno.CedulaAlumno = retiro.IDAlumno
INNER JOIN motivoret ON motivoret.IDMotivo = retiro.IDMotivo
INNER JOIN periodoescolar ON periodoescolar.IDPeriodo = retiro.IDPeriodo
INNER JOIN grado ON grado.IDGrado = alumno.ID_Grado
INNER JOIN sexo ON sexo.IDSexo = alumno.ID_Sexo
INNER JOIN literal ON literal.IDLiteral = alumno.ID_Literal
AND alumno.ID_Status = '4'") or die(mysqli_error());
$total = 0;
if (mysqli_num_rows($consulta)) {
	$html .= '<table class="table table-striped table-bordered">
			<thead>
			    <tr>
    				<td><strong>Fecha de Retiro</strong></td>
    				<td><strong>Motivo de Retiro</strong></td>
    				<td><strong>Cedula de Alumno</strong></td>
    				<td><strong>Nombre de Alumno</strong></td>
    				<td><strong>apellido de Alumno</strong></td>
    				<td><strong>Fecha de Nacimiento</strong></td>
    				<td><strong>Género</strong></td>
    				<td><strong>Literal</strong></td>
    				<td><strong>Grado</strong></td>
    				<td><strong>Ciudad</strong></td>
    				<td><strong>Municipio</strong></td>
    				<td><strong>Estado</strong></td>
    				<td><strong>Direccion</strong></td>
    				<td><strong>Periodo</strong></td>
	    		</tr>
			</thead>
		<tbody >';
	while($row=mysqli_fetch_array($consulta)){
		$html .= '<tr>
		            <td>'.$row['FechaRetiro'].'</td>
		            <td>'.$row['DescripcionMotivo'].'</td>
		            <td>'.$row['CedulaAlumno'].'</td>
		            <td>'.$row['NombresAlumno'].'</td>
		            <td>'.$row['ApellidosAlumno'].'</td>
		            <td>'.$row['Nacimiento'].'</td>
		            <td>'.$row['DescripcionSexo'].'</td>
		            <td>'.$row['DescripcionLiteral'].'</td>
		            <td>'.$row['DescripcionGrado'].'</td>
		            <td>'.$row['Ciudad'].'</td>
		            <td>'.$row['Municipio'].'</td>
		            <td>'.$row['Direccion'].'</td>
		            <td>'.$row['DescripcionPeriodo'].'</td>
		          </tr>';
	}
	$html .= '</tbody>
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
*/

include "conexion.php";
	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	
	
	mysqli_query($con, "SET NAMES 'utf8'");
	$datos="";
	$cabecera='';
	$registros=mysqli_query($con, "SELECT retiro.FechaRetiro, motivoret.DescripcionMotivo, alumno.CedulaAlumno, 
	alumno.NombresAlumno, alumno.ApellidosAlumno, alumno.Nacimiento, sexo.DescripcionSexo, literal.DescripcionLiteral, 
	grado.DescripcionGrado, alumno.Ciudad, alumno.Municipio, alumno.Estado, alumno.Direccion, 
		periodoescolar.DescripcionPeriodo
	FROM retiro
	INNER JOIN alumno ON alumno.CedulaAlumno = retiro.IDAlumno
	INNER JOIN motivoret ON motivoret.IDMotivo = retiro.IDMotivo
	INNER JOIN periodoescolar ON periodoescolar.IDPeriodo = retiro.IDPeriodo
	INNER JOIN grado ON grado.IDGrado = alumno.ID_Grado
	INNER JOIN sexo ON sexo.IDSexo = alumno.ID_Sexo
	INNER JOIN literal ON literal.IDLiteral = alumno.ID_Literal
	AND alumno.ID_Status = '4' order by alumno.ID_Grado DESC") or die(mysqli_error());
	$cant=mysqli_num_fields($registros) or die(mysqli_error());
	$cabecera.= "Fecha de Retiro\tMotivo de Retiro\tCedula de Alumno\tNombre de Alumno\tApellido de Alumno\tFecha de Nacimiento\tGénero\tLiteral\tGrado\tCiudad\tMunicipio\tEstado\tDireccion\tPeriodo";
	$linea='';
	//$numFila = mysqli_num_rows($registros);
	while($row = mysqli_fetch_row($registros)) 
	{ 
		$linea = "";
		for ($i=0; $i < 14 ; $i++) { 
			$linea .=  $row[$i]."\t";
		}
		$datos .= $linea."\n"; 
	}

	//$datos = str_replace("\r","",$datos);
	        
	if ($datos == "") 
	{ 
	  $datos = "\n (0) registros encontrados!\n";                         
	}

	$nomarchivo='RETIRADOS.xls';
	header('Content-Encoding: UTF-8');        
	header('Content-type: text/xls; charset=UTF-8');
	//header("Content-type: application/x-msdownload"); 
	header("Content-Disposition: attachment; filename=".$nomarchivo);
	header("Pragma: no-cache"); 
	header("Expires: 0"); 
	print mb_convert_encoding("$cabecera\n$datos", 'UTF-16LE', 'UTF-8');

?> 