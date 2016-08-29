<?php
include "conexion.php";

/*$file = fopen("ip.txt", "r") or exit("Error abriendo fichero!");
  //Lee línea a línea y escribela hasta el fin de fichero
  $a=0;
  while($linea = fgets($file)) {
      if ($a==8) {
        $lin =  $linea;
      }
      
      $a++;
  }
  fclose($file);

  $ip = trim(substr($lin,47));*/

$usuario = $_POST['user'];
$clave = $_POST['pass'];


if (!empty($usuario) && !empty($clave)){



    //USO EL LDAP PARA LOGEAR CON EL INDICADOR DEL TRABAJADOR
      /*$ds = @ldap_connect("PDVSA.COM");
      @ldap_set_option($ds,LDAP_OP_PROTOCOL_VERSION, 3);
      $bind = @ldap_bind($ds,$usuario."@PDVSA.COM",$clave);
      ldap_close($ds);*/
      //LA SIGUIENTE SENTENCIA ES DE PRUEBA-> $BIND=1
      //debo hacer un if para hacer a bind=1 cuando el nombre de usuario sea jesusmvs o admin o coordinador o asistente
    
      $bind=1;
      if ($bind==1) { 
        $mysqli = new mysqli($host,$user,$pw,$db);
        //or die ("Problemas al conectar server");
              
        //mysqli_select_db($db,$con)
        //or die("Problemas al conectar con base de datos");
              
        //mysqli_query("SET NAMES 'utf8'");

        /*require_once('singlenton.php');
          $db = DB::instance();
          $id = 0;*/
          //LA SIGUIENTE SENTECIA HACE BUSQUEDA EN LA BASE DE DATOS PARA SABER SI EL USUARIO EXISTE
          /*$comando = $db->prepare("SELECT u.id,u.tx_nombre,u.tx_rol FROM data.k001_usuario u WHERE u.tx_nombre = upper(?)");
          $comando->execute(array($usuario));*/
        //$encontro = 0;
        $consulta = $mysqli->query("SELECT * FROM usuario where NombreUsuario='".$usuario."'");
        if (($consulta->num_rows) > 0){
          while( $row = $consulta->fetch_array(MYSQLI_ASSOC) ) {
            $id = $row['IDUsuario'];
            $user = $row['NombreUsuario'];
            $pw = $row['PwUsuario'];
            $idRol = $row['ID_TipoDeUsuario'];
            $status = $row['ID_StatusU'];
            $inv = $row['SesionInv'];
            $encontro = 1;
            
          }
          $consulta->free();
          if ($encontro == 1) {
            if ($status == 2) {
              echo "bloqueado";
            } else if ($status == 1) {
              if ($pw == $clave) {
                $consulta = $mysqli->query("SELECT * FROM tipodeusuario where IDTipoDeUsuario='".$idRol."'");
                if (($consulta->num_rows) > 0) {
                  $row = $consulta->fetch_array(MYSQLI_ASSOC);
                  $rol = $row['DescripcionTipoDeUsuario'];

                  if ($id>0) {
                  session_start();
                  $_SESSION["u"] = $id; 
                  $_SESSION["user"] = $user; 
                  $_SESSION["rol"] = $rol;
                   
                  //$_SESSION["ip"] = $ip; 
                  echo $rol;
                  $consulta->free();
                  }
                } else {
                  exit();
                }
              } else {
                if ($inv == 2) {
                  $mysqli->query("UPDATE usuario set SesionInv='3', ID_StatusU='2' where NombreUsuario='".$user."'");
                  $consulta->free();
                  echo "bloqueado";
                } else{
                  $mysqli->query("UPDATE usuario set SesionInv=SesionInv+1 where NombreUsuario='".$user."'");
                  $consulta->free();
                }
              }
            }
              
          }
          
          /*if ($id>0) {
            session_start();
              $_SESSION["u"] = $id; 
              $_SESSION["user"] = $user; 
              $_SESSION["rol"] = $rol; 
              //$_SESSION["ip"] = $ip; 
              echo $rol;
            }
            else {
              session_start();
              $rol = "USUARIO";
              $_SESSION["u"] = 0; 
              $_SESSION["user"] = mb_strtoupper(mb_strtolower($usuario)); 
              $_SESSION["rol"] = $rol; 
              $_SESSION["ip"] = $ip; 
              echo $rol;
            }*/
        }
      } else  {
        exit ();
      }


  $mysqli->close();
  
}

?>