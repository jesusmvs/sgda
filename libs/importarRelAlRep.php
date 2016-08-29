<?php
	
	//header("Content-Type: text/html;charset=utf-8");
	
	include "conexion.php";
	
	$con = mysqli_connect($host,$user,$pw,$db)
	or die ("Problemas al conectar server");
	
	
	
	mysqli_query($con, "SET NAMES 'utf8'");
	
	/*$fname = $_FILES['sel_file']['name'];
    echo 'Cargando nombre del archivo: '.$fname.' ';
    $chk_ext = explode(".",$fname);
    
    if(strtolower(end($chk_ext)) == "csv")
    {*/
        //si es correcto, entonces damos permisos de lectura para subir
        
        $handle = fopen("import.csv", "r");
            while (($data = fgetcsv($handle, 3000, ";")) !== FALSE)
        {
       		if ($data[4] == "PADRE") {
       			if ($data[1] != "") {
       				mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,
					ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) VALUES 
					(NULL , '$data[0]', '$data[1]', '1', '1');") or die(mysqli_error());
       			}
       			if ($data[2] != "") {
       				mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,
					ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) VALUES 
					(NULL , '$data[0]', '$data[2]', '2', '0');") or die(mysqli_error());
       			}			
       		} else if ($data[4] == "MADRE") {
       			if ($data[2] != "") {
       				mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,
					ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) VALUES 
					(NULL , '$data[0]', '$data[2]', '2', '1');") or die(mysqli_error());
       			}
       			if ($data[1] != "") {
       				mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,
					ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) VALUES 
					(NULL , '$data[0]', '$data[1]', '1', '0');") or die(mysqli_error());
       			}
       		} else{
	         	if ($data[1] != "") {
       				mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,
					ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) VALUES 
					(NULL , '$data[0]', '$data[1]', '1', '0');") or die(mysqli_error());
       			}
       			if ($data[2] != "") {
       				mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,
					ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) VALUES 
					(NULL , '$data[0]', '$data[2]', '2', '0');") or die(mysqli_error());
       			}
       			if ($data[3] != "") {
       				if ($data[4] == "TIO") {
       					$data[4] = "Tio";
       				}elseif ($data[4] == "TIA") {
       					$data[4] = "Tia";
       				} elseif ($data[4] == "ABUELA") {
       					$data[4] = "Abuela";
       				}elseif ($data[4] == "ABUELO") {
       					$data[4] = "Abuelo";
       				}elseif ($data[4] == "HERMANA") {
       					$data[4] = "Hermana";
       				}elseif ($data[4] == "HERMANO") {
       					$data[4] = "Hermano";
       				}elseif ($data[4] == "PADRASTRO") {
       					$data[4] = "Padrastro";
       				}elseif ($data[4] == "MADRASTRA") {
       					$data[4] = "Madrastra";
       				}
       				$sql = mysqli_query($con, "select * from parentesco where DescripcionParentesco='".$data[4]."'") or die(mysqli_error());
       				$row = mysqli_fetch_array($sql);

       				mysqli_query($con, "INSERT INTO relalumnorepresentanteparentesco (ID_relAlumnoRepresentanteParentesco,
					ID_alumno,ID_representante,ID_parentesco,RepresentanteEmpresa) VALUES 
					(NULL , '$data[0]', '$data[3]', '".$row['IDParentesco']."', '1');") or die(mysqli_error());
       			}		
       		}
       		

        }
        //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
        fclose($handle);
        echo "Importación exitosa!";
        
    /*}
    else
    {
       //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             //ver si esta separado por " , "
        echo "Archivo invalido!";
    }   */

?>