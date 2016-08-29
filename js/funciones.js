 $(function() {
			 	
			 	$( "#datepicker" ).datepicker({
			 		changeMonth: true,
			 		changeYear: true
			 	});

			 	//CARGA MASIVA
				 	$('#cargaMasiva').click(function(){
				 		$('#ModalCargaMasiva').modal('show');
				 	})
			 	
				 //evento click en carga archivo
				 	$('#btnCargar').click(function(){
				 		$.ajax({
								beforeSend: function(){
									$('#btnCargar').button('loading');																																	
								},
								url:'libs/retraso.php',
								type:'get',
								success: function(respuesta){
									console.log(respuesta);
									alert("Datos Guardados Exitosamente");
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnCargar').button('reset');
								}
							})		
				 	})

				 //abrir plantilla para carga masiva
				 	$('#btnPlantilla').click(function(){
	 					window.open('libs/plantilla.csv', '_blank');
	 				})


			 	//EVENTOS PARA COLOCAR LAS LETRAS EN MAYUSCULAS AL DESENFOCAR LAS CAJAS DE TEXTO
			 		//EVENTO PARA MODAL REPRESANTES
			 			$('#nombreRep').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#apellidoRep').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 		//EVENTO PARA MODAL PADRES
			 			$('#nombrePadre').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#apellidoPadre').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#nombreMadre').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#apellidoMadre').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 		//EVENTO PARA MODAL ALUMNO
			 			$('#nombreAlumno').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#apellidoAlumno').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#ciudadNacimiento').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#estadoNacimiento').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#direccion').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#municipioNacimiento').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#enfermedades').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 		//EVENTO PARA MODAL DIRECTOR
			 			$('#nombreDirector').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#apellidoDirector').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 		//EVENTO PARA MODAL EDITAR ALUMNO
			 			$('#nombreAlumno2').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#apellidoAlumno2').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#ciudadNacimiento2').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#estadoNacimiento2').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#direccion2').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#municipio2').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})
			 			$('#enfermedad2').focusout(function(){
			 				$(this).val($(this).val().toUpperCase());
			 			})

				//FUNCIONES PARA HACER FOCUS EN LAS CAJAS DE TEXTO DE LAS VENTANAS MODALES
				 	$('#ModalAsociarRepresentante').on('shown.bs.modal', function () {
						$('#CIRepresentante').focus()
				    })
				    $('#ModalAsociarPadres').on('shown.bs.modal', function () {
						$('#CIMadre').focus()
				    })
					$('#ModalAgregarAlumno').on('shown.bs.modal', function () {
						$('#datepicker').focus()
				    })
				    
				//FUNCION PARA RESTABLECER A VALORES POR DEFECTO
					function restablecer () {
						$('#ModalAsociarRepresentante').modal('hide');
						$('#ModalAsociarPadres').modal('hide');
						$('#ModalAgregarAlumno').modal('hide');
						
						$('#ModalAgregarCanaima').modal('hide');
						$('#ModalModificarDirector').modal('hide');
						$('#ModalModificarInstitucion').modal('hide');
						$('#ModalModificarMinisterio').modal('hide');
						$('#ModalModificarPeriodo').modal('hide');
						$('#ModalRetirar').modal('hide');
						$('#ModalAscensos').modal('hide');
						$('#ModalModificarContraseña').modal('hide');
						$('#ModalModificarPregunta').modal('hide');
						$('#ModalEstadisticas').modal('hide');
						
						$('#resultadoBusqueda').hide();
						$('#ModalGCanaimita').modal('hide');
						$('#ModalCCanaima').modal('hide');
						$('#ModalECanaima').modal('hide');
						//FUNCION PARA RESTABLECER A VALOR INICIAL 
						
						$('.formulario input[type="text"]').val('');
						$('.formulario input[type="password"]').val('');
						$('.formulario select>option').removeAttr('selected');
						$('#checkboxCedulaEscolar').prop('checked','checked');
						$('.formulario input[type="text"]').attr('disabled',false);
						$('#cedulaAlumno').attr('disabled', true);
						$('#ContraseniaNueva').attr('disabled','disabled');
						$('#ContraseniaNuevaRep').attr('disabled','disabled');
						$('#Contrasenia').removeAttr('disabled');
						$('#PreguntaSeguridadNva').attr('disabled','disabled');
						$('#RespuestaSeguridadNva').attr('disabled','disabled');
						$('#ContraseniaValidarPreg').removeAttr('disabled');
						$('#resultadoBusquedaCanaima').html('');
						
						RepEmpresa = 0;
						padreRep   = 0;
						madreRep   = 0;
						existePad  = 0;
						existeMad  = 0;
						existeRep  = 0;
						padAux     = 0;
						madAux     = 0;
						docGenerado = 0;
						
					}

				//FUNCION PARA CERRAR LAS VENTANAS MODALES
				    $('.Cerrar').click(function(){
				    	
				    	restablecer();
					});
				
				//FUNCION PARA CHECKBOX Y CEDULA ESCOLAR
				    $("#checkboxCedulaEscolar").click(function(){
				    	var TBCedula=$("#cedulaAlumno").attr('disabled');
				    	if(TBCedula == 'disabled'){
				    		$("#cedulaAlumno").removeAttr('disabled');
				    		$('#cedulaAlumno').val('');
				    	} else {
				    		if($('#datepicker').val()==''){
				    			alert("ALERTA: Seleccione una fecha valida");
				    			$('#checkboxCedulaEscolar').attr('checked',false);
				    		} else {
				    			$("#cedulaAlumno").attr('disabled',true);
				    			generarCedulaEscolar();

				    		}
				    		

				    	}
					//cuando uso el removeAttr el atributo disabled queda como undefined ;)
					});

				//FUNCION PARA BUSCAR UNA CEDULA ASOCIADA A UN ALUMNO
					$('.formBusqueda').submit(function(e){
						e.preventDefault(); 
						var envio = $('#busqueda').val()
						var status;
						if ($('#checkboxPreInscrito').prop('checked') == true) {
							status = 1;
						} else{
							status = 2;
						}

						$.ajax({
							beforeSend: function(){
								$('#on').button('loading');
								$('#busqueda').attr('disabled',true);
								$('#resultadoBusqueda').hide();
								idRadioButton = undefined;
								
							},
							url: 'libs/buscar.php',
							type: 'POST',
							data: {"busqueda":envio,"status":status},
							success: function(resp){
								if(resp!=""){
									$('#resultadoBusqueda').show();
									$('#resultadoBusqueda').html(resp);
								}
							},
							error: function(jqXHR,estado,error){
								console.log(estado);
								console.log(error);
							},
							//esta accion la realiza siempre, sin importar si la consulta dio success o error
							complete: function(jqXHR,estado){
								$('#busqueda').attr('disabled',false);
								$('#busqueda').val('');
								$('#on').button('reset')//.noConflict();
							}
							//timeout: 10000
						});
					});

				//FUNCION PARA BUSCAR LA CEDULA DE UN REPRESENTANTE DE LA EMPRESA
					$('#CIRepresentante').keyup(function(e){
						e.preventDefault();
						var envio = $('#CIRepresentante').val();
						if (envio!='') {
							$.ajax({
								beforeSend: function(){
									$('#resultadoBusquedaRep').html('Buscando..');
									$('#apellidoRep').val('');
									$('#nombreRep').val('');
									existeRep = 0;
									
								},
								url:'libs/buscarRepresentante.php',
								data:{"CIRepresentante":envio},
								type:'post',
								success: function(resp){
									if(resp!=""){
										
										//coloco los datos en las cajas de texto
										var obj         = $.parseJSON(resp);
										
										$('#nombreRep').val(obj.nombre);
										$('#apellidoRep').val(obj.apellido);
										$('#nombreRep').attr('disabled',true);
										$('#apellidoRep').attr('disabled',true);
										$('#resultadoBusquedaRep').html('');
										existeRep = 1;

										
									} else {
										$('#resultadoBusquedaRep').html('Cédula de Representante no encontrada, Ingrese los Datos..');
										$('#nombreRep').val('');
										$('#apellidoRep').val('');
										$('#nombreRep').attr('disabled',false);
										$('#apellidoRep').attr('disabled',false);
									}
									

								},
								error: function(jqXHR,estado,error){
									alert(error);
									
								},
								complete: function(jqXHR,estado){
									
								}

							})
						} else {
							$('#nombreRep').val('');
							$('#apellidoRep').val('');
							$('#nombreRep').attr('disabled',false);
							$('#apellidoRep').attr('disabled',false);
							$('#resultadoBusquedaRep').html('');
							$('.formulario select>option').removeAttr('selected');

						}

					});

				//VARIABLES GLOBALES PARA IDENTIFICAR CUANDO UN REPRESENTANTE PERTENECE A LA EMPRESA
					var repEmpresa = 0;
					var padreRep   = 0;
					var madreRep   = 0;
					var existePad  = 0;
					var existeMad  = 0;
					var existeRep  = 0; 
					var padAux     = 0;
					var madAux     = 0;
				
				//ACCION DE BOTON SIGUIENTE PARA ABRIR MODAL DE PADRES
					$('#btnSigRep').click(function(){
						if(($('.formulario input[type="text"]').val()=='')||($('#comboParentesco').val()=="Parentesco"))  {
							alert("ALERTA: Debe llenar todos los campos");
							
						} else {

							$('#ModalAsociarPadres').modal('show');
							if ($('#comboParentesco').val()=='Padre') {
								$('#CIPadre').val($('#CIRepresentante').val());
								$('#CIPadre').attr('disabled',true);
								$('#nombrePadre').val($('#nombreRep').val());
								$('#nombrePadre').attr('disabled',true);
								$('#apellidoPadre').val($('#apellidoRep').val());
								$('#apellidoPadre').attr('disabled',true);
								padreRep = 1;
								if($('#nombreRep').attr('disabled')== "disabled"){
									padAux = 1;
								}


							} else if ($('#comboParentesco').val()=='Madre') {
								$('#CIMadre').val($('#CIRepresentante').val());
								$('#CIMadre').attr('disabled',true);
								$('#nombreMadre').val($('#nombreRep').val());
								$('#nombreMadre').attr('disabled',true);
								$('#apellidoMadre').val($('#apellidoRep').val());
								$('#apellidoMadre').attr('disabled',true);
								madreRep = 1;
								if ($('#nombreRep').attr('disabled')=="disabled") {
									madAux = 1;
								}

							} 

						}
					})

				//ACCION PARA BUSCAR MADRE EN BASE DE DATOS
					$('#CIMadre').keyup(function(e){
						e.preventDefault();
						var envioMad = $('#CIMadre').val();
						if (envioMad!='') {
							$.ajax({
								beforeSend: function(){
									$('#resultadoBusquedaMad').html('Buscando..');
									$('#apellidoMadre').val('');
									$('#nombreMadre').val('');
									
								},
								url:'libs/buscarMadre.php',
								data:{"CIMadre":envioMad},
								type:'post',
								success: function(respMad){
									if(respMad!=""){
										
										//coloco los datos en las cajas de texto
										var objMad = $.parseJSON(respMad);
										
										$('#nombreMadre').val(objMad.nombre);
										$('#apellidoMadre').val(objMad.apellido);
										$('#nombreMadre').attr('disabled',true);
										$('#apellidoMadre').attr('disabled',true);
										$('#resultadoBusquedaMad').html('');
										

										
									} else {
										$('#resultadoBusquedaMad').html('Cédula de Representante no encontrada, Ingrese los Datos..');
										$('#nombreMadre').attr('disabled',false);
										$('#apellidoMadre').attr('disabled',false);
										$('#nombreMadre').val('');
										$('#apellidoMadre').val('');
										
									}
									

								},
								error: function(jqXHR,estado,error){
									alert(error);
									
								},
								complete: function(jqXHR,estado){
									
								}

							})
						} else {
							$('#nombreMadre').val('');
							$('#apellidoMadre').val('');
							$('#nombreMadre').attr('disabled',false);
							$('#apellidoMadre').attr('disabled',false);
							$('#resultadoBusquedaMad').html('');
						}
					})

				//ACCION PARA BUSCAR A UN PADRE EN LA BD

					$('#CIPadre').keyup(function(e){
						e.preventDefault();
						var envioPad = $('#CIPadre').val();
						if (envioPad!='') {
							$.ajax({
								beforeSend: function(){
									$('#resultadoBusquedaPad').html('Buscando..');
									$('#apellidoPadre').val('');
									$('#nombrePadre').val('');
									
								},
								url:'libs/buscarPadre.php',
								data:{"CIPadre":envioPad},
								type:'post',
								success: function(respPad){
									if(respPad!=""){
										
										//coloco los datos en las cajas de texto
										var objPad = $.parseJSON(respPad);
										
										$('#nombrePadre').val(objPad.nombre);
										$('#apellidoPadre').val(objPad.apellido);
										$('#nombrePadre').attr('disabled',true);
										$('#apellidoPadre').attr('disabled',true);
										$('#resultadoBusquedaPad').html('');
										

										
									} else {
										$('#resultadoBusquedaPad').html('Cédula de Representante no encontrada, Ingrese los Datos..');
										$('#nombrePadre').attr('disabled',false);
										$('#apellidoPadre').attr('disabled',false);
										$('#nombrePadre').val('');
										$('#apellidoPadre').val('');
									
									}
									

								},
								error: function(jqXHR,estado,error){
									alert(error);
									
								},
								complete: function(jqXHR,estado){
									
								}

							})
						} else {
							$('#nombrePadre').val('');
							$('#apellidoPadre').val('');
							$('#nombrePadre').attr('disabled',false);
							$('#apellidoPadre').attr('disabled',false);
							$('#resultadoBusquedaPad').html('');
						}
					})
				
				//ACCION DEL BOTON SIGUIENTE PARA IR HACIA EL MODAL DE AGREGAR DATOS DE ALUMNO
					$('#btnSigPad').click(function(){

						if (($('#CIMadre').val() != $('#CIPadre').val())||($('#CIMadre').val()=='' && $('#CIPadre').val()=='')) {
							$('#ModalAgregarAlumno').modal('show');
							if (madAux == 1) {
								existeMad = 1;
							} else if ((madAux == 0)&&($('#nombreMadre').attr('disabled') == "disabled")&&($('#CIMadre').attr('disabled') == undefined)){
								existeMad = 1;
							}
							if (padAux == 1){
								existePad = 1;								
							} else if ((padAux == 0)&&($('#nombrePadre').attr('disabled') == "disabled")&&($('#CIPadre').attr('disabled') == undefined)) {
								existePad = 1;
							}
						} else {
							alert("¡Inserte datos Correctos!");
						}
					})

				//FUNCION PARA MANEJAR EVENTO DE CAMBIO DE VALOR EN EL INPUT DATEPICKER
					$('#datepicker').change(function(e){
						e.preventDefault();
						generarCedulaEscolar();

					})

				//FUNCION PARA GENERAR CEDULA ESCOLAR
					function generarCedulaEscolar(){
						//alert($('#checkboxCedulaEscolar').attr('checked'));
						if ($('#datepicker').val()== '' ){
							
							$('#cedulaAlumno').val('');
							//$('#cedulaAlumno').attr('disabled',true);
							//$('#checkboxCedulaEscolar').prop('checked','checked');

						} else if($('#checkboxCedulaEscolar').prop('checked') == true) {

							$('#cedulaAlumno').attr('disabled',true);
							$('#checkboxCedulaEscolar').prop('checked','checked');

							var fecha = $('#datepicker').val();
							var fechaStr = fecha.toString();
							var anioStr = fechaStr.charAt(2) + fechaStr.charAt(3);
							var largoStr;
							var cedulaEscolarStr;
							var cedulaEscolar;

							
							//SE VERIFICA LA CEDULA QUE IRA ASOCIADA A LA C.E. DEL ALUMNO
							if ($('#CIMadre').val()!=''){
								var cedula = $('#CIMadre').val();
							} else if ($('#CIPadre').val()!='') {
								var cedula = $('#CIPadre').val();
							} else if ($('#CIRepresentante').val()!='') {
								var cedula = $('#CIRepresentante').val();
							}

							var cedulaStr = cedula.toString();
							largoStr = cedulaStr.length;

							//SE VERIFICA SI LA CEDULA DEL REPRESENTANTE ES DE 7 DIGITOS
							if (largoStr == 7){
								var cedulaStr = "0" + cedulaStr;
							}
							
							//SE CREA Y VERIFICA QUE LA CEDULA OBTENIDA ES UNICA
							
							var aux          = "1";
							//SE ARMAN LAS CADENAS DE TEXTO SEGUN EL FORMATO DE LA C.E
							cedulaEscolarStr = aux + anioStr + cedulaStr;
							//SE CONVIERTE LA C.E. OBTENIDA A FORMATO NUMERICO
							cedulaEscolar    = parseInt(cedulaEscolarStr);

							//SE REALIZA LA BUSQUEDA EN LA BD PARA SABER SI EXISTE UNA C.E IGUAL
							$.ajax({
								
								beforeSend: function(){
									$('#cedulaAlumno').val('Generando Cedula Escolar...');
																						
								},
								url:'libs/buscarCE.php?cedulaEscolar='+cedulaEscolar,
								//data:{"CE":cedulaEscolar},
								type:'get',
								success: function(respCE){
									respCE = $.trim(respCE);
									console.log(respCE);
									if(respCE == 0){
										
										$('#cedulaAlumno').val('');	
										$('#cedulaAlumno').val(cedulaEscolar);	
										

									} else {
										aux              = "2";
										cedulaEscolarStr = aux + anioStr + cedulaStr;
										cedulaEscolar    = parseInt(cedulaEscolarStr);
										$('#cedulaAlumno').val('');	
										$('#cedulaAlumno').val(cedulaEscolar);

									}			

								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								}
							})

						}
					}

				//SE MANEJA EL EVENTO CLICK DEL BOTON GUARDAR ALUMNO
					$('#btnGuardarAlum').click(function(){
						// en el if en vez de intentar generalizar los inputs debo colocar especificamnt cada uno
						if (($('#formAlum input').val()=='')||($('#comboAlLiteral').val()=="Literal")||($('#comboAlSex').val()=="Sexo")||($('#comboAlGrado').val()=="Grado")||($('#datepicker').val()=="")||($('#cedulaAlumno').val()=="")||($('#nombreAlumno').val()=="")||($('#apellidoAlumno').val()=="")||($('#ciudadNacimiento').val()=="")||($('#estadoNacimiento').val()=="")||($('#municipioNacimiento').val()=="")||($('#direccion').val()=="")||($('#enfermedades').val()=="")||($('#comboStatus').val()=="Status")) {

							alert('ALERTA: Debes llenar todos los Campos');

						} else {

							$('.formulario input[type="text"]').attr('disabled',false);
							var cedEsc    = $('#cedulaAlumno').val();
							var nacim     = $('#datepicker').val();
							var datosAlum = $('#formAlum').serialize();
							var datosPad  = $('#formPad').serialize();
							var datosRep  = $('#formRepresentante').serialize();
							var CedulaMadre = $('#CIMadre').val();
							var CedulaRep = $('#CIRepresentante').val();
							

							$.ajax({
								
								beforeSend: function(){
									$('#btnGuardarAlum').button('loading');
									//$('.formulario input[type="text"]').attr('disabled',false);
									//$('select').attr('disabled', true);
									console.log(existePad);
									console.log(existeMad);
																																						
								},
								url:'libs/guardarAlumno.php?datosAlum='+datosAlum+'&datosPad='+datosPad+'&datosRep='+datosRep+'&cedEsc='+cedEsc+'&nacim='+nacim+'&padreRep='+padreRep+'&madreRep='+madreRep+'&existePad='+existePad+'&existeMad='+existeMad+'&existeRep='+existeRep+'&CedulaMadre='+CedulaMadre+'&CedulaRep='+CedulaRep,
								type:'get',
								success: function(respuesta){
									console.log(respuesta);
									alert("Datos Guardados Exitosamente");
									
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnGuardarAlum').button('reset');
									restablecer();
								}
							})

						}
						

						
					})

				//SE MANEJA EL ENVENTO CLICK DEL RADIO BUTTON

					var idRadioButton;

					$('#resultadoBusqueda').on('click','.seleccion',function(){
						idRadioButton = $('input[name=selec]:checked').attr('id');
					})
					
				//SE CAPTURA EL CLICK EN EDITAR DATOS DE ALUMNO
					$('#resultadoBusqueda').on('click', '#btnEditarAl', function(){
						
						if( idRadioButton != undefined){
							console.log(idRadioButton);
							
							//$('#ModalEditarAlumno').modal('show');
							//SE USARA AJAX PARA CARGAR LA INFORMACION RESPECTIVA DEL ALUMNO EN EL MODAL EDITAR
							$.ajax({
								
								beforeSend: function(){
									$('#btnEditarAl').button('loading');
																																						
								},
								url:'libs/buscarEditar.php?idRadioButton='+idRadioButton,
								type:'get',
								success: function(respuesta){
									//console.log(respuesta);
									//RELLENO LOS CAMPOS
									//coloco los datos en las cajas de texto
									var objResp = $.parseJSON(respuesta);
									
									$('#cedulaAlumno2').val(objResp.cedula);
									$('#nombreAlumno2').val(objResp.nombre);
									$('#apellidoAlumno2').val(objResp.apellido);
									$('#ciudadNacimiento2').val(objResp.ciudad);
									$('#estadoNacimiento2').val(objResp.estado);
									$('#comboAlGrado2').val(objResp.grado);
									$('#comboComportamiento').val(objResp.comportamiento);
									$('#municipio2').val(objResp.municipio);
									$('#direccion2').val(objResp.direccion);
									$('#enfermedad2').val(objResp.enfermedad);
									$('#comboAlLiteral2').val(objResp.literal);

									//ABRO EL MODAL
									$('#ModalEditarAlumno').modal('show');
									
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnEditarAl').button('reset');
									//restablecer();
								}
							})

						}else{
							alert("¡Debe seleccionar un alumno!");	
						}
					})
				
				//SE CAPTURA EL CLICK EN SALIR DEL MODAL EDITAR ALUMNO
					$('.btnSalirEditarAl').click(function(){
						$('#ModalEditarAlumno').modal('hide');
					})

				//SE CAPTURA EL EVENTO CLICK AL BOTON ACTUALIZAR DATOS DE ALUMNO
					$('#btnActualizarAlum').click(function(){
						if (($('#formEditAlum input').val()=='')||($('#comboAlLiteral2').val()=="Literal")||($('#comboComportamiento').val()=="Comportamiento")||($('#comboAlGrado2').val()=="Grado")||($('#cedulaAlumno2').val()=="")||($('#nombreAlumno2').val()=="")||($('#apellidoAlumno2').val()=="")||($('#ciudadNacimiento2').val()=="")||($('#estadoNacimiento2').val()=="")) {

							alert('ALERTA: Debes llenar todos los Campos');

						} else {

							var datosAlum = $('#formEditAlum').serialize();
							var cedula    = $('#cedulaAlumno2').val();
							
							$.ajax({
								
								beforeSend: function(){
									$('#btnActualizarAlum').button('loading');
									console.log(datosAlum);
																																						
								},
								url:'libs/actualizarAlumno.php?datosAlum='+datosAlum+'&idRadioButton='+idRadioButton+'&cedula='+cedula,
								type:'get',
								success: function(respuesta){
									console.log(respuesta);
									alert("Datos Actualizados Exitosamente");
									
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnActualizarAlum').button('reset');
									//restablecer();
									$('#ModalEditarAlumno').modal('hide');
								}
							})

						}
					})
				
				//CLICK EN GENERAR DOCUMENTOS
					$('#resultadoBusqueda').on('click', '#btnGenerarDoc', function(){
						
						if( idRadioButton != undefined){
							console.log(idRadioButton);
							$('#ModalGenerarDoc').modal('show');
						    
						}else{
							alert("¡Debe seleccionar un alumno!");	
						}
					})

				//CLICK EN SALIR DEL MODAL GENERAR DOC
					$('.btnSalirModalGenerar').click(function(){
						$('#ModalGenerarDoc').modal('hide');
						$('select>option').removeAttr('selected');
					})

				//CLICK EN GENERAR
					$('#btnGenerar').click(function(){
						if ($('#comboDoc').val()=="documento") {
							alert("¡Seleccione un Documento a Generar!");
						} else {
							var doc;
							if ($('#comboDoc').val()=="Constancia de Estudio") {
								doc = $('#comboDoc').val();
								$.ajax({
									beforeSend: function(){
										$('#btnGenerar').button('loading');
									},
									url: 'libs/actNumDoc.php',
									type: 'post',
									data: {'doc':doc},
									success: function(resp){
										console.log(resp)
									},
									complete: function(){
										$('#btnGenerar').button('reset');
										url = 'libs/ConstanciaEstudio.php?idRadioButton='+idRadioButton;
										window.open(url, '_blank');
									}
								})								
								
							} else if ($('#comboDoc').val()=="Constancia de Comportamiento") {
								doc = $('#comboDoc').val();
								$.ajax({
									beforeSend: function(){
										$('#btnGenerar').button('loading');
									},
									url: 'libs/actNumDoc.php',
									type: 'post',
									data: {'doc':doc},
									success: function(resp){
										console.log(resp)
									},
									complete: function(){
										$('#btnGenerar').button('reset');
										url = 'libs/ConstanciaComportamiento.php?idRadioButton='+idRadioButton;
										window.open(url, '_blank');
									}
								})
						
							} else if ($('#comboDoc').val()=="Constancia de Inscripcion") {
								doc = $('#comboDoc').val();
								$.ajax({
									beforeSend: function(){
										$('#btnGenerar').button('loading');
									},
									url: 'libs/actNumDoc.php',
									type: 'post',
									data: {'doc':doc},
									success: function(resp){
										console.log(resp)
									},
									complete: function(){
										$('#btnGenerar').button('reset');
										url = 'libs/ConstanciaInscripcion.php?idRadioButton='+idRadioButton;
										window.open(url, '_blank');
									}
								})
								
							} else if ($('#comboDoc').val()=="Constancia de Promocion") {
								doc = $('#comboDoc').val();
								$.ajax({
									beforeSend: function(){
										$('#btnGenerar').button('loading');
									},
									url: 'libs/actNumDoc.php',
									type: 'post',
									data: {'doc':doc},
									success: function(resp){
										console.log(resp)
									},
									complete: function(){
										$('#btnGenerar').button('reset');
										url = 'libs/constanciaPromocion.php?idRadioButton='+idRadioButton;
										window.open(url, '_blank');
									}
								})

							} else if ($('#comboDoc').val()=="Constancia de Entrega de Canaima") {
								doc = $('#comboDoc').val();
								$.ajax({
									beforeSend: function(){
										$('#btnGenerar').button('loading');
									},
									url: 'libs/actNumDoc.php',
									type: 'post',
									data: {'doc':doc},
									success: function(resp){
										console.log(resp)
									},
									complete: function(){
										$('#btnGenerar').button('reset');
										url = 'libs/constanciaCanaima.php?idRadioButton='+idRadioButton;
										window.open(url, '_blank');
									}
								})

							} else if ($('#comboDoc').val()=="Constancia de Robo de Canaima") {
								doc = $('#comboDoc').val();
								$.ajax({
									beforeSend: function(){
										$('#btnGenerar').button('loading');
									},
									url: 'libs/actNumDoc.php',
									type: 'post',
									data: {'doc':doc},
									success: function(resp){
										console.log(resp)
									},
									complete: function(){
										$('#btnGenerar').button('reset');
										url = 'libs/constanciaRoboCanaima.php?idRadioButton='+idRadioButton;
										window.open(url, '_blank');
									}
								})
								
							}
						}
					})

				//CLICK EN LINK MODIFICAR DIRECTOR
					var cedulaDirec;
					$('#abrirModalDirector').click(function(){
						$.ajax({
								beforeSend: function(){
									//restablecer();
								},
								url:'libs/buscarDirector.php?',
								success: function(respuesta){
									//console.log(respuesta);
									//se recibe un objeto json y se carga en las cajas de texto
									var objResp = $.parseJSON(respuesta);
								
									$('#cedulaDirector').val(objResp.cedula);
									$('#nombreDirector').val(objResp.nombre);
									$('#apellidoDirector').val(objResp.apellido);
									$('#ModalModificarDirector').modal('show');
									cedulaDirec = $('#cedulaDirector').val();
																	
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								}
									
						})
					})

				//CLICK EN ACTUALIZAR DATOS DIRECTOR
					
					$('#btnActualizarDirector').click(function(){
						if (($('#cedulaDirector').val()=="")||($('#nombreDirector').val()=="")||($('#apellidoDirector').val()=="")) {

							alert('ALERTA: Debes llenar todos los Campos');

						} else {

							var datosDirec = $('#formDirector').serialize();
							var cedulaDirectorNva = $('#cedulaDirector').val();							
							$.ajax({
								
								beforeSend: function(){
									$('#btnActualizarDirector').button('loading');
																																													
								},
								url:'libs/actualizarDirector.php?datosDirec='+datosDirec+'&cedulaDirec='+cedulaDirec+'&cedulaDirectorNva='+cedulaDirectorNva,
								type:'get',
								success: function(respuesta){
									console.log(respuesta);
									alert("Datos Guardados Exitosamente");
									
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnActualizarDirector').button('reset');
									restablecer();
								}
							})

						}
					})

				//CLICK EN LINK MODIFICAR INSTITUCION
					var idIns;
					$('#abrirModalInstitucion').click(function(){
						$.ajax({
								beforeSend: function(){
									//restablecer();
								},
								url:'libs/buscarInstitucion.php',
								success: function(respuesta){
									//console.log(respuesta);
									//se recibe un objeto json y se carga en las cajas de texto
									var objResp = $.parseJSON(respuesta);
									$('#codigoInstitucion').val(objResp.idIns);
									$('#nombreInstitucion').val(objResp.nombreIns);
									$('#direccionInstitucion').val(objResp.direccionIns);
									$('#telefonoInstitucion').val(objResp.telefonoIns);
									$('#telefonoInstitucionAlternativo').val(objResp.telefonoAlt);
									$('#ModalModificarInstitucion').modal('show');
									idIns = objResp.idIns;
																	
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								}
									
						})
					})

				//CLICK EN ACTUALIZAR
					$('#btnActualizarInstitucion').click(function(){
						if (($('#nombreInstitucion').val()=="")||($('#direccionInstitucion').val()=="")||($('#telefonoInstitucion').val()=="")||($('#telefonoAlternativo').val()=="")) {

							alert('ALERTA: Debes llenar todos los Campos');

						} else {

							var datosIns = $('#formInstitucion').serialize();
							var codigo = $('#codigoInstitucion').val();							
							$.ajax({
								
								beforeSend: function(){
									$('#btnActualizarInstitucion').button('loading');
																																													
								},
								url:'libs/actualizarInstitucion.php?datosIns='+datosIns+'&idIns='+idIns+'&codigo='+codigo,
								type:'get',
								success: function(respuesta){
									//console.log(respuesta);
									alert("Datos Guardados Exitosamente");
									
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnActualizarInstitucion').button('reset');
									restablecer();
								}
							})

						}
					})

				//CLICK LINK MODIFICAR MINISTERIO
					var idMin;
					$('#abrirModalMinisterio').click(function(){
						$.ajax({
								beforeSend: function(){
									//restablecer();
								},
								url:'libs/buscarMinisterio.php?',
								success: function(respuesta){
									//console.log(respuesta);
									//se recibe un objeto json y se carga en las cajas de texto
									var objResp = $.parseJSON(respuesta);
								
									$('#nombreMinisterio').val(objResp.nombreMin);
									$('#ModalModificarMinisterio').modal('show');
									idMin = objResp.idMin;
																	
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								}
									
						})
					})

				//CLICK EN ACTUALIZAR MINISTERIO
					$('#btnActualizarMinisterio').click(function(){
						if ($('#nombreMinisterio').val()=="") {

							alert('ALERTA: Debes llenar todos los Campos');

						} else {

							var nombreMin = $('#nombreMinisterio').val();
														
							$.ajax({
								
								beforeSend: function(){
									$('#btnActualizarMinisterio').button('loading');
																																													
								},
								url:'libs/actualizarMinisterio.php?nombreMin='+nombreMin+'&idMin='+idMin,
								type:'get',
								success: function(respuesta){
									console.log(respuesta);
									alert("Datos Guardados Exitosamente");
									
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnActualizarMinisterio').button('reset');
									restablecer();
								}
							})

						}
					})

				//CLICK EN LINK MODIFICAR PERIODO
					var idPer;
					$('#abrirModalPeriodoE').click(function(){
						$.ajax({
								beforeSend: function(){
									//restablecer();
									$('#ModalModificarPeriodo').modal('show');
									$('#per').html('Cargando Datos del Periodo Escolar Vigente...');
								},
								url:'libs/buscarPeriodo.php',
								success: function(respuesta){
									$('#per').html(respuesta);
									if (respuesta == "No existe ningun periodo guardado") {
										$('#btnActualizarPeriodo').attr('disabled','true');
									} else {
										$('#btnActualizarPeriodo').removeAttr('disabled');
									}
									
																	
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								}
									
						})
					})
					
				//CLICK EN INSERTAR PERIODO
					$('#abrirModalPeriodoA').click(function(){
						$('#ModalIniciarPeriodo').modal('show');
					})
				
 				//CLICK EN GUARDAR PERIODO
 					$('#btnIniciarPeriodo').click(function(e){
						if ($('#periodoEscolar').val()=="") {

							alert('ALERTA: Debes llenar todos los Campos');

						} else {
							if (confirm('Recuerde que antes de iniciar un nuevo periodo debe haber configurado las promociones de grado y que se borraran los datos de retiros y pre-inscritos, se recomienda antes generar reportes de los mismos') == true) {
								e.preventDefault();
								var descripcionPeriodo = $('#periodoEscolar').val();
															
								$.ajax({
									
									beforeSend: function(){
										$('#btnIniciarPeriodo').button('loading');
																																													
									},
									url:'libs/guardarPeriodo.php?descripcionPeriodo='+descripcionPeriodo,//+'&idPer='+idPer,
									type:'get',
									success: function(respuesta){
										//console.log(respuesta);
										alert("Periodo Iniciado Exitosamente");
										
									},
									error: function(jqXHR,estado,error){
										console.log(error);
										console.log(estado);
										
									},
									complete: function(jqXHR,estado){
										//reseteo el boton
										$('#btnIniciarPeriodo').button('reset');
										$('#ModalIniciarPeriodo').modal('hide');
										$('#periodoEscolar').val('');
									}
								})
							}
						}
					})

				//CLICK EN ACTUALIZAR PERIODO ESCOLAR	
					$('#btnActualizarPeriodo').click(function(e){
						if ($('#periodoEscolarM').val()=="") {

							alert('ALERTA: Debes llenar todos los Campos');

						} else {
							e.preventDefault();
							var descripcionPeriodo = $('#periodoEscolarM').val();
														
							$.ajax({
								
								beforeSend: function(){
									$('#btnActualizarPeriodo').button('loading');
																																												
								},
								url:'libs/actualizarPeriodo.php?descripcionPeriodo='+descripcionPeriodo+'&idPer='+idPer,
								type:'get',
								success: function(respuesta){
									//console.log(respuesta);
									alert("Datos Actualizados Exitosamente");
									
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnActualizarPeriodo').button('reset');
									restablecer();
								}
							})

						}
					})
		    	
		    	//CLICK EN AGREGAR A ALUMNO REGULAR
			    	$('#resultadoBusqueda').on('click', '#btnInscribir', function(){
							
							if( idRadioButton != undefined){
								console.log(idRadioButton);
								
							    //SE USARA AJAX PARA ACT EL STATUS DEL ALUMNO A REGULAR
								$.ajax({
									
									beforeSend: function(){
										$('#btnInscribir').button('loading');
																																							
									},
									url:'libs/actualizarStatus.php?idRadioButton='+idRadioButton,
									type:'get',
									success: function(respuesta){
										console.log(respuesta);
										//RELLENO LOS CAMPOS
										alert("¡Status de alumno Cambiado!");
										
									},
									error: function(jqXHR,estado,error){
										console.log(error);
										console.log(estado);
										
									},
									complete: function(jqXHR,estado){
										//reseteo el boton
										$('#btnInscribir').button('reset');
										$('#resultadoBusqueda').hide();
										
									}
								})

							}else{
								alert("¡Debe seleccionar un alumno!");	
							}
					})

				//CLICK EN GENERAR CARTA DE ACEPTACION
					$('#resultadoBusqueda').on('click', '#btnGenerarAcept', function(){
							
						if( idRadioButton != undefined){
							var doc = "Carta de Aceptacion";
							$.ajax({
								beforeSend: function(){
									$('#btnGenerar').button('loading');
								},
								url: 'libs/actNumDoc.php',
								type: 'post',
								data: {'doc':doc},
								success: function(resp){
									console.log(resp)
								},
								complete: function(){
									$('#btnGenerar').button('reset');
									url = 'libs/CartaAceptacion.php?idRadioButton='+idRadioButton;
									window.open(url, '_blank');
								}
							})			
							
						}else{
							alert("¡Debe seleccionar un alumno!");	
						}
					})

				//CLICK EN ELIMINAR
					$('#resultadoBusqueda').on('click', '#btnEliminar', function(){
							
						if( idRadioButton != undefined){
							var msg = confirm("¿Esta seguro que desea eliminar esta Pre-Inscripcion?"); 
							if (msg==true) {
							 //SE USARA AJAX PARA ELIMINAR ALUMNO
								$.ajax({
									
									beforeSend: function(){
										$('#btnEliminar').button('loading');
																																							
									},
									url:'libs/eliminarPreInscrito.php?idRadioButton='+idRadioButton,
									type:'get',
									success: function(respuesta){
										console.log(respuesta);
										//RELLENO LOS CAMPOS
										alert("¡Pre-Inscripcion Eliminada!");
										
									},
									error: function(jqXHR,estado,error){
										console.log(error);
										console.log(estado);
										
									},
									complete: function(jqXHR,estado){
										//reseteo el boton
										$('#btnEliminar').button('reset');
										$('#resultadoBusqueda').hide();
										
									}
								})
							} 
						}else{
							alert("¡Debe seleccionar un alumno!");	
						}
					})
				
				///CLICK EN RETIRAR PARA ABRIR MODAL
					$('#resultadoBusqueda').on('click', '#btnRetirar', function(){
							
						if( idRadioButton != undefined){
							$('#ModalRetirar').modal('show'); 

						}else{
							alert("¡Debe seleccionar un alumno!");	
						}
					})
				
				//CLICK EN SALIR DEL MODAL RETIRAR
					$('.btnSalirModalRetirar').click(function(){
						$('#ModalRetirar').modal('hide');
						$('select>option').removeAttr('selected');
					})	

				//CLICK EN BOTON PARA CONFIRMAR RETIRO
					var docGenerado = 0;
					$('#btnHacerRetiro').click(function(){
						if ($('#comboMotivoRetiro').val() == "motivo") {
							alert("¡Debe seleccionar un motivo de Retiro!");
						} else {
							var Alerta = confirm("¿Esta seguro de hacer el Retiro?");
							if (Alerta == true) {
								var doc = "Constancia de Retiro";
								var doc2 = "Constancia de Comportamiento";
								$('#comboMotivoRetiro').attr('disabled','disabled');
								var motivo = $('#comboMotivoRetiro').val();
								$.ajax({
										
										beforeSend: function(){
											$('#btnHacerRetiro').button('loading');																																								
										},
										url:'libs/retirarAlumno.php',
										type:'post',
										data: {'idRadioButton':idRadioButton,'motivo':motivo},
										success: function(respuesta){
											console.log(respuesta);
											//RELLENO LOS CAMPOS
											if (respuesta== "exito") {
												alert("¡Alumno Retirado con Exito!");
												url = 'libs/constanciaRetiro.php?idRadioButton='+idRadioButton+'&motivo='+motivo;
												window.open(url, '_blank');
												url = 'libs/ConstanciaComportamiento.php?idRadioButton='+idRadioButton;
												window.open(url, '_blank');
											}else{
												alert("¡No se pudo retirar el Alumno!");
											}
											
											
										},
										error: function(jqXHR,estado,error){
											console.log(error);
											console.log(estado);
											
										},
										complete: function(jqXHR,estado){
											//reseteo el boton
											$('#btnHacerRetiro').button('reset');
											restablecer();
											$('#comboMotivoRetiro').removeAttr('disabled');
											$.ajax({
												url: 'libs/actNumDocRet.php',
												type: 'post',
												data: {'doc':doc,'doc2':doc2},
												success: function(resp){
													console.log(resp)
												}
											})			
										}
									})
							}
						}
					})
		    	
		    	//CLICK EN ASCENSOS DE GRADO
		    		$('#abrirModalAscensos').click(function(){
		    			$.ajax({
		    				beforeSend: function(){
		    					$('#alumnosParaAscensos').hide();
		    					$('#espera').show();
		    					$('#espera').html('<h2 class="text-center">Cargando Datos de Alumnos...</h2>');
		    					$('#ModalAscensos').modal('show');
		    				},
		    				url: 'libs/cargarAlumnos.php',
		    				type: 'get',
		    				success: function(respuesta){
		    					$('#espera').html('');
		    					$('#espera').hide();
		    					$('#alumnosParaAscensos').show();
		    					$('#alumnosParaAscensos').html(respuesta);
		    					//$('#ModalAscensos').focus();
		    					//console.log(respuesta);

		    				},
		    				error: function(jqXHR, estado, error){
		    					console.log(error);
		    					console.log(estado);
		    				}
		    			})
		    		})

		    	//CLICK EN GUARDAR PROMOCIONES
		    		$('#btnGuardarAscensos').click(function(){
		    			var cedulas = '';
		    			var literales = '';
		    			var vacio = 0;
		    			//console.log($('#numAlumnos').val());
		    			for (var i = 1; i <= $('#numAlumnos').val(); i++) {
		    				cedulas += $('#'+i).attr('name') + ',' ;
		    				if ($('#'+i).val() == 'Literal') {
		    					vacio = 1;
		    					break;
		    				}else{
		    					literales += $('#'+i).val() + ',' ;
		    				}
		    			}

		    			if (vacio == 0){
			    			fin = cedulas.length -1;
			    			cedulas = cedulas.substr(0,fin);
			    			fin = literales.length -1;
			    			literales = literales.substr(0,fin);
			    			//console.log(cedulas);
			    			//console.log(literales);
			    			$.ajax({
			    				beforeSend: function(){
			    					$('#btnGuardarAscensos').button('loading');
			    					//console.log(literales);
			    				},
			    				url:'libs/promociones.php',
			    				type:'post',
			    				data: {"cedulas":cedulas,"literales":literales},
			    				success: function(respuesta){
			    					//console.log(respuesta);
			    					alert('¡Datos Actualizados Exitosamente!');
			    				},
			    				error: function(jqXHR,estado,error){
			    					console.log(error);
			    					console.log(estado);
			    				},
			    				complete: function(){
			    					$('#btnGuardarAscensos').button('reset');
			    					$('#ModalAscensos').modal('hide');
			    				}
		    			})
		    			} else if (vacio == 1) {
		    				alert("¡Debe Asignar un Literal a cada Alumno!");
		    			}
		    		})	

		    	//CLICK EN REPORTE REGULARES
		    		$('#exportar').click(function(){
		    			var url= 'libs/exportar.php';
		    			window.open(url, '_blank');
		    		})
		    	
		    	//CLICK EN CREAR NUEVO USUARIO
		    		$('#btnGuardarUsuario').click(function(){
			    		if (($('#NombreDeUsuario').val()=="")||($('#ContraseniaNuevoUsuario').val()=="")||($('#PreguntaSeguridadNvoUsuario').val()=="")||($('#RespuestaSeguridadNvoUsuario').val()=="")||($('#comboRol').val()=="Rol")) {
			    			alert("¡Debe llenar todos los campos Correctamente!");
			    		} else{
			    			var datosUsuario = $('#formUsuario').serialize();
			    			var nombre = $('#NombreDeUsuario').val();

			    			$.ajax({
			    				beforeSend: function(){
			    					$('#btnGuardarUsuario').button('loading');
			    					console.log(datosUsuario);
			    				},
			    				url:'libs/guardarUsuario.php?datosUsuario='+datosUsuario+"&nombre="+nombre,
			    				type: 'get',
			    				//data:{"datosUsuario":datosUsuario},
			    				success: function(respuesta){
			    					//console.log(respuesta);
			    					alert("¡Usuario Creado Exitosamente!");

			    				},
			    				error: function(error,status){
			    					console.log(error);
			    					console.log(status);
			    				},
			    				complete: function(){
			    					$('#btnGuardarUsuario').button('reset');
			    					$('#ModalCrearUsuario').modal('hide');
			    					$('.formulario input[type="text"]').val('');
			    					$('.formulario input[type="password"]').val('');
									$('.formulario select>option').removeAttr('selected');
									$('#busquedaUsuario').html('');

			    				}
			    			})
			    		}
		    		})

 				//BUSCAR NOMBRE DE USUARIO PARA SABER SI EXISTE
 					
 					$('#NombreDeUsuario').focusout(function(){
	 					if ($('#NombreDeUsuario').val() != '') {	
	 						var nombreU = $('#NombreDeUsuario').val();
	 						$.ajax({
				    				beforeSend: function(){
				    					$('#busquedaUsuario').html('Confirmando disponibilidad de Nombre de Usuario..');
				    					
				    				},
				    				url:'libs/buscarUsuario.php?nombreU='+nombreU,
				    				type: 'get',
				    				//data:{"datosUsuario":datosUsuario},
				    				success: function(respuesta){
				    					//console.log(respuesta);
				    					if(respuesta!=""){
											
											$('#busquedaUsuario').html('Nombre de Usuario No Disponible..');
											$('#NombreDeUsuario').val('');
											
										} else {
											
											$('#busquedaUsuario').html('Nombre de Usuario Disponible..');
											
										}

				    				},
				    				error: function(error,status){
				    					console.log(error);
				    					console.log(status);
				    				},
				    				complete: function(){
				    					
				    				}
				    			})
	 					} else {
	 						$('#busquedaUsuario').html('Debe Ingresar un Nombre De Usuario..');

	 					}
 					})

 				//CLICK EN VALIDAR CONTRASEÑA
 					$('#validarPw').click(function(){
 						if ($('#Contrasenia').val() == "") {
 							alert("Debe Ingresar Su Contraseña Actual");
 						} else {
 							var pw = $('#Contrasenia').val();
 							$.ajax({
 								beforeSend: function(){
				    				$('#validarPw').button('loading');
				    					
				    				},
				    				url:'libs/validarPw.php',
				    				type: 'post',
				    				data: {'pw':pw},
				    				success: function(respuesta){
				    					//console.log(respuesta);
				    					if(respuesta == "Coincide"){
				    						alert("¡Ingrese su nueva contraseña!");
											$('#Contrasenia').attr('disabled','disabled');
											$('#ContraseniaNueva').removeAttr('disabled');
											$('#ContraseniaNuevaRep').removeAttr('disabled');
																						
										} else {
											alert("¡La Contraseña No Coincide!");											
										}

				    				},
				    				error: function(error,status){
				    					console.log(error);
				    					console.log(status);
				    				},
				    				complete: function(){
				    				    $('#validarPw').button('reset');
				    				}
 							})
 						}
 					})

 				//CLICK EN GUARDAR NUEVA CONTRASEÑA
	 				$('#btnGuardarPwNvo').click(function(){
	 					if (($('#Contrasenia').val()=="")||($('#ContraseniaNueva').val()=="")||($('#ContraseniaNuevaRep').val()=="")) {
	 						alert("¡Debes llenar todos los Campos!");
	 					}else{
	 						if($('#ContraseniaNueva').val() == $('#ContraseniaNuevaRep').val()){
	 							var pw = $('#ContraseniaNueva').val();
	 							$.ajax({
				    				beforeSend: function(){
				    					$('#btnGuardarPwNvo').button('loading');
				    					//console.log(datosUsuario);
				    				},
				    				url:'libs/actPw.php',
				    				type: 'post',
				    				data:{"pw":pw},
				    				success: function(respuesta){
				    					if (respuesta == "exito") {
				    						alert("¡Contraseña Actualizada Exitosamente!");
				    					} else {
				    						alert("¡Error al actualizar Contraseña!");
				    					}

				    				},
				    				error: function(error,status){
				    					console.log(error);
				    					console.log(status);
				    				},
				    				complete: function(){
				    					$('#btnGuardarPwNvo').button('reset');
				    					restablecer();
				    				}
				    			})
	 						} else {
	 							alert("¡Las Contraseñas Ingresadas no coinciden!, Por favor Reviselas");
	 						}
	 					}
	 				})

 				//CLICK EN VALIDAR CONTRASEÑA
	 				$('#btnValPw').click(function(){
	 					if ($('#ContraseniaValidarPreg').val() == "") {
	 							alert("Debe Ingresar Su Contraseña Actual");
	 						} else {
	 							var pw = $('#ContraseniaValidarPreg').val();
	 							$.ajax({
	 								beforeSend: function(){
					    				$('#btnValPw').button('loading');

					    				},
					    				url:'libs/validarPw.php',
					    				type: 'post',
					    				data: {'pw':pw},
					    				success: function(respuesta){
					    					//console.log(respuesta);
					    					if(respuesta == "Coincide"){
					    						alert("¡Contraseña Valida, Ingrese los Datos Requeridos!");
												$('#ContraseniaValidarPreg').attr('disabled','disabled');
												$('#PreguntaSeguridadNva').removeAttr('disabled');
												$('#RespuestaSeguridadNva').removeAttr('disabled');
																							
											} else {
												alert("¡La Contraseña No Coincide!");											
											}

					    				},
					    				error: function(error,status){
					    					console.log(error);
					    					console.log(status);
					    				},
					    				complete: function(){
					    				    $('#btnValPw').button('reset');
					    				}
	 							})
	 						}
	 				})

 				//CLICK EN GUARDAR PREGUNTA Y RESPUESTA DE SEGURIDAD
 					$('#btnGuardarPyR').click(function(){
 						if (($('#ContraseniaValidarPreg').val()=="")||($('#PreguntaSeguridadNva').val()=="")||($('#RespuestaSeguridadNva').val()=="")) {
	 						alert("¡Debes llenar todos los Campos!");
	 					}else{
 							var datosPyR = $('#formPyR').serialize();
 							$.ajax({
			    				beforeSend: function(){
			    					$('#btnGuardarPyR').button('loading');
			    					//console.log(datosUsuario);
			    				},
			    				url:'libs/actPyR.php',
			    				type: 'post',
			    				data: datosPyR,
			    				success: function(respuesta){
			    					if (respuesta == "exito") {
			    						alert("¡Datos Actualizados Exitosamente!");
			    					} else {
			    						alert("¡Error al actualizar Datos!");
			    					}

			    				},
			    				error: function(error,status){
			    					console.log(error);
			    					console.log(status);
			    				},
			    				complete: function(){
			    					$('#btnGuardarPyR').button('reset');
			    					restablecer();
			    				}
			    			})
 					
	 					}
 					})

 				//CLICK EN ESTADISTICAS
 					$('#estadisticas').click(function(){
 						$.ajax({
 							beforeSend:function(){
 								$('#comboEstadisticas').html('');
 								$('#ModalEstadisticas').modal('show');
 								$('#comboEstadisticas').html('<h2>Cargando Periodos Escolares Disponibles..</h2>');
 							},
 							url:'libs/cargarPeriodos.php',
 							success:function(resp){
 								$('#comboEstadisticas').html('');
 								$('#comboEstadisticas').html(resp);	
 							}
 						})
 					})

 				//CLICK EN GENERAR ESTADISTICA PARA UN PERIODO ESCOLAR
 					$('#btnGenerarEstadisticas').click(function(){
 						//reviso si se eligio algo en el combo
 						if ($('#comboPer').val()=='periodo') {
 							alert("¡Debe seleccionar un periodo!");
 						} else {
 							var periodo = $('#comboPer').val();
 							var url = 'libs/estadisticas.php?periodo='+periodo;
 							window.open(url, '_blank');

 						}
 					})

 				//CLICK EN ASIGNAR CANAIMA
 					$('#resultadoBusqueda').on('click', '#btnCanaima', function(){
 						if( idRadioButton != undefined){
							$.ajax({
 							beforeSend:function(){
 								$('#comboACanaima').html('');
 								$('#ModalACanaima').modal('show');
 								$('#comboACanaima').html('<h2>Cargando Canaimitas Disponibles..</h2>');
 								//console.log(idRadioButton);
 							},
 							url:'libs/cargarCanaimasD.php?idRadioButton='+idRadioButton,
 							type: 'get',
 							success:function(resp){
 								$('#comboACanaima').html('');
 								$('#comboACanaima').html(resp);	
 							}
 						})
						    
						}else{
							alert("¡Debe seleccionar un alumno!");	
						}

 					})

 				//CLICK EN BOTON ASIGNAR
	 				$('#btnACanaima').click(function(){
	 					console.log($('#comboACanaima2').val());
	 					console.log('aqui');
 						//reviso si se eligio algo en el combo
 						if ($('#comboACanaima2').val()=='Canaimita') {
 							alert("¡Debe seleccionar un equipo!");
 						} else {
 							var canaimita = $('#comboACanaima2').val();
 							//var error="";
 							$.ajax({
								beforeSend: function(){
									$('#btnACanaima').button('loading');																													
								},
								url:'libs/AsignarCanaimita.php?canaimita='+canaimita+'&idRadioButton='+idRadioButton,
								type:'get',
								success: function(respuesta){
									console.log(respuesta);
									alert("Canaimita Asignada Exitosamente");		
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnACanaima').button('reset');
									//restablecer();
									$('#ModalACanaima').modal('hide');
								}
							})
 						}
 					})
 				
 				//click en salir asignar canaima
	 				$('.btnSalirModalACanaima').click(function(){
	 					$('#ModalACanaima').modal('hide');
	 				})

 				//CLICK EN CONSULTAR CANAIMAS
 					$('#btnAgregarCanaima').click(function(){
 						$('#ModalAgregarCanaima').modal('show');
 					})

 				//CLICK EN SALIR MODAL CONSULTAR CANAIMA
 					$('.btnSalirModalCCanaima').click(function(){
		 					//console.log($('#comboCCan').val());
		 					$('#ModalCCanaima').modal('hide');
		 					$('#CCanaima').html('');
	 				})

 				//DESENFOCAR LA CAJA DE CODIGO CANAIMA PARA VALIDAR CODIGO
	 				$('#serialCanaima').focusout(function(e){
							e.preventDefault();
							var envio = $('#serialCanaima').val();
							if (envio!='') {
								$.ajax({
									beforeSend: function(){
										$('#resultadoBusquedaCanaima').html('Verificando..');
										$('#btnGuardarCanaima').attr('disabled',true);
										//existeCan = 0;
										
									},
									url:'libs/buscarCan.php',
									type:'post',
									data:{"codigoCanaima":envio},
									success: function(resp){
										//verifico que haya encontrado algo
										if(resp!=""){
											//si consigue una canaima entonces le digo al usuario q ya existe
											$('#resultadoBusquedaCanaima').html('La Canaimita "'+resp+'" ya existe, por favor ingrese una nueva...');
											$('#serialCanaima').val('');
											$('#serialCanaima').focus();
											$('#modeloCanaima').val('');
											
										} else {
											//si la consigue mejor es no hacer nada y dejar q el usuario siga ingresando datos
											$('#resultadoBusquedaCanaima').html('');
										}
									},
									error: function(jqXHR,estado,error){
										alert(error);
										
									},
									complete: function(){
										$('#btnGuardarCanaima').attr('disabled',false);
									}
								})
							}
					});

 				//CLICK EN EL BTON GUARDAR CANAIMA
 					$('#btnGuardarCanaima').click(function(){
						if (($('#serialCanaima').val()=="")||($('#modeloCanaima').val()=="")||($('#serialCanaima').val()=="0")) {
							alert("Rellene los campos de forma Correcta");
						} else {
							var serial = $('#serialCanaima').val();
							var modelo = $('#modeloCanaima').val();
							
							$.ajax({
								
								beforeSend: function(){
									$('#btnGuardarCanaima').button('loading');
																																						
								},
								url:'libs/guardarCanaima.php?serial='+serial+'&modelo='+modelo,
								type:'get',
								success: function(respuesta){
									//console.log(respuesta);
									alert("Canaimita Agregada Exitosamente");
									
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnGuardarCanaima').button('reset');
									restablecer();
								}
							})


						}

					})

 				//CLICK EN CONSULTAR CANAIMA
 					$('#btnConsultarCanaima').click(function(){
 						$.ajax({
								
								beforeSend: function(){
									$('#ModalCCanaima').modal('show');
									$('#ModalGCanaimita').modal('hide');
									$('#CCanaima').html('Cargando Canaimitas...');
																																						
								},
								url:'libs/cargarCanaima.php',
								type:'post',
								success: function(respuesta){
									$('#CCanaima').html('');
									$('#CCanaima').html(respuesta);
									
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									//$('#btnGuardarCanaima').button('reset');
									//restablecer();
								}
							})

 					})
 				
 				//CLICK EN MODIFICAR CANAIMA
 					var serialV;
	 				$('#btnMCanaima').click(function(){
	 					//console.log($('#comboCCan').val());
	 					if ($('#comboCCan').val()=='canaima'||$('#comboCCan').val()==null) {
	 						alert('Debe seleccionar una Canaimita');
	 					}else{
	 						//alert('dentro del else');
	 						//ajax
	 						var codigo = $('#comboCCan').val();
	 						$.ajax({
									
									beforeSend: function(){
										$('#btnMCanaima').button('loading');
										$('#serialCanaimaM').val('');
										$('#modeloCanaimaM').val('');
										
										//$('#ModalGCanaimita').modal('hide');
										//$('#CCanaima').html('Cargando Canaimitas...');
																																							
									},
									url:'libs/cargarECanaima.php?codigo='+codigo,
									type:'get',
									success: function(respuesta){
										//debo recibir objetos
										var objResp = $.parseJSON(respuesta);
										
										$('#serialCanaimaM').val(objResp.codigoCanaima);
										serialV = $('#serialCanaimaM').val();
										$('#modeloCanaimaM').val(objResp.modeloCanaima);		
										$('#ModalECanaima').modal('show');							
									},
									error: function(jqXHR,estado,error){
										console.log(error);
										console.log(estado);
										
									},
									complete: function(jqXHR,estado){
										//reseteo el boton
										$('#btnMCanaima').button('reset');
											
										//restablecer();
									}
								})


	 					}
	 				})

 				//CLICK EN CERRAR MODIFICAR CANAIMA
	 				$('.CerrarMCanaima').click(function(){
		 					//console.log($('#comboCCan').val());
		 					$('#ModalECanaima').modal('hide');
		 					$('#serialCanaimaM').val('');
							$('#modeloCanaimaM').val('');
							$('#ModalCCanaima').modal('show');
	 				})

 				//CLICK EN ACTUALIZAR CANAIMA
 					$('#btnGuardarCanaimaM').click(function(){
						if ($('#formMCanaima input').val()=='')
							alert('ALERTA: Debes llenar todos los Campos');

						else {

							var serial = $('#serialCanaimaM').val();
							var modelo = $('#modeloCanaimaM').val();
							
							$.ajax({
								
								beforeSend: function(){
									$('#btnGuardarCanaimaM').button('loading');
									//console.log(datosAlum);
																																						
								},
								url:'libs/actualizarCan.php?serial='+serial+'&modelo='+modelo+'&serialV='+serialV,
								type:'get',
								success: function(respuesta){
									//console.log(respuesta);
									alert("Datos Actualizados Exitosamente");
									
								},
								error: function(jqXHR,estado,error){
									console.log(error);
									console.log(estado);
									
								},
								complete: function(jqXHR,estado){
									//reseteo el boton
									$('#btnGuardarCanaimaM').button('reset');
									//$('#ModalECanaima').modal('hide');
									restablecer();
								}
							})

						}
					})

 				//CLICK EN DESINCORPORAR
					$('#btnDCanaima').click(function(){
	 					//console.log($('#comboCCan').val());
	 					if ($('#comboCCan').val()=='canaima'||$('#comboCCan').val()==null) {
	 						alert('Debe seleccionar una Canaimita');
	 					}else{
	 						
	 						var codigo = $('#comboCCan').val();
	 						$.ajax({
									
									beforeSend: function(){
										$('#btnDCanaima').button('loading');
																																															
									},
									url:'libs/DCanaima.php?codigo='+codigo,
									type:'get',
									success: function(respuesta){
										//debo recibir objetos
										alert("Canaimita inactiva");		
									},
									error: function(jqXHR,estado,error){
										console.log(error);
										console.log(estado);
										
									},
									complete: function(jqXHR,estado){
										//reseteo el boton
										$('#btnDCanaima').button('reset');
										$('#ModalCCanaima').modal('hide');
										//restablecer();
									}
								})


	 					}
	 				}) 				

				//Click EN LINK ADMINISTRAR USUARIOS BLOQUEADOS
					$('#AdminUB').click(function(){
						$.ajax({
								
							beforeSend: function(){
								$('#ModalCBloq').modal('show');
								$('#CBloq').html('Cargando Usuarios Bloqueados...');
																																					
							},
							url:'libs/cargarBloq.php',
							type:'post',
							success: function(respuesta){
								$('#CBloq').html('');
								$('#CBloq').html(respuesta);
								
							},
							error: function(jqXHR,estado,error){
								console.log(error);
								console.log(estado);
								
							},
							complete: function(jqXHR,estado){
								//reseteo el boton
								//$('#btnGuardarCanaima').button('reset');
								//restablecer();
							}
						})

					})

				//Click EN DESBLOQUEAR
					$('#btnDUs').click(function(){
		 					//console.log($('#comboCBloq').val());
		 					if ($('#comboCBloq').val()=='bloqueado'||$('#comboCBloq').val()==null) {
		 						alert('Debe seleccionar un Usuario');
		 					}else{
		 						
		 						var u = $('#comboCBloq').val();
		 						$.ajax({
										
										beforeSend: function(){
											$('#btnDUs').button('loading');
																																																
										},
										url:'libs/DesbloquearUs.php?u='+u,
										type:'get',
										success: function(respuesta){
											//debo recibir objetos
											alert("Usuario Desbloqueado, la nueva clave sera el mismo nombre del usuario: "+respuesta);		
										},
										error: function(jqXHR,estado,error){
											console.log(error);
											console.log(estado);
											
										},
										complete: function(jqXHR,estado){
											//reseteo el boton
											$('#btnDUS').button('reset');
											$('#ModalCBloq').modal('hide');
											//restablecer();
										}
									})


		 					}
		 				}) 		

 				//Ayudas
	 				$('#ayudas').click(function(){
	 					window.open('libs/manual.pdf', '_blank');
	 				})

	 				$('#retirados').click(function(){
	 					var url = 'libs/reporteRetirados.php';
	 					window.open(url, '_blank');
	 				})

 				//CLICK EN LINK PRE INSCRITOS
		    		$('#preInscritos').click(function(){
		    			// 'libs/exportar.php'
		    			//'libs/pruebaexportacion.php'
		    			console.log("");
		    			var url= 'libs/preInscritos.php';
		    			window.open(url, '_blank');
		    		})

		    	$.datepicker.regional['es'] = {
					closeText: 'Cerrar',
					prevText: '<Ant',
					nextText: 'Sig>',
					currentText: 'Hoy',
					monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
					monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
					dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
					dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
					dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
					weekHeader: 'Sm',
					dateFormat: 'yy-mm-dd',
					firstDay: 1,
					isRTL: false,
					showMonthAfterYear: false,
					yearSuffix: ''
				};
				
				$.datepicker.setDefaults($.datepicker.regional['es']);	

		    });
		 	
			