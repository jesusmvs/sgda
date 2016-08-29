<?php 

include "conexion.php";

$con = mysqli_connect($host,$user,$pw,$db)
or die ("Problemas al conectar server");
			

			
mysqli_query($con, "SET NAMES 'utf8'");

$consulta = mysqli_query($con, "SELECT * FROM alumno WHERE ID_Status = '2' order by ID_Grado DESC");

if (mysqli_num_rows($consulta) > 0){
					
	echo"<table class='table table-striped table-bordered'>			  		
    		<thead>
    			
    			<tr>
    				
    				<td><strong>Cédula</strong></td>
    				<td><strong>Nombres</strong></td>
    				<td><strong>Apellidos</strong></td>
    				<td><strong>Grado</strong></td>
    				<td><strong>Literal Obtenido</strong></td>
    				<td class='hide'> <input type='text' id='numAlumnos' value='".mysqli_num_rows($consulta)."'></td>			    						    				
    			</tr>
    			
    		</thead>
    		
    		<tbody >";
    	$aux = 1;
		while($row = mysqli_fetch_array($consulta))
		{
			echo "<tr>";
			echo "<td>".$row['CedulaAlumno']."</td>";
			echo "<td>".$row['NombresAlumno']."</td>";
			echo "<td>".$row['ApellidosAlumno']."</td>";
			$idGrado = $row['ID_Grado'];
			$consulta2 = mysqli_query($con, "select * from grado where IDGrado='".$idGrado."'") or die (mysqli_error());
			$row2 = mysqli_fetch_array($consulta2);
			echo "<td>".$row2['DescripcionGrado']."</td>";
			//echo "<td><input class='chbx' type='checkbox' id='".$row['CedulaAlumno']."'></td>";
			echo "<td><select class='form-control chbx' id='".$aux."' name=".$row['CedulaAlumno'].">
                   <option value='Literal'>- Seleccione Literal -</option>
                   <option value='1'>A</option>
                   <option value='2'>B</option>
                   <option value='3'>C</option>
                   <option value='4'>D</option>
                   <option value='5'>E</option>
            	</select></td>";
			echo "</tr>";
			$aux += 1;
		}
		echo"</tbody>
		</table>";
			
} else {
	echo "¡No Existen Registros en la Base de Datos!";
}

?>