
<div>
		    
		    
			<!-- MODAL GESTION CANAIMITA-->
			    <div class="modal fade " id="ModalGCanaimita" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="#LabelAgregar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="Cerrar close" aria-hidden="true">&times;</button>
						
						         <h3 class="text-center">Gestionar Canaimita</h3> 
					         </div>         
					
					        <div class="modal-footer panel-footer">
					        	<!-- data-toggle="modal" data-target="#ModalAsociarPadres" -->
                                <button class="btn btn-warning btn-lg" id="btnAgregarCanaima" type="button" > Agregar Canaimita
                        	       <label for="Buscar" class="glyphicon glyphicon-plus" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>

                        	    <button class="btn btn-primary btn-lg" id="btnConsultarCanaima" type="button" > Consultar Canaimitas
                        	       <label for="Buscar" class="glyphicon glyphicon-search" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button" > Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
						        
					        </div>
					
				       </div>
				
				    </div>
			    </div>
			
		    <!-- MODAL ASOCIAR REPRESENTANTE.... OJO VALIDACION-->
			    <div class="modal fade " id="ModalAsociarRepresentante" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="#LabelAgregar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="Cerrar close" aria-hidden="true">&times;</button>
						
						         <h3 class="text-center">Asociar Representante</h3> 
					         </div>
					
					         <div class="modal-body">
						         <form method="post" action="buscarRepresentante.php" class="form-signin formulario" id="formRepresentante">
			
						             <div class="input-group input-group-lg">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"> </i></span>
                                         <div class="icon-addon addon-lg">
                                                <input type="text" id="CIRepresentante" class="form-control input-lg" placeholder="CI de Representante" name="cedulaRep" title="Ingrese y Valide la Cedula" autofocus required/>
			                         
                                         </div>
                                     </div>
			                         <br />
			                         <div id="resultadoBusquedaRep"></div>

						             <input type="text" class="form-control input-lg" placeholder="Nombre del Representante" name="nombreRep" id="nombreRep" title="Ingresar Nombre del Representante" required/>
			                         <input type="text" class="form-control input-lg" placeholder="Apellido del Representante" name="apellidoRep" id="apellidoRep" title="Ingresar Apellido del Representante" required/>
			
						             <select class="form-control input-lg" id="comboParentesco" name="comboRepPar">
			 	                         <option value="Parentesco">- Seleccione un Parentesco -</option>
			 	                         <option value="Madre">Madre</option>
			 	                         <option value="Padre">Padre</option>
			 	                         <option value="Tia">Tia</option>
			 	                         <option value="Tio">Tio</option>
			 	                         <option value="Abuela">Abuela</option>
			 	                         <option value="Abuelo">Abuelo</option>
			 	                         <option value="Hermana">Hermano</option>
			 	                         <option value="Hermano">Hermano</option>
			 	                         <option value="Prima">Prima</option>
			 	                         <option value="Primo">Primo</option>
			 	                         <option value="Padrastro">Padrastro</option>
			 	                         <option value="Madrastra">Madrastra</option>
			 	                         
			                         </select>
			                      </form> 
			                   </div>			         
					
					        <div class="modal-footer panel-footer">
					        	<!-- data-toggle="modal" data-target="#ModalAsociarPadres" -->
                                <button class="btn btn-primary btn-lg" id="btnSigRep" type="button" > Siguiente
                        	       <label for="Buscar" class="glyphicon glyphicon-forward" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button" > Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
						        
					        </div>
					
				       </div>
				
				    </div>
			    </div>
								
			<!--MODAL ASOCIAR PADRES.... OJO VALIDACION-->
			
			   <div class="modal fade" id="ModalAsociarPadres" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="#LabelAgregar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="Cerrar close" aria-hidden="true">&times;</button>
						
						         <h3 class="text-center">Asociar Padres</h3> 
					         </div>
					
					         <div class="modal-body">
						         <form method="get" class="form-signin formulario" id="formPad">
			
						           
			                         <h4 class="form-signin-heading text-center">Asociar Madre</h4>
			                         
			                          	<div class="input-group input-group-lg">
                                         	<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"> </i></span>
                                         	<div class="icon-addon addon-lg">
                                                <input type="text" class="form-control input-lg" placeholder="CI de la Madre" pattern="[0-9]+" maxlength="9" name="cedulaMadre" id="CIMadre" title="Ingrese y Valide la Cedula" autofocus/>
			                        		</div>
                                        </div>
			                         	<br />
			                         	<div id="resultadoBusquedaMad"></div>
			                    
			                            <input type="text" class="form-control input-lg" placeholder="Nombre de la Madre" name="nombreMadre" id="nombreMadre" title="Ingresar Nombre de la Madre"/>
			                            <input type="text" class="form-control input-lg" placeholder="Apellido de la Madre" name="apellidoMadre" id="apellidoMadre" title="Ingresar Apellido de la Madre"/>
			
			
			                         <h4 class="form-signin-heading text-center">Asociar Padre</h4>
			                         
			                         
			                        <div class="input-group input-group-lg">
	                                     <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"> </i> </span>
	                                     <div class="icon-addon addon-lg">
	                                            <input type="text" class="form-control input-lg" placeholder="CI del Padre" pattern="[0-9]+" maxlength="9" name="CedulaPadre" id="CIPadre" title="Ingrese y Valide la Cedula" autofocus/>
			                            
	                                     </div>
	                                    </div>
				                        <br />
				                        <div id="resultadoBusquedaPad"></div>
				                        <input type="text" class="form-control input-lg" placeholder="Nombre del Padre" name="nombrePadre" id="nombrePadre" title="Ingresar Nombre del Padre" />
				                        <input type="text" class="form-control input-lg" placeholder="Apellido del Padre" name="apellidoPadre" id="apellidoPadre" title="Ingresar Apellido del Padre"/>
				
			
			                      </form> 
			                   </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        
						        <button class="btn btn-primary btn-lg" id="btnSigPad" type="button" > Siguiente
                        	       <label for="Buscar" class="glyphicon glyphicon-forward" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button"> Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
						        
					        </div>
					
				       </div>
				
				    </div>
			    </div>
						
			<!--MODAL AGREGAR ALUMNO ............ 	OOOJOOOO CHECKBOX, VALIDACION-->
			
			    <div class="modal fade" id="ModalAgregarAlumno" data-keyboard="false" data-backdrop="static" role="dialog" aria-labelledby="#LabelAgregar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="Cerrar close" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Agregar Alumno</h3> 
					         </div>
					
					         <div class="modal-body">
						          
						        <form method="post" class="form-signin formulario" id="formAlum" >
			                         
			                        <div class="icon-addon addon-lg">
			                          		<input type="text" id="datepicker" name="datepicker" class="form-control input-lg" placeholder="Fecha de Nacimiento">
			                          		<span id="manejoDatepicker"><i class="glyphicon glyphicon-calendar"> </i></span>
			                        </div>                                  
                                     
                                  
			                        <input type="text" class="form-control input-lg" placeholder="CI de Alumno" name="cedulaAlumno" id="cedulaAlumno" title="Ingrese una cedula valida" disabled="true"  required/>
			                    
			                   
			                        <!--OJO ver si se agranda la fuente o algo por el estilo-->
			                         <div class="checkbox">
				                        <label>
					                       <input type="checkbox" name="checkboxCedulaEscolar" id="checkboxCedulaEscolar" checked="checked" /> Generar Automáticamente Cédula Escolar
				                        </label>
			                         </div>
			                         <!-- RECORDAR AGREGAR LA VALIDACION PARA QUE LOS CAMPOS NOMBRE Y APELLIDO ACEPTEN LETRAS, Ñ, ñ , ´, APOSTROFE Y ESPACIOS EN BLANCO -->
			                         <input type="text" class="form-control input-lg" placeholder="Nombre del Alumno" name="nombreAlumno" id="nombreAlumno" title="Ingresar Nombre del Alumno" required/>
			                         <input type="text" class="form-control input-lg" placeholder="Apellido del Alumno" name="apellidoAlumno" id="apellidoAlumno" title="Ingresar Apellido del Alumno" required/>
			                         
			
			                         <select class="form-control input-lg" name="comboAlSex" id="comboAlSex">
			 	                        <option value="Sexo">- Seleccione un Sexo -</option>
			 	                        <option value="Masculino">Masculino</option>
			 	                        <option value="Femenino">Femenino</option>
			 	
			                         </select > 
			 						 <input type="text" class="form-control input-lg" placeholder="Ciudad de Nacimiento" name="CiudadNacimiento" id="ciudadNacimiento" title="Ingresar ciudad valida" required/>
			                         <input type="text" class="form-control input-lg" placeholder="Municipio" name="municipioNacimiento" id="municipioNacimiento" title="Ingresar municipio valido" required/>
			                         <input type="text" class="form-control input-lg" placeholder="Estado de Nacimiento" name="EstadoNacimiento" id="estadoNacimiento" title="Ingresar estado valido" required/>
			                         <input type="text" class="form-control input-lg" placeholder="Dirección de Habitación" name="direccion" id="direccion" required/>
			                         <input type="text" class="form-control input-lg" placeholder="Alergias o Enfermedades" name="enfermedades" id="enfermedades" required/>
			 
			                         <select class="form-control input-lg" name="comboAlGrado" id="comboAlGrado" >
			 	                        <option value="Grado">- Seleccione Grado Actual -</option>
			 	                        <option value="III Nivel">III Nivel</option>
			 	                        <option value="1º Grado">1º</option>
			 	                        <option value="2º Grado">2º</option>
			 	                        <option value="3º Grado">3º</option>
			 	                        <option value="4º Grado">4º</option>
			 	                        <option value="5º Grado">5º</option>
			 	                        <option value="6º Grado">6º</option>
			 	
			                        </select>
			                                 
			                        <select class="form-control input-lg" name="comboAlLiteral" id="comboAlLiteral">
			 	                       <option value="Literal">- Seleccione Literal Anterior -</option>
			 	                       <option value="A">A</option>
			 	                       <option value="B">B</option>
			 	                       <option value="C">C</option>
			 	                       <option value="D">D</option>
			 	                       <option value="E">E</option>
			 	
			                       </select>
			
			                        <select class="form-control input-lg" name="comboStatus" id="comboStatus">
			 	                       <option value="Status">- Seleccione Status de Alumno-</option>
			 	                       <option value="PreInscrito">Pre-Inscrito</option>
			 	                       <option value="Regular">Regular</option>
			 	                      
			                       </select>
			
		                        </form>
						          
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
					        	<button id="btnGuardarAlum" class="btn btn-success btn-lg" type="button" value="show" data-loading-text="Guardando..." autocomplete="off"> Guardar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button"> Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
						        
					        </div>
					
				       </div>
				
				    </div>
			    </div>
						
			<!--MODAL MODIFICAR DATOS DE DIRECTOR..... OJO VALIDACION-->
			
			    <div class="modal fade" id="ModalModificarDirector" data-keyboard="false"  data-backdrop="static" role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Gestionar Datos del Director</h3> 
					         </div>
					
					         <div class="modal-body">
						          
						          <form method="get" class="form-signin formulario" id="formDirector">
			                         
			                         <input type="text" class="form-control input-lg" placeholder="CI del Director(a)" pattern="[0-9]+" maxlength="9" name="cedulaDirector" id="cedulaDirector" title="Ingrese una cedula valida" autofocus required/>
			                         <input type="text" class="form-control input-lg" placeholder="Nombre del Director(a)" name="nombreDirector" id="nombreDirector" title="Ingresar Nombre Valido" required/>
			                         <input type="text" class="form-control input-lg" placeholder="Apellido del Director(a)" name="apellidoDirector" id="apellidoDirector" title="Ingresar Apellido Valido" required/>
			
			
		                         </form>
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button class="btn btn-success btn-lg" type="button" id="btnActualizarDirector" value="show" data-loading-text="Guardando..." autocomplete="off"> Guardar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button"> Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>
						
			<!--MODAL MODIFICAR DATOS DE INSTITUCION..... OJO VALIDACION-->
			
			    <div class="modal fade" id="ModalModificarInstitucion" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Gestionar Datos de la Institución</h3> 
					         </div>
					
					         <div class="modal-body">
						           
			                        <form method="post" class="form-signin formulario" id="formInstitucion">
									   <input type="text" class="form-control input-lg" placeholder="Código de la Institución" name="CodigoInstitucion" id="codigoInstitucion" title="Ingresar Codigo Valido"  required/>
			                           <input type="text" class="form-control input-lg" placeholder="Nombre de la Institución" name="NombreInstitucion" id="nombreInstitucion" title="Ingresar Nombre Valido"  required/>
			                           <input type="text" class="form-control input-lg" placeholder="Dirección de la Institución" name="DireccionInstitucion" id="direccionInstitucion" title="Ingresar Direccion Valida" required/>
			                           <input type="text" class="form-control input-lg" placeholder="Teléfono de la Institución" name="TelefonoInstitucion" id="telefonoInstitucion" title="Ingresar Telefono Valido" required/>
			                           <input type="text" class="form-control input-lg" placeholder="Teléfono Alternativo de la Institución" name="TelefonoAlternativo" id="telefonoInstitucionAlternativo" title="Ingresar Telefono Valido" required/>
			
			                      </form>
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button class="btn btn-success btn-lg" type="button" id="btnActualizarInstitucion" value="show" data-loading-text="Guardando..." autocomplete="off"> Guardar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button" > Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>
						
            <!--MODAL MODIFICAR DATOS DE MINISTERIO...... OJO VALIDACION-->
			
			    <div class="modal fade" id="ModalModificarMinisterio" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Gestionar Datos del Ministerio</h3> 
					         </div>
					
					         <div class="modal-body">
						           
			                        <form method="get" class="form-signin formulario" id="formMinisterio" >
			
			                           <textarea class="form-control" placeholder="Nombre del Ministerio" id="nombreMinisterio" autofocus required> </textarea>
			 		                </form>
			                
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button class="btn btn-success btn-lg" type="button" id="btnActualizarMinisterio" value="show" data-loading-text="Guardando..." autocomplete="off"> Guardar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button"> Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>		

			<!--MODAL Iniciar PERIODO ESCOLAR-->

				<div class="modal fade" id="ModalIniciarPeriodo" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Iniciar Periodo Escolar</h3> 
					         </div>
					
					         <div class="modal-body">
						           
			                    <input type="text" class="form-control input-lg" maxlength="12" placeholder="Periodo Escolar" name="periodoEscolar" id="periodoEscolar" title="Ingresar Periodo Escolar con formato Año Inicial - Año Finalización" required/>
			
			                </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button class="btn btn-success btn-lg" type="button" id="btnIniciarPeriodo" value="show" data-loading-text="Iniciando..." autocomplete="off"> Iniciar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button" > Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
					        </div>
					
				        </div>
				
				    </div>
			    </div>

			<!--MODAL MODIFICAR PERIODO ESCOLAR-->

				<div class="modal fade" id="ModalModificarPeriodo" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Modificar Periodo Escolar</h3> 
					         </div>
					
					         <div class="modal-body">
						           <div id="per"></div>
			                    <!--<input type="text" class="form-control input-lg" maxlength="12" placeholder="Periodo Escolar" name="periodoEscolar" id="periodoEscolar" title="Ingresar Periodo Escolar con formato Año Inicial - Año Finalización" required/>-->
			                </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button class="btn btn-success btn-lg" type="button" id="btnActualizarPeriodo" value="show" data-loading-text="Guardando..." autocomplete="off"> Guardar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button" > Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
					        </div>
					
				        </div>
				
				    </div>
			    </div>

			<!--MODAL CARGA MASIVA-->
				<div class="modal fade" id="ModalCargaMasiva" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Carga Masiva de Alumnos,Padres y Representantes</h3> 
					         </div>
					
					         <div class="modal-body">
						        <form> 
			                    <input type="file" placeholder="Cargar Archivo Excel..." accept=".csv" name="filename" id="filename" title="Cargar Documento Excel" required/>
								</form>
			                </div>
					        <div class="modal-footer panel-footer">
						        <button class="btn btn-default btn-lg" type="button" id="btnPlantilla" value="show" data-loading-text="Descargando..." autocomplete="off"> Plantilla
                        	       <label for="Buscar" class="glyphicon glyphicon-upload" rel="tooltip"> </label>
                        	    </button>

						        <button class="btn btn-success btn-lg" type="button" id="btnCargar" value="show" data-loading-text="Cargando..." autocomplete="off"> Cargar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button" > Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip"> </label>
                        	    </button>
					        </div>
					
				        </div>
				
				    </div>
			    </div>

			<!--MODAL MODIFICAR CONTRASEÑA.... OJO VALIDACION-->
			
			    <div class="modal fade" id="ModalModificarContraseña" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close Cerrar" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Modificar Contraseña</h3> 
					         </div>
					
					         <div class="modal-body">
						           
			                        <form class="form-signin formulario" >
			                        	
			                        	<div class="input-group input-group-lg">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"> </i></span>
                                         <div class="icon-addon addon-lg">
                                                <input type="password" class="form-control input-lg" placeholder="Contraseña Actual"  name="Contrasenia" id="Contrasenia" title="Ingrese la Contraseña que usa Actualmente" autofocus/>
			                            
                                         </div>
                                         <span class="input-group-btn">
                                            <button id="validarPw" class="btn btn-info" type="button" value="show" data-loading-text="Validando..." autocomplete="off"> Validar
                        	                   <label for="Validar" class="glyphicon glyphicon-ok" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	                </button>
                                         </span>
                                     </div>
			                        	
			                        	<div class="divider">
			                            	<br />
			                            <input type="password" class="form-control input-lg" placeholder="Contraseña Nueva" name="ContraseniaNueva" id="ContraseniaNueva" maxlength="15" title="Ingresar la Nueva Contraseña que desea Utilizar" disabled="true" required/>
			                            <input type="password" class="form-control input-lg" placeholder="Repita su Contraseña Nueva" name="ContraseniaNuevaRep" id="ContraseniaNuevaRep" maxlength="15" title="Repita la Contraseña Nueva para Verificar" disabled="true" required/>
			                            </div>
			
			
			                        </form>
			                
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button id="btnGuardarPwNvo" class="btn btn-success btn-lg" type="button" value="show" data-loading-text="Guardando..." autocomplete="off"> Guardar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="btn btn-danger btn-lg Cerrar" type="button" data-dismiss="modal" > Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>
			
			<!-- MODAL MODIFICAR NOMBRE DE USUARIO..... OJO VALIDACION-->
			
			    <div class="modal fade" id="ModalModificarUsuario" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Modificar Nombre de Usuario</h3> 
					         </div>
					
					         <div class="modal-body">
						           
			                        <form method="get" class="form-signin formulario" >
			                        	
			                        	<div class="input-group input-group-lg">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"> </i></span>
                                         <div class="icon-addon addon-lg">
                                                <input type="password" class="form-control input-lg" placeholder="Contraseña Actual" pattern="[0-9]+" maxlength="9" name="ContraseniaActual" id="ContraseniaValidarUs" title="Ingrese su Contraseña para validar su Identidad" autofocus/>
			                            
                                         </div>
                                         <span class="input-group-btn">
                                            <button class="btn btn-info" type="button" value="show" data-loading-text="Guardando..." autocomplete="off"> Validar
                        	                   <label for="Validar" class="glyphicon glyphicon-ok" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	                </button>
                                         </span>
                                     </div>
			                        	
			                        	
			                            	<br />
			                            <input type="text" class="form-control input-lg" placeholder="Nuevo Nombre" name="NuevoNombre" id="NuevoNombre" title="Ingresar el Nuevo Nombre que tendra su Usuario" disabled="true" required/>
			                            	
			
			                        </form>
			                
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button class="btn btn-success btn-lg" type="button" data-dismiss="modal"> Guardar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="btn btn-danger btn-lg" type="button" data-dismiss="modal" > Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>
				
			<!--MODAL MODIFICAR PREGUNTA Y RESPUESTA... OJO VALIDACION-->
			
			    <div class="modal fade" id="ModalModificarPregunta" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close Cerrar" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Modificar Pregunta y Respuesta de Seguridad</h3> 
					         </div>
					
					         <div class="modal-body">
						           
			                        <form id="formPyR" class="form-signin formulario" >
			                        	
			                        	<div class="input-group input-group-lg">
                                         <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"> </i></span>
                                         <div class="icon-addon addon-lg">
                                                <input type="password" class="form-control input-lg" placeholder="Contraseña Actual" maxlength="15" name="ContraseniaValidarPreg" id="ContraseniaValidarPreg" title="Ingrese su Contraseña para validar su Identidad" autofocus/>
			                            
                                         </div>
                                         <span class="input-group-btn">
                                            <button id="btnValPw" class="btn btn-info" type="button" value="show" data-loading-text="Validando..." autocomplete="off"> Validar
                        	                   <label for="Validar" class="glyphicon glyphicon-ok" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	                </button>
                                         </span>
                                     </div>
			                        	
			                        	
			                            	<br />
			                            
			                            <div class="input-group">
			                            	<span class="input-group-addon">¿</span>
			                            	<input type="text" class="form-control input-lg" placeholder="Pregunta de Seguridad" name="PreguntaSeguridadNva" id="PreguntaSeguridadNva" title="Ingresar la Nueva Pregunta de Seguridad" disabled="true" required/>
			                                <span class="input-group-addon">?</span>
			                            </div>	
			                            <input type="text" class="form-control input-lg" placeholder="Respuesta de Seguridad" name="RespuestaSeguridadNva" id="RespuestaSeguridadNva" title="Ingresar la Nueva Respuesta de Seguridad" disabled="true" required/>
			                            
			
			
			                        </form>
			                
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button id="btnGuardarPyR" class="btn btn-success btn-lg" type="button" value="show" data-loading-text="Guardando..." autocomplete="off"> Guardar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="btn btn-danger btn-lg Cerrar" type="button" data-dismiss="modal" > Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>
			
			<!--MODAL CREAR USUARIO-->
			
			    <div class="modal fade" id="ModalCrearUsuario" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Crear Nuevo Usuario</h3> 
					         </div>
					
					         <div class="modal-body">
						           
			                        <form id="formUsuario" class="form-signin formulario" >
			                        	
			                            <input type="text" class="form-control input-lg" placeholder="Nombre de Usuario" name="NombreDeUsuario" id="NombreDeUsuario" title="Ingresar el Nombre que Tendra el Usuario" required/>
			                            <div id="busquedaUsuario"></div>
			                            <input type="password" class="form-control input-lg" placeholder="Contraseña de Usuario" name="ContraseniaNuevoUsuario" id="ContraseniaNuevoUsuario" title="Ingresar la Contraseña que Tendra el Usuario" required/>
			                             <div class="input-group">
			                            	<span class="input-group-addon">¿</span>
			                            	<input type="text" class="form-control input-lg" placeholder="Pregunta de Seguridad" name="PreguntaSeguridadNvoUsuario" id="PreguntaSeguridadNvoUsuario" title="Ingresar la Pregunta de Seguridad para el Nuevo Usuario" required/>
			                                <span class="input-group-addon">?</span>
			                            </div>	
			                            <input type="text" class="form-control input-lg" placeholder="Respuesta de Seguridad" name="RespuestaSeguridadNvoUsuario" id="RespuestaSeguridadNvoUsuario" title="Ingresar la Respuesta de Seguridad para el Nuevo Usuario" required/>
			                            
			                            <?php if($_SESSION['rol']=='Administrador'): ?>
			                            <select class="form-control input-lg" name="comboRol" id="comboRol">
				 	                        <option value="Rol">- Seleccione un Rol -</option>
				 	                        <option value="1">Administrador</option>
				 	                        <option value="2">Coordinador</option>
				 	                    </select>
										<?php endif; ?>

										<?php if($_SESSION['rol']=='Coordinador'): ?>
			                            <select class="form-control input-lg" name="comboRol" id="comboRol">
				 	                        <option value="2">Coordinador</option>
			 	                  		</select>
										<?php endif; ?>

			                        </form>
			                
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button id="btnGuardarUsuario" class="btn btn-success btn-lg" type="button" value="show" data-loading-text="Guardando..." autocomplete="off" > Guardar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="btn btn-danger btn-lg" type="button" data-dismiss="modal" > Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>
			
			<!--MODAL EDITAR ALUMNO -->

				<div class="modal fade" id="ModalEditarAlumno" data-keyboard="false" data-backdrop="static" role="dialog" aria-labelledby="#LabelAgregar"  aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="btnSalirEditarAl close" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Editar Alumno</h3> 
					         </div>
					
					         <div class="modal-body">
						          
						        <form method="post" class="form-signin formulario" id="formEditAlum" >
			                         
			                        <input type="text" class="form-control input-lg" placeholder="CI de Alumno" name="cedulaAlumno2" id="cedulaAlumno2" title="Cedula del Alumno" required/>
			                    
			                   
			                         <!-- RECORDAR AGREGAR LA VALIDACION PARA QUE LOS CAMPOS NOMBRE Y APELLIDO ACEPTEN LETRAS, Ñ, ñ , ´, APOSTROFE Y ESPACIOS EN BLANCO -->
			                         <input type="text" class="form-control input-lg" placeholder="Nombre del Alumno" name="nombreAlumno2" id="nombreAlumno2" title="Nombre del Alumno" required/>
			                         <input type="text" class="form-control input-lg" placeholder="Apellido del Alumno" name="apellidoAlumno2" id="apellidoAlumno2" title="Apellido del Alumno" required/>
			                         <input type="text" class="form-control input-lg" placeholder="Ciudad de Nacimiento" name="ciudadNacimiento2" id="ciudadNacimiento2" title="Ciudad de Nacimiento" required/>
			                        <input type="text" class="form-control input-lg" placeholder="Municipio" name="municipio2" id="municipio2" title="Municipio de Nacimiento" required/>
			                        <input type="text" class="form-control input-lg" placeholder="Estado de Nacimiento" name="estadoNacimiento2" id="estadoNacimiento2" title="Estado de Nacimiento" required/>
			                        <input type="text" class="form-control input-lg" placeholder="Direccion" name="direccion2" id="direccion2" title="Direccion de Habitación" required/>
			                        
			 
			                         <select class="form-control input-lg" name="comboAlGrado2" id="comboAlGrado2" >
			 	                        <option value="Grado">- Seleccione Grado Actual -</option>
			 	                        <option value="III Nivel">III Nivel</option>
			 	                        <option value="1º Grado">1º</option>
			 	                        <option value="2º Grado">2º</option>
			 	                        <option value="3º Grado">3º</option>
			 	                        <option value="4º Grado">4º</option>
			 	                        <option value="5º Grado">5º</option>
			 	                        <option value="6º Grado">6º</option>
			 	
			                        </select>
			                                 
			                        <select class="form-control input-lg" name="comboAlLiteral2" id="comboAlLiteral2">
			 	                       <option value="Literal">- Seleccione Literal Anterior -</option>
			 	                       <option value="A">A</option>
			 	                       <option value="B">B</option>
			 	                       <option value="C">C</option>
			 	                       <option value="D">D</option>
			 	                       <option value="E">E</option>
			 	
			                       </select>

			                       <select class="form-control input-lg" name="comboComportamiento" id="comboComportamiento">
			 	                       <option value="Comportamiento">- Seleccione Comportamiento -</option>
			 	                       <option value="Excelente">Excelente</option>
			 	                       <option value="Buena">Bueno</option>
			 	                       
			                       </select>
			
			                        <input type="text" class="form-control input-lg" placeholder="Enfermedades o Alergias" name="enfermedad2" id="enfermedad2" title="Alergias o Enfermedades" required/>
			 

		                        </form>
						          
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
					        	<button id="btnActualizarAlum" class="btn btn-success btn-lg" type="button" value="show" data-loading-text="Guardando..." autocomplete="off"> Actualizar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputEditarAlumno"> </label>
                        	    </button>
                            
						        <button class="btnSalirEditarAl btn btn-danger btn-lg" type="button"> Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputEditarAlumno"> </label>
                        	    </button>
						        
					        </div>
					
				       </div>
				
				    </div>
			    </div>
		
			<!--MODAL AGREGAR CANAIMA -->
				<div class="modal fade" id="ModalAgregarCanaima" data-keyboard="false"  data-backdrop="static" role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="Cerrar close" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Agregar Datos de Canaima</h3> 
					         </div>
					
					         <div class="modal-body">
						          
						          <form method="get" class="form-signin formulario" id="formGestionarCanaima" >
			                         
			                         <input type="text" class="form-control input-lg" placeholder="Serial Canaima" name="serialCanaima" id="serialCanaima" title="Serial de la Canaima" required/>
			                         <div id="resultadoBusquedaCanaima"></div>
			                         <input type="text" class="form-control input-lg" placeholder="Modelo Canaima" name="modeloCanaima" id="modeloCanaima" title="Modelo de la Canaima" required/>
			                        			
		                         </form>
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button id="btnGuardarCanaima" class="btn btn-success btn-lg" type="button" value="show" data-loading-text="Guardando..." autocomplete="off"> Guardar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button"> Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>
			
			<!--MODAL GENERAR DOCUMENTOS -->
				<div class="modal fade" id="ModalGenerarDoc" data-keyboard="false"  data-backdrop="static" role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="btnSalirModalGenerar close" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Generar Documento</h3> 
					        </div>
							
					        <div class="modal-body">
					            <select class="form-control input-lg" id="comboDoc">
					              <option value="documento">- Seleccione un Documento -</option>
								  <option value="Constancia de Estudio">Constancia de Estudio</option>
								  <option value="Constancia de Comportamiento">Constancia de Comportamiento</option>
								  <option value="Constancia de Inscripcion">Constancia de Inscripción</option>
								  <option value="Constancia de Promocion">Constancia de Promoción</option>
								  <option value="Constancia de Entrega de Canaima">Constancia de Entrega de Canaima</option>
								  <option value="Constancia de Robo de Canaima">Constancia de Robo de Canaima</option>
								  
								</select>
						       
			                 </div>
			
						
					         
					
					        <div class="modal-footer panel-footer">
						        <button id="btnGenerar" class="btn btn-success btn-lg" type="button" value="show" data-loading-text="Generando..." autocomplete="off"> Generar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>
                            
						        <button class="btnSalirModalGenerar btn btn-danger btn-lg" type="button"> Salir
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>

			<!--MODAL RETIRAR-->
				<div class="modal fade" id="ModalRetirar" data-keyboard="false"  data-backdrop="static" role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="btnSalirModalRetirar close" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Retirar Alumno</h3> 
					        </div>
							
					        <div class="modal-body">
					            <select class="form-control input-lg" id="comboMotivoRetiro">
					              <option value="motivo">- Seleccione un Motivo -</option>
								  <option value="Cambio de Residencia">Cambio de Residencia</option>
								  <option value="Cambio de Institucion">Cambio de Institución</option>
								  <option value="Solicitud del Representante">Solicitud del Representante</option>
								  
								</select>
						       
			                 </div>

					
					        <div class="modal-footer panel-footer">
						        <!--<button id="btnDocRetiro" class="btn btn-primary btn-lg" type="button" value="show" data-loading-text="Generando..." autocomplete="off"> Documentos de Retiro
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>-->

						        <button id="btnHacerRetiro" class="btn btn-success btn-lg" type="button" value="show" data-loading-text="Retirando..." autocomplete="off"> Retirar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>
                            
						        <button class="btnSalirModalRetirar btn btn-danger btn-lg" type="button"> Salir
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>
 
			<!--MODAL ASCENSOS DE GRADO-->
			    <div class="modal fade" id="ModalAscensos" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Promociones de Grado</h3> 
					         </div>
					
					         <div class="modal-body">
						           
			                       <div id="espera"></div>
			                       <div id="alumnosParaAscensos"></div>
			                
			                 </div>
						         
					
					        <div class="modal-footer panel-footer">
						        <button class="btn btn-success btn-lg" type="button" id="btnGuardarAscensos" value="show" data-loading-text="Guardando..." autocomplete="off"> Actualizar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
                            
						        <button class="Cerrar btn btn-danger btn-lg" type="button"> Cerrar
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>

			<!--MODAL PARA ELEGIR PERIODO DE ESTADISTICAS-->
				<div class="modal fade" id="ModalEstadisticas" data-keyboard="false"  data-backdrop="static" role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="btnSalirModalRetirar close Cerrar" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Estadisticas</h3> 
					        </div>
							
					        <div class="modal-body">
					        	<div id="comboEstadisticas"></div>						       
			                </div>

					
					        <div class="modal-footer panel-footer">
						        <button id="btnGenerarEstadisticas" class="btn btn-primary btn-lg" type="button" value="show" data-loading-text="Generando..." autocomplete="off"> Generar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>
						        <button class="btnSalirModalEstadisticas Cerrar btn btn-danger btn-lg" type="button"> Salir
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>
			
			<!--MODAL ASIGNAR CANAIMA-->
				<div class="modal fade" id="ModalACanaima" data-keyboard="false"  data-backdrop="static" role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="btnSalirModalACanaima close" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Asignar Canaimita</h3> 
					        </div>
							
					        <div class="modal-body">
					        	<div id="comboACanaima"></div>						       
			                </div>

					
					        <div class="modal-footer panel-footer">
						        <button id="btnACanaima" class="btn btn-primary btn-lg" type="button" value="show" data-loading-text="Asignando..." autocomplete="off"> Asignar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputACanaima"> </label>
                        	    </button>
						        <button class="btnSalirModalACanaima btn btn-danger btn-lg" type="button"> Salir
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputACanaima"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>

			<!--MODAL CONSULTAR CANAIMA-->
				<div class="modal fade" id="ModalCCanaima" data-keyboard="false"  data-backdrop="static" role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="btnSalirModalACanaima close Cerrar" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Consulta de Canaimitas</h3> 
					        </div>
							
					        <div class="modal-body">
					        	<div id="CCanaima"></div>						       
			                </div>

					
					        <div class="modal-footer panel-footer">
						        <button id="btnMCanaima" class="btn btn-warning btn-lg" type="button" value="show" data-loading-text="Cargando..." autocomplete="off"> Modificar
                        	       <label for="Buscar" class="glyphicon glyphicon-pencil" rel="tooltip" title="inputACanaima"> </label>
                        	    </button>
                        	    <button id="btnDCanaima" class="btn btn-info btn-lg" type="button" value="show" data-loading-text="Inactivando..." autocomplete="off"> Desincorporar
                        	       <label for="Buscar" class="glyphicon glyphicon-trash" rel="tooltip" title="inputACanaima"> </label>
                        	    </button>
						        <button class="btnSalirModalCCanaima Cerrar btn btn-danger btn-lg" type="button"> Salir
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputACanaima"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>

			<!--MODAL modificar CANAIMA -->
				<div class="modal fade" id="ModalECanaima" data-keyboard="false"  data-backdrop="static" role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="CerrarMCanaima close" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Modificar Datos de Canaima</h3> 
					         </div>
					
					         <div class="modal-body">
						          
						          <form class="form-signin formulario" id="formMCanaima" >
			                         
			                         <input type="text" class="form-control input-lg" placeholder="Serial Canaima" name="serialCanaimaM" id="serialCanaimaM" title="Serial de la Canaima" required/>
			                         <input type="text" class="form-control input-lg" placeholder="Modelo Canaima" name="modeloCanaimaM" id="modeloCanaimaM" title="Modelo de la Canaima" required/>
			                        			
		                         </form>
			                 </div>
			
					        <div class="modal-footer panel-footer">
						        <button id="btnGuardarCanaimaM" class="btn btn-success btn-lg" type="button" value="show" data-loading-text="Guardando..." autocomplete="off"> Actualizar
                        	       <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>
                            
						        <button class="CerrarMCanaima btn btn-danger btn-lg" type="button"> Volver
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputActualizarAlumno"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>


			<!--MODAL CONSULTAR USUARIOS BLOQUEADOS-->
				<div class="modal fade" id="ModalCBloq" data-keyboard="false"  data-backdrop="static" role="dialog" aria-labelledby="#LabelModificar" aria-hidden="true">
				
				    <div class="modal-dialog">
					
					    <div class="modal-content panel panel-primary">
					        <div class="modal-header panel-heading">
						
						
						         <button type="button" class="btnSalirModalCBloq close Cerrar" aria-hidden="true"> &times;</button>
						
						         <h3 class="text-center">Usuarios Bloqueados</h3> 
					        </div>
							
					        <div class="modal-body">
					        	<div id="CBloq"></div>						       
			                </div>

					
					        <div class="modal-footer panel-footer">
						        <button id="btnDUs" class="btn btn-success btn-lg" type="button" value="show" data-loading-text="Cargando..." autocomplete="off"> Desbloquear
                        	       <label for="Buscar" class="glyphicon glyphicon-ok-circle" rel="tooltip" title="inputACanaima"> </label>
                        	    </button>
						        <button class="btnSalirModalCBloq Cerrar btn btn-danger btn-lg" type="button"> Salir
                        	       <label for="Buscar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputACanaima"> </label>
                        	    </button>
					        </div>
					
				       </div>
				
				    </div>
			    </div>

			</div>
					
		</div>

