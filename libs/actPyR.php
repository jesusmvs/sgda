<?php
	session_start();
	include "conexion.php";
    if( isset($_POST['PreguntaSeguridadNva']) && !empty($_POST['RespuestaSeguridadNva']) && isset($_POST['RespuestaSeguridadNva']) && !empty($_POST['PreguntaSeguridadNva'])) {
	    	
		$con = mysqli_connect($host,$user,$pw,$db)
		or die ("Problemas al conectar server");
			
		mysqli_query($con, "SET NAMES 'utf8'");

		mysqli_query($con, "UPDATE  usuario SET  PreguntaSecreta =  '$_POST[PreguntaSeguridadNva]',
RespuestaSecreta =  '$_POST[RespuestaSeguridadNva]' WHERE  NombreUsuario = '$_SESSION[user]';") or die(mysqli_error());
		echo "exito";
			
	} else {
	    echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
	    	
	};


?>