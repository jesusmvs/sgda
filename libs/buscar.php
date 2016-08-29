<?php
	session_start();

	//header("Content-Type: text/html;charset=utf-8");
	include "conexion.php";


    if( isset($_POST['busqueda']) && !empty($_POST['busqueda'])){
    	
		$busqueda=$_POST['busqueda'];
    	
    	$con = mysqli_connect($host,$user,$pw,$db)
		or die ("Problemas al conectar server");
		
		
		mysqli_query($con, "SET NAMES 'utf8'");

		if ($_POST['status'] == "2") {
			
			$consulta = mysqli_query($con, "SELECT * FROM alumno join relalumnorepresentanteparentesco on relalumnorepresentanteparentesco.ID_representante='".$busqueda."' && alumno.CedulaAlumno=relalumnorepresentanteparentesco.ID_alumno  && alumno.ID_Status = '2'");
			
			if (mysqli_num_rows($consulta) > 0){
				
				echo"<h4 class='text-center'>Resultado de la Busqueda:</h4>
				<table class='table table-striped table-bordered'>
			    		
			    		<thead>
			    			
			    			<tr>
			    				
			    				<td></td>
			    				<td><strong>Cédula</strong></td>
			    				<td><strong>Nombres</strong></td>
			    				<td><strong>Apellidos</strong></td>
			    							    						    				
			    			</tr>
			    			
			    		</thead>
			    		
			    		<tbody >";
				while($row = mysqli_fetch_array($consulta))
				{
					echo "<tr>";
					echo "<td><input type='radio' name='selec' class='seleccion pull-right' id='".$row['CedulaAlumno']."'></td>";
					echo "<td>".$row['CedulaAlumno']."</td>";
					echo "<td>".$row['NombresAlumno']."</td>";
					echo "<td>".$row['ApellidosAlumno']."</td>";
					echo "</tr>";
				}
				echo"</tbody>
					</table>
					<div class='pull-right'> ";
				if(($_SESSION['rol']=='Administrador')||($_SESSION['rol']=='Coordinador')){
				echo   "<button type='button' id='btnEditarAl' class='btn btn-warning btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Editar Datos</button> 
						<button type='button' id='btnCanaima' class='btn btn-warning btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Asignar Canaima</button>"; 
				}
				echo   "<button type='button' id='btnGenerarDoc' class='btn btn-primary btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Generar Documento</button>"; 
				if(($_SESSION['rol']=='Administrador')||($_SESSION['rol']=='Coordinador')){
				echo   "<button type='button' id='btnRetirar' class='btn btn-danger btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Retirar</button>";
				}
				echo   "</div>";
			    	
			} else {
				$consulta = mysqli_query($con, "SELECT * FROM alumno where CedulaAlumno='".$busqueda."'  && ID_Status = '2'");
			
				if (mysqli_num_rows($consulta) > 0){
					
					echo"<h4 class='text-center'>Resultado de la Busqueda:</h4>
					<table class='table table-striped table-bordered'>
				    		
				    		<thead>
				    			
				    			<tr>
				    				
				    				<td></td>
				    				<td><strong>Cédula</strong></td>
				    				<td><strong>Nombres</strong></td>
				    				<td><strong>Apellidos</strong></td>
				    				
				    						    				
				    			</tr>
				    			
				    		</thead>
				    		
				    		<tbody >";
					while($row = mysqli_fetch_array($consulta))
					{
						echo "<tr>";
						echo "<td><input type='radio' name='selec' class='seleccion pull-right' id='".$row['CedulaAlumno']."'></td>";
						echo "<td>".$row['CedulaAlumno']."</td>";
						echo "<td>".$row['NombresAlumno']."</td>";
						echo "<td>".$row['ApellidosAlumno']."</td>";
						echo "</tr>";
					}
					echo"</tbody>
					</table>
					<div class='pull-right'> ";
					if(($_SESSION['rol']=='Administrador')||($_SESSION['rol']=='Coordinador')){
					echo   "<button type='button' id='btnEditarAl' class='btn btn-warning btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Editar Datos</button> 
							<button type='button' id='btnCanaima' class='btn btn-warning btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Asignar Canaima</button>"; 
					}
					echo   "<button type='button' id='btnGenerarDoc' class='btn btn-primary btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Generar Documento</button>"; 
					if(($_SESSION['rol']=='Administrador')||($_SESSION['rol']=='Coordinador')){
					echo   "<button type='button' id='btnRetirar' class='btn btn-danger btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Retirar</button>";
					}
					echo   "</div>";
				    	
				} else {
					echo "<script>alert('¡No Existe Cedula Asociada!');</script>";
				}
			} 
		} elseif ($_POST['status'] == "1") {
			$consulta = mysqli_query($con, "SELECT * FROM alumno join relalumnorepresentanteparentesco on relalumnorepresentanteparentesco.ID_representante='".$busqueda."' && alumno.CedulaAlumno=relalumnorepresentanteparentesco.ID_alumno  && alumno.ID_Status = '1'");
			
			if (mysqli_num_rows($consulta) > 0){
				
				echo"<h4 class='text-center'>Resultado de la Busqueda:</h4>
				<table class='table table-striped table-bordered'>
			    		
			    		<thead>
			    			
			    			<tr>
			    				
			    				<td></td>
			    				<td><strong>Cédula</strong></td>
			    				<td><strong>Nombres</strong></td>
			    				<td><strong>Apellidos</strong></td>
			    							    						    				
			    			</tr>
			    			
			    		</thead>
			    		
			    		<tbody >";
				while($row = mysqli_fetch_array($consulta))
				{
					echo "<tr>";
					echo "<td><input type='radio' name='selec' class='seleccion pull-right' id='".$row['CedulaAlumno']."'></td>";
					echo "<td>".$row['CedulaAlumno']."</td>";
					echo "<td>".$row['NombresAlumno']."</td>";
					echo "<td>".$row['ApellidosAlumno']."</td>";
					echo "</tr>";
				}
				echo"</tbody>
					</table>
					<div class='pull-right'>"; 
				if(($_SESSION['rol']=='Administrador')||($_SESSION['rol']=='Coordinador')){
				echo   "<button type='button' id='btnInscribir' class='btn btn-warning btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Agregar a Regulares</button> ";
				}
				echo   "<button type='button' id='btnGenerarAcept' class='btn btn-primary btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Generar Aceptacion</button> ";
				if(($_SESSION['rol']=='Administrador')||($_SESSION['rol']=='Coordinador')){
				echo   "<button type='button' id='btnEliminar' class='btn btn-danger btn-sm' value='show' data-loading-text='Eliminando...' autocomplete='off'>Eliminar</button>";
				}
				echo   "</div>";
			    	
			} else {
				$consulta = mysqli_query($con, "SELECT * FROM alumno where CedulaAlumno='".$busqueda."'  && ID_Status = '1'");
			
				if (mysqli_num_rows($consulta) > 0){
					
					echo"<h4 class='text-center'>Resultado de la Busqueda:</h4>
					<table class='table table-striped table-bordered'>
				    		
				    		<thead>
				    			
				    			<tr>
				    				
				    				<td></td>
				    				<td><strong>Cédula</strong></td>
				    				<td><strong>Nombres</strong></td>
				    				<td><strong>Apellidos</strong></td>
				    				
				    						    				
				    			</tr>
				    			
				    		</thead>
				    		
				    		<tbody >";
					while($row = mysqli_fetch_array($consulta))
					{
						echo "<tr>";
						echo "<td><input type='radio' name='selec' class='seleccion pull-right' id='".$row['CedulaAlumno']."'></td>";
						echo "<td>".$row['CedulaAlumno']."</td>";
						echo "<td>".$row['NombresAlumno']."</td>";
						echo "<td>".$row['ApellidosAlumno']."</td>";
						echo "</tr>";
					}
					echo"</tbody>
					</table>
					<div class='pull-right'>"; 
					if(($_SESSION['rol']=='Administrador')||($_SESSION['rol']=='Coordinador')){
					echo   "<button type='button' id='btnInscribir' class='btn btn-warning btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Agregar a Regulares</button> ";
					}
					echo   "<button type='button' id='btnGenerarAcept' class='btn btn-primary btn-sm' value='show' data-loading-text='Cargando...' autocomplete='off'>Generar Aceptacion</button> ";
					if(($_SESSION['rol']=='Administrador')||($_SESSION['rol']=='Coordinador')){
					echo   "<button type='button' id='btnEliminar' class='btn btn-danger btn-sm' value='show' data-loading-text='Eliminando...' autocomplete='off'>Eliminar</button>";
					}
					echo   "</div>";
				    	
				} else {
					echo "<script>alert('¡No Existe Cedula Asociada!');</script>";
				}
			} 
		}
    } else {
    	echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
    	
    };
	
?>