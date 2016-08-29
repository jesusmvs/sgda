<?php 
session_start();

if (empty($_SESSION['user'])) { header("location: index.php"); } 

require_once('libs/funciones.php');
require 'libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->compile_check = true;
//$smarty->debugging = true;

$smarty->assign("Titulo","ADMINISTRACION");
$smarty->assign("Usuario",$_SESSION['user']);
$smarty->assign("rol",$_SESSION['rol']);

$smarty->assign("Contenido","
		<div class='jumbotron' style='text-align:center'>
        	<img src='images/vehiculos.png' width='420px'  />
      	</div>
	");
$smarty->display('boostrap.tpl');

?>