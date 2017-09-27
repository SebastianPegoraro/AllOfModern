<?php 
$usu=$_POST['usuario'];
$cont=$_POST['contrasena'];
if(($usu=='Profym')&&($cont=='Profym')){
	header("Location: menu.php");
		}
else{
	header("Location: index.php");
	}
?>