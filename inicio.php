<?php include("header.php") ?>

<div class="row" style='height:100%'>
<!-- inicio contenido  -->

<div class="col-lg-4">
					 
					<div class="nav-header text-center">
     	               <ul class="nav nav-tabs nav-stacked navbar-default">
      	                  <h4 > Sub-Menu <label class="glyphicon glyphicon-tasks" rel="tooltip"> </label> </h4>
      	                   <?php if(($_SESSION['rol']=='Administrador')||($_SESSION['rol']=='Coordinador')): ?>
                            <!--TUERCA: glyphicon-cog / LLAVE: glyphicon-wrench-->
      	                  <li ><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> <label for="Conf Sist" class="glyphicon glyphicon-cog" rel="tooltip"> </label> Configurar Sistema <label for="Agregar Alumno" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                          <div class="margenSuperiorCollapse collapse" id="collapseOne">
                            <ul class="nav nav-tabs navbar-default nav-stacked">
                              <li ><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"> <label for="Datos de Documentos" class="glyphicon glyphicon-pencil" rel="tooltip"> </label> Gestionar Datos de Documentos <label for="Agregar Alumno" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                              
                              <div class="margenSuperiorCollapse collapse" id="collapseTwo">
                                <ul class="nav nav-tabs navbar-default nav-stacked">
                                  <li><a id="abrirModalDirector" href="#"> <label for="Modificar Director" class="glyphicon glyphicon-user" rel="tooltip" > </label> Datos de Director <label for="ModificarDirect" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                                  <li><a id="abrirModalInstitucion" href="#"> <label for="Modificar Institucion" class="glyphicon glyphicon-home" rel="tooltip" > </label> Datos de Institución <label for="ModificarInstit" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                                  <li><a id="abrirModalMinisterio" href="#"> <label for="Modificar Ministerio" class="glyphicon glyphicon-tower" rel="tooltip" > </label> Datos de Ministerio <label for="ModificarMin" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                                
                    
                                </ul>
                              </div>
                              <li ><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <label for="Periodo Escolar" class="glyphicon glyphicon-time" rel="tooltip"> </label> Periodo Escolar <label for="Agregar Alumno" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                              <div class="margenSuperiorCollapse collapse" id="collapseThree">
                                <ul class="nav nav-tabs navbar-default nav-stacked">
                                  <li><a id="abrirModalPeriodoA" href="#"> <label class="glyphicon glyphicon-play" rel="tooltip" > </label> Iniciar Nuevo Periodo Escolar <label class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                                  <li><a id="abrirModalPeriodoE" href="#"> <label class="glyphicon glyphicon-adjust" rel="tooltip" > </label> Modificar Periodo Escolar <label class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                                  
                    
                                </ul>
                              </div>
                              <li ><a data-toggle="collapse" data-parent="#accordion" id="cargaMasiva" href="#"> <label for="Carga Masiva" class="glyphicon glyphicon-upload" rel="tooltip"> </label> Carga Masiva de Datos <label for="Agregar Alumno" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                            </ul> 
                          </div>
                          <li data-toggle="modal" data-target="#ModalAsociarRepresentante"> <a href="#"> <label for="Agregar Alumno" class="glyphicon glyphicon-plus" rel="tooltip"  > </label> Gestionar Información Alumno  <label for="Agregar Alum" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label></a></li>
      	                  <li data-toggle="modal"><a id="abrirModalAscensos" href="#"> <label for="Ascensos de Grado" class="glyphicon glyphicon-check" rel="tooltip" > </label> Ascensos de Grado <label for="Agregar Alumno" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                          <li ><a data-toggle="collapse" data-parent="#accordion" href="#collapseFor"> <label for="Reportes" class="glyphicon glyphicon-book" rel="tooltip"> </label> Reportes <label for="Reportes" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                          
                          <div class="margenSuperiorCollapse collapse" id="collapseFor">
                            <ul class="nav nav-tabs navbar-default nav-stacked">
                              <li><a id="estadisticas" href="#"> <label for="Estadisticas" class="glyphicon glyphicon-stats" rel="tooltip" > </label> Reporte de Estadísticas <label for="estadisticas" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                              <li><a id="exportar" href="#"> <label for="Regulares" class="glyphicon glyphicon-home" rel="tooltip" > </label> Reporte de Regulares <label for="regulares" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                              <li><a id="retirados" href="#"> <label for="Retirados" class="glyphicon glyphicon-log-out" rel="tooltip" > </label> Reporte de Retirados <label for="retirados" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                              <li><a id="preInscritos" href="#"> <label for="Pre" class="glyphicon glyphicon-log-in" rel="tooltip" > </label> Reporte de Pre-Inscritos <label for="pre" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                              <li><a id="log" href="#"> <label for="log" class="glyphicon glyphicon-user" rel="tooltip" > </label> Reporte de Usuario <label for="log" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
                              
                              <!--<li><a href="#"> <label for="Modificar Ministerio" class="glyphicon glyphicon-tower" rel="tooltip" > </label> Modificar Ministerio <label for="ModificarMin" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>-->
                
                            </ul>
                          </div>

                          

      	                   <?php endif; ?>
      	                  <li ><a id="ayudas" href="#"> <label for="Ayudas" class="glyphicon glyphicon-question-sign" rel="tooltip"> </label> Ayudas <label for="Ayudas" class="glyphicon glyphicon-chevron-right pull-right" rel="tooltip" > </label> </a></li>
      	
                        </ul>
                    </div>
               
				</div>
				
								
				<!--fORMULARIO DE BUSQUEDA-->
				<div class=" panel panel-default col-lg-8">
					
					
					<div class= "panel-heading"> 
						<h4 class="text-center">Búsqueda de Alumno</h4>
						
						</div>
					<div class="panel-body">
					<form class="formBusqueda" method="POST">
        
                       <div class="input-group input-group-md">
                           <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"> </i></span>
                           <div class="icon-addon addon-md">
                              <input type="number" id="busqueda" name="busqueda" class="form-control" placeholder="Ingresar Cédula Asociada" title="Ingrese un número de cédula asociada a un alumno" required autofocus>
                        	</div>

                           <span class="input-group-btn">
                             <button class="btn btn-primary"  type="submit" id="on" value="show" data-loading-text="Buscando..." autocomplete="off" > Buscar
                        	    <label for="email" class="glyphicon glyphicon-search" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	 </button>
                        	 
                           </span>

                       </div>
                       <div class="checkbox">
					        <label>
						    	<input type="checkbox" name="checkboxPreInscrito" id="checkboxPreInscrito" /> Buscar Alumno Pre-Inscrito
					        </label>
				        </div>
                    </form>
                    </div>
                    
                    <div id="resultadoBusqueda"> </div>
                </div>

<!-- fin contenido -->
</div>
<?php include("modales.php") ?>
<?php include("footer.php") ?>