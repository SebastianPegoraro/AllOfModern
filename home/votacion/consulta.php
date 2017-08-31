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
$jurpost=$_REQUEST['jurpost'];
$categoria=$_POST['categoria'];
//Si el Postulante o el votante es jur. insssep pasa solo
	//control($dnivotante);
	//header("Location: Datos-Jefe.php?votante=$dnivotante&postul=$dnipostul&jurpost=$jurpost");
	//exit;


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
			if($categoria=='1'){
				header("Location: formulario-colaboracion.php?dni=$dnipostul&jur=$jurpost&categoria=$categoria");
				exit;
			}
			if ($categoria=='2'){
				header("Location: formulario-capacitacion.php?dni=$dnipostul&jur=$jurpost&categoria=$categoria");
				exit;
			}
			if ($categoria=='3'){
				header("Location: formulario-proyectos.php?dni=$dnipostul&jur=$jurpost&categoria=$categoria");
				exit;
			}
			if ($categoria=='4'){
				header("Location: formulario-innovacion.php?dni=$dnipostul&jur=$jurpost&categoria=$categoria");
				exit;
			}


//			header("Location: formularioPE.php?dni=$dnipostul&jur=$jurpost");
		exit;
		}
	}

?>
