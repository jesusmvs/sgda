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


    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/messages_es.min.js"></script>

  </body>
  </html>

  <script type="text/javascript">
    $().ready(function() {
      $("#cerrar").click(function(){
        $.ajax({
          type: "POST",
          url: "libs/cerrarSesion.php",
          success: function(datos) {
            $(top.location).attr('href','index.php');
          }
        })
      });

    });
</script>