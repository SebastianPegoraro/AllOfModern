<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");

$nomvotado=$_REQUEST['nomvotado'];
$dnivotante=$_REQUEST['dnivotante'];

//guardamos en una variable el dni del Votado
abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT dnipostul FROM votos WHERE NomyApePos='$nomvotado'");
cerrarBase();
$dnivotado = mysql_fetch_row($result);
	
//Verificamos si que el votante no sea el votado
if ($dnivotante == $dnivotado[0]) {
	header("Location: error.php");
} else {
	abrirBase();
		mysql_query("SET NAMES 'utf8'");
		$resulta = mysql_query("SELECT dnivotado FROM interna WHERE dnivotado='$dnivotado[0]' AND dnivotante='$dnivotante'");
	cerrarBase();
	$row = mysql_fetch_row($resulta);
	//Verificamos que el votante no vote mas de una vez al mismo
	if ($row[0]=="") {
		if ($row[0] == $dnivotado[0]) {
			header("Location: error.php");
		}else{
			abrirBase();
				mysql_query("SET NAMES 'utf8'");
				$result = mysql_query("INSERT INTO interna (dnivotante, dnivotado) VALUES ('$dnivotante', '$dnivotado[0]')");
			cerrarBase();
			header("Location: guardado.php");	
		}		
	} else{
		header("Location: error.php");
	}			
}
	
?>
