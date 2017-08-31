<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");?>
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
$dnivotante=$_POST['dnivotante'];
$jurpost=$_REQUEST['jurpost'];
$jurvot=$_POST['jurvot'];

//Si el Postulante o el votante es jur. insssep pasa solo
if(($jurpost==16)&&($ac=='postulante')){
	header("Location: categoria.php?dni=$dnipostul&jur=$jurpost");
	exit;
	}
if(($jurvot==16)&&($ac=='votante'))
{
	if($dnipostul==$dnivotante){
//		echo "no puede ser el mismo dni";
		header("Location: error.php");
		exit;
		}
	if($jurpost!=$jurvot){
//		echo "no puede ser distina jurisdiccion";
		header("Location: error.php");
		exit;
	}
	control($dnivotante);
	header("Location: Datos-Jefe.php?votante=$dnivotante&postul=$dnipostul&jurpost=$jurpost");
	exit;
}

//Comprueba que el postulante y el votante sean aptos

if($ac=='postulante'){
	abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT * FROM padron WHERE Documento=$dnipostul and  Jur=$jurpost and antigue>=3");
	cerrarBase();
	$row = mysql_fetch_array($result);
	if($row[1]==""){
		header("Location: error.php");
		exit;
		}
	else{
		header("Location: categoria.php?dni=$dnipostul&jur=$jurpost");
		exit;
		}
	}
	//aca controla a los votantes
else if($ac=='votante'){
	if($dnipostul==$dnivotante){
		//echo "no puede ser el mismo dni";
		header("Location: error.php");
		exit;
		}
	if($jurpost!=$jurvot){
		//echo "no puede ser distina jurisdiccion";
		header("Location: error.php");
		exit;
		}
	control($dnivotante);
	abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT * FROM padron WHERE Documento=$dnivotante and Jur=$jurvot");
	cerrarBase();
	$row = mysql_fetch_array($result);
	if($row[1]==""){
		header("Location: error.php");
		}
	else{

		header("Location: Datos-Jefe.php?votante=$dnivotante&postul=$dnipostul&jurpost=$jurpost");
		}
	}
?>
