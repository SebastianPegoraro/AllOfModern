<?php 
include("conect.php");
$dni=$_POST['dni'];
//Controla que la persona este en el padron
conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT dni FROM padron_electoral WHERE dni=$dni");
	desconectar();
	$row = mysql_fetch_array($result);
	$evaluado=$row[0];	
if($evaluado==""){
	header("Location: error.html");
	exit;
	}
else{
	header("Location: Perfiles.php?dni=$dni");
	exit;
	}
?>