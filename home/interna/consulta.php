<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");
?>

<?php
function control($dni){
	abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT dnivot FROM votos WHERE dnivot=$dni");
	cerrarBase();
	$row = mysql_fetch_array($result);
	if($row[0]!=""){
		header("Location: error.php");
		exit;
	}
}
?>

<?php
error_reporting(0);

$ac=$_POST['oculto'];
$dnipostul=$_REQUEST['dnipostulante'];
$jurpost=$_REQUEST['jurpost'];
$categoria=$_POST['categoria'];

//Comprueba que el votante y la jurisdiccion sean aptos

if($ac=='postulante'){
	abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT * FROM padron WHERE Documento=$dnipostul AND Jur=$jurpost");
	cerrarBase();
	$row = mysql_fetch_array($result);
	if($row[1]==""){
		header("Location: error.php");
		exit;
	}	else{
		header("Location: postulante.php?jur=$jurpost&dni=$dnipostul");
		exit;
	}
}
?>
