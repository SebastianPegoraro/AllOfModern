<?php 
$usu=$_POST['usuario'];
$cont=$_POST['contrasena'];
$contador=0;
if(($usu=='cg')&&($cont=='cg2015')){
	$contador=1;
		}
if($contador!=0){
	session_start();
    $_SESSION["autentificado"]= "1";
	header("Location: principal.php");
	}
else{
	header("Location: index.php");
	}
?>
