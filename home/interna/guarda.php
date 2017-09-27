<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");
error_reporting(0);

$nomvotado=$_POST['nomvotado'];
$dnivotante=$_POST['dnivotante'];

abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT dnipostul FROM votos WHERE NomyApePos='$nomvotado'");
cerrarBase();
$row = mysql_fetch_array($result);
//Verificamos si que el votante no sea el votado
	if($row[0]!=""){
		if ($dnivotante == $row[0]) {
			header("Location: error.php");
		} else {
			abrirBase();
				mysql_query("SET NAMES 'utf8'");
				$result = mysql_query("INSERT INTO interna (dnivotante, dnivotado) VALUES ('$dnivotante', '$row[0]')");
			cerrarBase();
			header("Location: guardado.php");
		}
		header("Location: error.php");
	}
?>
