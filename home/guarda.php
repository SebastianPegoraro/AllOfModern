<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");
error_reporting(0);
?>

<?php
//Postulante
$telefono = $_POST['telefono'];
$dniagasajado = $_POST['dni'];


//Verifica si el ciudadano es apto para inscribirse
abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$res = mysql_query("SELECT * FROM agasajados WHERE dni=$dniagasajado");
cerrarBase();
$fila = mysql_fetch_array($res);
if ($fila[0] != "") {
	//Verifica si ya se inscribio el ciudadano
	abrirBase();
		mysql_query("SET NAMES 'utf8'");
		$result = mysql_query("SELECT * FROM agasajados WHERE dni=$dniagasajado AND tel=$telefono");
	cerrarBase();
		$row = mysql_fetch_array($result);
		if ($row[0]==""){
			//Guardamos el voto en la BD
			abrirBase();
				mysql_query("SET NAMES 'utf8'");
				$result = mysql_query("UPDATE agasajados SET tel = $telefono WHERE dni = $dniagasajado");
			cerrarBase();

			header("Location: guardado.php");
		}else{
			header("Location: error.php");
		}
} else {
	header("Location: error.php");
}



?>
