<?php
include "conexion.php";
//VALIDO QUE EXISTA UN VALOR EN LA VARIABLE QUE CONTIENE EL ID (TE RECOMIENDO USES POST Y NO GET PARA ESTO)
if( isset($_GET['idRadioButton']) && !empty($_GET['idRadioButton'])){
		$busqueda=$_GET['idRadioButton'];
    	$con = mysqli_connect($host,$user,$pw,$db)
		or die ("Problemas al conectar server");
		
		mysqli_query($con, "SET NAMES 'utf8'");
		//HAGO LA CONSULTA PARA ENCONTRAR EL alumno
		$consulta = mysqli_query($con, "SELECT * FROM alumno where alumno.CedulaAlumno='".$busqueda."'");
		$obj = array();
		if (mysqli_num_rows($consulta) > 0){
			while ($row=mysqli_fetch_array($consulta)) {			
				$obj['cedula']=$row['CedulaAlumno'];
				$obj['nombre']=$row['NombresAlumno'];
				$obj['apellido']= $row['ApellidosAlumno'];
				$obj['ciudad']= $row['Ciudad'];
				$obj['estado']= $row['Estado'];
				$obj['idGrado']= $row['ID_Grado'];
				$obj['idComportamiento']= $row['ID_Comportamiento'];
				$obj['idLiteral']= $row['ID_Literal'];
				$obj['municipio']= $row['Municipio'];
				$obj['direccion']= $row['Direccion'];
				$obj['enfermedad']= $row['Alergias'];
			}
			$consulta = mysqli_query($con, "SELECT * FROM grado where grado.IDGrado='".$obj['idGrado']."'");
			$row=mysqli_fetch_array($consulta);
			$obj['grado']= $row['DescripcionGrado'];
			$consulta = mysqli_query($con, "SELECT * FROM comportamiento where comportamiento.IDComportamiento='".$obj['idComportamiento']."'");
			$row=mysqli_fetch_array($consulta);
			$obj['comportamiento']= $row['DescripcionComportamiento'];
			$consulta = mysqli_query($con, "SELECT * FROM literal where literal.IDLiteral='".$obj['idLiteral']."'");
			$row=mysqli_fetch_array($consulta);
			$obj['literal']= $row['DescripcionLiteral'];
			/*ACA LO QUE HAGO ES PASAR TODOS LOS VALORES POR JSON DE REGRESO A JS PARA QUE ME CREE EL NUEVO FORM
			 * SI NO TRABAJAS CON AJAX POSIBLEMENTE ESTO NO TE INTERESE MUCHO, BASICAMENTE LA VARIABLE $OBJ
			 *ES UNA VARIABLE QUE ES COMO UN ARREGLO CON TODOS LOS DATOS QUE VOY A NECESITAR
			 */
            echo json_encode($obj);
		}
    } else {
    	echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
    };
?>