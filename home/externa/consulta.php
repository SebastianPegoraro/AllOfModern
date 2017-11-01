<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");
?>

<?php
error_reporting(0);

$ac=$_POST['oculto'];
$dnivotante=$_REQUEST['dnivotante'];

//Comprueba que el votante y la jurisdiccion sean aptos

if($ac=='postulante'){
	abrirBase();
		mysql_query("SET NAMES 'utf8'");
		$result = mysql_query("SELECT * FROM padron WHERE Documento=$dnivotante");
	cerrarBase();
	$row = mysql_fetch_array($result);
	if($row[1]==""){
		header("Location: error.php");
		exit;
	}	else{
		header("Location: postulante.php?dni=$dnivotante");
		exit;
	}
}
?>
