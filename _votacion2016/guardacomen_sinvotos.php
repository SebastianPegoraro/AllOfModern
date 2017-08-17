<?php 
include("conect.php");
error_reporting(0);
$dni=$_POST['oculto'];
$comen=$_POST['comenta'];
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
	
//guarda comentarios
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("insert into comentarios_sinvotos (dni, comentario) values ('$dni','$comen')");
	desconectar();
	header("Location: final_sinvotos.html");
	exit;	
?>
