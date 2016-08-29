<?php
include "conexion.php";
	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	mysqli_query($con, "SET NAMES 'utf8'");
	$datos="";
	$cabecera='';
	$madre="\t\t\t";
	$padre="\t\t\t";
	$otro="\t\t\t\t";
	$registros=mysqli_query($con, "SELECT alumno.CedulaAlumno, alumno.NombresAlumno, alumno.ApellidosAlumno, alumno.Nacimiento, alumno.ID_Sexo,alumno.Ciudad, alumno.Municipio, alumno.Estado, alumno.Direccion, alumno.ID_Literal, alumno.ID_Grado, alumno.ID_Comportamiento, alumno.ID_Canaima, alumno.Alergias, representante.CedulaRepresentante, representante.NombreRepresentante, representante.ApellidoRepresentante, parentesco.DescripcionParentesco, relalumnorepresentanteparentesco.RepresentanteEmpresa
		FROM relalumnorepresentanteparentesco
		INNER JOIN alumno ON alumno.CedulaAlumno = relalumnorepresentanteparentesco.ID_alumno AND alumno.ID_Status = '2'
		INNER JOIN representante ON representante.CedulaRepresentante = relalumnorepresentanteparentesco.ID_Representante
		INNER JOIN parentesco ON parentesco.IDParentesco = relalumnorepresentanteparentesco.ID_parentesco order by alumno.ID_Grado DESC") or
	  die(mysqli_error());
	$cant=mysqli_num_fields($registros) or
	  die(mysqli_error());
	$cabecera.= "Cedula de Alumno\t Nombres de Alumno\t Apellidos de alumno\tDia\tMes\tAño\tEdad\tGenero\tCiudad de nacimiento\tMunicipio\tEstado\tDireccion\tLiteral\tGrado\tComportamiento\tCanaima\tAlergias\tCedula de Madre\tNombre de Madre\tApellido de Madre\tCedula de Padre\tNombre de Padre\tApellido de Padre\tCedula de Representante\tNombre de Representante\tApellido de Representante\tParentesco de Representante";
	$otroAlum =0;
	$aux =0;
	$auxCed = '';
	$linea='';
	$fechaN="\t\t\t";
	$edad="\t";
	//$numFila = mysqli_num_rows($registros);
	while($fila = mysqli_fetch_row($registros)) 
	{ 
		if ($aux==0) {
			$auxCed = $fila[0];
		} else if ($auxCed != $fila[0]){
			$auxCed = $fila[0];
			//variable que me indicara si es otro alumno el que se esta guardando
			$otroAlum = 1;
		}
	  
	    for($i=0; $i<14; $i++ ){           
		    if ($fila[$i] == ""||$fila[$i] == "0")
		    { 
			    $fila[$i] = "\t";
			    if ($i==13) {
			    	$otroAlum=0;
			    	if ($fila[17] == "Madre") {
	    			$madre = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
			    	//$madre = "\t\t\t";
			    	
		    		} elseif ($fila[17] == "Padre") {
		    			$padre = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
		    		} else {
		    			$otro = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
		    		}

		    		if ($fila[18] == 1) {
		    			$otro = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t".$fila[17]."\t";
		    		}
		    		$linea .= $fila[$i];
		    		break;
			    }
		    }
		    else 
		    { 
		    	if ($aux == 0) {
		    		if ($i == 3) {
                        $nacimiento = $fila[$i];
                        $separar= explode("-",$fila[$i]);
                        $fila[$i] = $separar[2]."\t".$separar[1]."\t".$separar[0]."\t"; 
		    			//$fila[$i] = "\t\t\t";
		    			//Calcular edad
		    			$fecha = time() - strtotime($nacimiento);
		    			$edad = floor($fecha/31556926);
		    			$fila[$i] .= $edad."\t";
		    						
		    		}elseif ($i == 9) {
			    		if ($fila[$i] == '1') {
			    			$fila[$i] = 'A'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '2') {
			    			$fila[$i] = 'B'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '3') {
			    			$fila[$i] = 'C'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '4') {
			    			$fila[$i] = 'D'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '5') {
			    			$fila[$i] = 'E'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} 
			    	}elseif ($i == 10) {
			    		if ($fila[$i] == '1') {
			    			$fila[$i] = 'III Nivel'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '2') {
			    			$fila[$i] = '1º Grado'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '3') {
			    			$fila[$i] = '2º Grado'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '4') {
			    			$fila[$i] = '3º Grado'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '5') {
			    			$fila[$i] = '4º Grado'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '6') {
			    			$fila[$i] = '5º Grado'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '7') {
			    			$fila[$i] = '6º Grado'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		}
			    	}elseif ($i == 4) {
			    		if ($fila[$i] == '1') {
			    			$fila[$i] = 'Masculino'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '2') {
			    			$fila[$i] = 'Femenino'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} 
			    	}elseif ($i == 11) {
			    		if ($fila[$i] == '1') {
			    			$fila[$i] = 'Excelente'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		} elseif ($fila[$i] == '2') {
			    			$fila[$i] = 'Bueno'; 
				    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
			    		}  
			    	}else{
					    $fila[$i] = str_replace('"', '""', $fila[$i]); 
					    $fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
					    if ($i == 13) {
					    	$otroAlum=0;
					    	if ($fila[17] == "Madre") {
				    			$madre = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
				    		} elseif ($fila[17] == "Padre") {
				    			$padre = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
				    		} else {
				    			$otro = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
				    		}

				    		if ($fila[18] == 1) {
				    			$otro = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t".$fila[17]."\t";
				    		}
					    }
					}
		    	}else{
		    		//$padre = "otroAlum vale=".$otroAlum;
			    	if ($otroAlum == 0) {
				    		/*aqui hago otro if para saber el parentesco que tiene con dicho representante y se coloca en 
				    		 *su respectiva columna
				    		 */
				    		if ($fila[17] == "Madre") {
				    			$madre = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
				    		} elseif ($fila[17] == "Padre") {
				    			$padre = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
				    			
				    		} else {
				    			$otro = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t".$fila[17];
				    		}

				    		if ($fila[18] == '1') {
				    			$otro = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t".$fila[17];
				    		}
				    		break;
				    		
				    		
			    		//pregunto en el if si el alumno es uno nuevo xD
			    	} else {
			    		if ($i == 0) {
			    			$datos .= $linea.$madre.$padre.$otro."\n";
			   		 		$linea ="";
			   		 		$madre="\t\t\t";
							$padre="\t\t\t";
							$otro="\t\t\t\t";


			    		}			    		
			    		//Aca iran el poco de if para saber grado literal sexo y no se si comportamiento
				    	if ($i == 3) {
                        $nacimiento = $fila[$i];
                        $separar= explode("-",$fila[$i]);
                        $fila[$i] = $separar[2]."\t".$separar[1]."\t".$separar[0]."\t"; 
		    			
		    			//Calcular edad
		    			$fecha = time() - strtotime($nacimiento);
		    			$edad = floor($fecha/31556926);
		    			$fila[$i] .= $edad."\t";
		    						
			    		}elseif ($i == 9) {
				    		if ($fila[$i] == '1') {
				    			$fila[$i] = 'A'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '2') {
				    			$fila[$i] = 'B'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '3') {
				    			$fila[$i] = 'C'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '4') {
				    			$fila[$i] = 'D'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '5') {
				    			$fila[$i] = 'E'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} 
				    	}elseif ($i == 10) {
				    		if ($fila[$i] == '1') {
				    			$fila[$i] = 'III Nivel'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '2') {
				    			$fila[$i] = '1º Grado'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '3') {
				    			$fila[$i] = '2º Grado'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '4') {
				    			$fila[$i] = '3º Grado'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '5') {
				    			$fila[$i] = '4º Grado'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '6') {
				    			$fila[$i] = '5º Grado'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '7') {
				    			$fila[$i] = '6º Grado'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		}
				    	}elseif ($i == 4) {
				    		if ($fila[$i] == '1') {
				    			$fila[$i] = 'Masculino'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '2') {
				    			$fila[$i] = 'Femenino'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} 
				    	}elseif ($i == 11) {
				    		if ($fila[$i] == '1') {
				    			$fila[$i] = 'Excelente'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		} elseif ($fila[$i] == '2') {
				    			$fila[$i] = 'Bueno'; 
					    		$fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
				    		}  
				    	}else{
						    $fila[$i] = str_replace('"', '""', $fila[$i]); 
						    $fila[$i] = '"' . $fila[$i] . '"' . "\t"; 
						    if ($i == 13) {
						    	$otroAlum=0;
						    	if ($fila[17] == "Madre") {
					    			$madre = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
					    		} elseif ($fila[17] == "Padre") {
					    			$padre = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
					    		} else {
					    			$otro = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t";
					    		}

					    		if ($fila[18] == 1) {
					    			$otro = $fila[14]."\t".$fila[15]."\t".$fila[16]."\t".$fila[17]."\t";
					    		}
						    }
						}
					}
				}
	    	} 
	        $linea .= $fila[$i];
	    } 
	    $aux ++;
	}

	$datos .= $linea.$madre.$padre.$otro."\n"; 

	//$datos = str_replace("\r","",$datos);
	        
	if ($datos == "") 
	{ 
	  $datos = "\n (0) registros encontrados!\n";                         
	}

	$nomarchivo='Regulares.xls';
	header('Content-Encoding: UTF-8');        
	header('Content-type: text/xls; charset=UTF-8');
	//header("Content-type: application/x-msdownload"); 
	header("Content-Disposition: attachment; filename=".$nomarchivo);
	header("Pragma: no-cache"); 
	header("Expires: 0"); 
	print mb_convert_encoding("$cabecera\n$datos", 'UTF-16LE', 'UTF-8');

?>
