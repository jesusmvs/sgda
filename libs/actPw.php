<?php
	session_start();
	include "conexion.php";
    //if( isset($_POST['pw']) && !empty($_POST['pw'])) {
	    	
		$con = mysqli_connect($host,$user,$pw,$db)
		or die ("Problemas al conectar server");

			
		mysqli_query($con, "SET NAMES 'utf8'");

		mysqli_query($con, "UPDATE usuario SET PwUsuario = '$_POST[pw]' WHERE NombreUsuario = '$_SESSION[user]';") or die(mysqli_error());
		echo "exito";
			
	/*} else {
	    echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
	    	
	};*/


?>