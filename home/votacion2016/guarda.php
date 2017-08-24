<?php 
include("conect.php");
error_reporting(0);
$dni=$_GET['dni'];
$perfil=$_GET['perfil'];

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
	
//Controla q la persona no tenga un voto a otro perfil
conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT dni FROM votos_publico WHERE dni=$dni");// and perfil != '$perfil'");
	desconectar();
	$row = mysql_fetch_array($result);
	$control=$row[0];		
	
if($control!=""){
	header("Location: error.html");
	exit;
	}
else{
	//guardar voto en BD
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("insert into votos_publico (dni, perfil) values ('$dni','$perfil')");
	desconectar();
	header("Location: comentario.php?dni=$dni");
	exit;
	}

?>
