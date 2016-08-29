<?php 
	session_start();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>SGDA - Inicio de Sesión</title>

    <!-- Bootstrap -->
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <link href="css/styles.css" rel="stylesheet" />
     <link href="css/estilo.css" rel="stylesheet" />

  </head>
  <body>


<div class="container">
  <div id="sup"><img src="images/logorojo.png" /><div>
<div id="content">
    <div id="tope1" class="tope1" style="height:20px;">BIENVENIDO  <span class="der"><?php echo date("d/m/Y"); ?></span></div>
    <div id="tope2" class="tope2"><span class="der"><a href="#" id="cerrar"></span></div>
    <div id="tope3"></div>
    <div id="tope4"></div>
    <div id="center-wrapper">


<div class="row">

    <div class="col-xs-6 col-md-6" style="margin-top:70px">


<h1>S.G.D.A</h1>

<h4></h4>
<form class="form-horizontal" role="form">
  
  <!--<div class="form-group">
    <label for="inputPassword3" class="col-md-2 control-label">Password</label>
    <div class="col-md-6">
      <input type="password" class="form-control" placeholder='Contraseña'>
    </div>
  </div>-->

  <div class="input-group input-group-lg">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"> </i></span>
    <div class="icon-addon addon-lg">
      <input data-toggle="popover" data-placement="top" data-content="Nombre de usuario: admin" type="text" class="form-control input-lg" id='user' name='user' placeholder="Nombre de Usuario" required autofocus>
    </div>
  </div></br>
  
  <div class="input-group input-group-lg">
    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"> </i></span>
    <div class="icon-addon addon-lg">
      <input data-toggle="popover" data-placement="bottom" data-content="Contraseña de usuario: admin" type="password"  id='pass' name='pass' class="form-control input-lg" placeholder="Contraseña" required>
    </div>
  </div> </br>

  <div class="form-group">
<div class="pull-left">
  <li class="quitar-estilo" data-toggle="modal" data-target="#ModalRecuperacionContrasenia"><a href="#">¿Ha olvidado su contraseña?</a></li>
</div>

    <div>
      <button type="button"  id="Iniciar" class="btn btn-primary btn-lg pull-right" value="show" data-loading-text="Iniciando..." autocomplete="off">Entrar
        <label for="ingresar" class="glyphicon glyphicon-log-in" rel="tooltip" title="inputBuscarAlumno"> </label>
      </button>
    </div>
  </div>
</form>


    </div>
  <div class="col-xs-12 col-sm-6 col-md-6">     
    <div class='jumbotron' style='text-align:left; background-color:white'>
             <img src='images/logoMin.jpg' width="240px" /> 


        </div></div>
  
</div>



      




    </div>    
  </div>
</div>
  <!-- MODAL RECUPERACION DE CONTRASEÑA-->
    <div class="modal fade" id="ModalRecuperacionContrasenia" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="#LabelAgregar" aria-hidden="true" data-keyboard="false">
  
      <div class="modal-dialog">
    
        <div class="modal-content panel panel-primary">
            <div class="modal-header panel-heading">
              <button type="button" class="cerrar close" aria-hidden="true"> &times;</button>
              <h3 class="text-center">Recuperación de Contraseña</h3> 
            </div>
            <div class="modal-body">
              <form id="formPregU">
                <div class="input-group input-group-lg">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"> </i></span>
                  <div class="icon-addon addon-lg">
                    <input type="text" class="form-control input-lg" placeholder="Nombre de Usuario" name="nombreU" id="nombreU" title="Ingrese su Usuario para validar su Identidad" autofocus/>
                  </div>
                    <span class="input-group-btn">
                    <button id="btnValidarU" class="btn btn-info" type="button" value="show" data-loading-text="Verificando..." autocomplete="off" > Validar
                    <label for="Validar" class="glyphicon glyphicon-ok" rel="tooltip" title="inputBuscarAlumno"> </label>
                    </button>
                    </span>
                </div><br /><br />
                <div class="input-group">
                  <span class="input-group-addon">¿</span>
                  <input type="text" class="form-control input-lg" placeholder="Pregunta de Seguridad" name="Pregunta" id="Pregunta" disabled="true" required/>
                  <span class="input-group-addon">?</span>
                </div> 
                <input type="text" class="form-control input-lg" placeholder="Respuesta de Seguridad" name="Respuesta" id="Respuesta" title="Ingrese su Respuesta de Seguridad" disabled="true" required/>
              </form> 
            </div>
           
          <div class="modal-footer panel-footer">
            <button id="btnVerificarU" class="btn btn-success btn-lg" type="button" data-toggle="modal" value="show" data-loading-text="Verificando..." autocomplete="off"> Verificar
            <label for="Verificar" class="glyphicon glyphicon-ok" rel="tooltip" title="VerificarRespuesta"> </label>
            </button>
            <button class="btn btn-danger btn-lg cerrar" type="button" data-toggle="modal" > Cancelar
            <label for="Cancelar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
            </button>
          </div>
      </div>
    </div>
  </div>
      
  <!-- MODAL CAMBIAR CONTRASEÑA-->
    <div class="modal fade" id="ModalCambiarContrasenia" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="#LabelAgregar" aria-hidden="true" data-keyboard="false">
      <div class="modal-dialog">
        <div class="modal-content panel panel-primary">
          <div class="modal-header panel-heading">
            <button type="button" class="cerrar close" aria-hidden="true"> &times;</button>
            <h3 class="text-center">Cambiar Contraseña</h3> 
          </div>
          <div class="modal-body">
            <form id="formPw" class="form-signin" >
              <input type="password" class="form-control input-lg" placeholder="Contraseña Nueva" name="ContraseniaNueva" id="ContraseniaNueva" title="Ingresar la Nueva Contraseña que desea Utilizar" required/>
              <input type="password" class="form-control input-lg" placeholder="Repita su Contraseña Nueva" name="ContraseniaNuevaRep" id="ContraseniaNuevaRep" title="Repita la Contraseña Nueva para Verificar" required/>
            </form> 
          </div>
          <div class="modal-footer panel-footer">
            <button id="btnGuardarContrasenia" class="btn btn-success btn-lg" type="button" data-toggle="modal" value="show" data-loading-text="Guardando..." autocomplete="off"> Guardar
            <label for="Buscar" class="glyphicon glyphicon-floppy-saved" rel="tooltip" title="inputBuscarAlumno"> </label>
            </button>
            <button class="btn btn-danger btn-lg cerrar" type="button" data-toggle="modal" data-target="#ModalInicioDeSesion" > Cancelar
            <label for="Cancelar" class="glyphicon glyphicon-remove" rel="tooltip" title="inputBuscarAlumno"> </label>
            </button>
          </div>
        </div>
      </div>
    </div> 
      
   <div class='content text-center'>
      <div>
          <strong>Contacto para Soporte:</strong> <br />
          <span ><i class="glyphicon glyphicon-globe"> </i></span>
          Vía Web: http://webori.pdvsa.com/autoservicio<br />
          <span ><i class="glyphicon glyphicon-earphone"> </i></span>
          Numero de Contacto: 105
      </div>        
      
        <p><br /><i>Derechos Reservados &#169; 2015 Gerencia de AIT</i></p>
    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>

    
  </body>
</html>




<script type="text/javascript">

$(document).ready(function(){
    $('#user').popover('show');
    $('#pass').popover('show');


    $('#Iniciar').click(function(){

        var dataString = 'pass=' + $("input#pass").val() + '&user=' + $("input#user").val();
        $.ajax({
            beforeSend: function(){
                $('#Iniciar').button('loading');
                                                                                
            },
            type: "POST",
            url: "libs/IniciarSesion.php",
            data: dataString,
            success: function(datos) {
              console.log(dataString);
              if ((datos=='Administrador')||(datos=='Coordinador')||(datos=='Asistente'))  { 
                $(top.location).attr('href','inicio.php');
              } else if (datos == 'bloqueado') {
                alert('Usuario Bloqueado, pongase en contacto con un Administrador');
              } else {
                console.log(datos);
                alert("¡Error al Iniciar Sesión!");
              }
            },
            error: function(jqXHR,estado,error){
              console.log(error);
              console.log(estado);
            },
            complete: function(jqXHR,estado){
              $('#Iniciar').button('reset');

            }

        });
    });
    
    //Funcion cerrar
    function cerrar () {
            $('#ModalRecuperacionContrasenia').modal('hide');
            $('#ModalCambiarContrasenia').modal('hide');
            $('#Modal').modal('hide');
                        
            $('form input[type="text"]').val('');
            $('form input[type="password"]').val('');
            $('#Pregunta').attr('disabled','disabled');
            $('#Respuesta').attr('disabled','disabled');
            $('#nombreU').removeAttr('disabled');
            //$('.formulario input[type="text"]').attr('disabled',false);
    }

    //click en botones cerrar
    $('.cerrar').click(function(){
      cerrar()
    })

    //validar usuario para recuperar contraseña  
    $('#btnValidarU').click(function(){
      if ($('#nombreU').val() == "") {
        alert("¡Debe Ingresar su nombre de Usuario");
      }else{
        var nombreU = $('#nombreU').val();
        $.ajax({
            beforeSend: function(){
                $('#btnValidarU').button('loading');
                                                                                
            },
            type: "POST",
            url: "libs/validarUsuario.php",
            data: {"nombreU":nombreU},
            success: function(datos) {
             
              if (datos == 'bloqueado') {
                alert('Usuario Bloqueado, Pongase en contacto con un Administrador');
              }else if(datos != ''){
                $('#nombreU').attr('disabled','disabled');
                $('#Pregunta').val(datos);
                $('#Respuesta').removeAttr('disabled');
              }else {
                alert("¡No se pudo encontrar al Usuario!");
              }
            },
            error: function(jqXHR,estado,error){
              console.log(error);
              console.log(estado);
            },
            complete: function(jqXHR,estado){
              $('#btnValidarU').button('reset');


            }

        });

      }

    })

    //verificar respuesta
    $('#btnVerificarU').click(function(){
      if ($('#Respuesta').val() == "") {
        alert("¡Debe ingresar su Respuesta de Seguridad!");
      } else {
        $('#nombreU').removeAttr('disabled');
        $('#Pregunta').removeAttr('disabled');
        var datosU = $('#formPregU').serialize();
        $.ajax({
            beforeSend: function(){
                $('#btnVerificarU').button('loading');
                                                                                
            },
            type: "POST",
            url: "libs/verificarUsuario.php",
            data: datosU,
            success: function(datos) {
             console.log(datos);
              if (datos == "Coinciden")  { 
                $('#ModalCambiarContrasenia').modal('show');
                $('#ModalRecuperacionContrasenia').modal('hide');

              }else {
                alert("¡La Respuesta no Coincide!");
                $('#nombreU').attr('disabled','disabled');
                $('#Pregunta').attr('disabled','disabled');
              }
            },
            error: function(jqXHR,estado,error){
              console.log(error);
              console.log(estado);
            },
            complete: function(jqXHR,estado){
              $('#btnVerificarU').button('reset');

            }

        });
      }
    })

    //validar y guardar cntraseña nueva
    $('#btnGuardarContrasenia').click(function(){
      if (($('#ContraseniaNuevaRep').val()=='')||($('#ContraseniaNueva').val()=='')) {
        alert("¡Debe llenar todos los Campos!");
      }else{
        if ($('#ContraseniaNuevaRep').val() == $('#ContraseniaNueva').val()) {
          var pwNvo = $('#formPw').serialize() + "&"+ $('#formPregU').serialize();
          //var datoU = $('#formPregU').serialize();
          $.ajax({
            beforeSend: function(){
                $('#btnGuardarContrasenia').button('loading');                                                                              
            },
            type: "POST",
            url: "libs/guardarPwNvo.php",
            data: pwNvo,
            success: function(datos) {
              if (datos == "exito")  { 
                alert("¡Contraseña Actualizada Correctamente!");
                cerrar();


              }else {
                alert("¡Error al Guardar Contraseña!");
              }
            },
            error: function(jqXHR,estado,error){
              console.log(error);
              console.log(estado);
            },
            complete: function(jqXHR,estado){
              $('#btnGuardarContrasenia').button('reset');


            }

        });   
        }else{
          alert("Las Contraseñas Ingresadas No Coinciden")
        }

      }
    })

});

</script>

