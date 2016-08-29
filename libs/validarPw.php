<?php
	session_start();
	include "conexion.php";
	if( isset($_POST['pw']) && !empty($_POST['pw'])){
	    	
			$con = mysqli_connect($host,$user,$pw,$db)
			or die ("Problemas al conectar server");
			
			mysqli_query($con, "SET NAMES 'utf8'");

			$consulta = mysqli_query($con, "SELECT * FROM usuario where NombreUsuario='$_SESSION[user]' and PwUsuario='$_POST[pw]'") or die(mysqli_error());
			
			if (mysqli_num_rows($consulta) > 0){
				echo "Coincide";

			}
	} else {
	    	echo("<script>alert('¡Llene de Forma Correcta la Caja de Busqueda!');</script>");
	    	
	};


?>