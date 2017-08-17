<?php 
$usu=$_POST['usuario'];
$cont=$_POST['contrasena'];
if(($usu=='Profym')&&($cont=='Profym')){
	header("Location: menu.php?iden=32112321");
		}
else{
	header("Location: index.php");
	}
?>