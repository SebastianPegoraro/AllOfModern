<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");
error_reporting(0);
?>

<?php
//Postulante
$apynompos = $_POST['nomyape'];
$dnipostul=$_POST['dni'];
$direcpos = $_POST['direccion'];
$localidad = $_POST['localidad'];
$telefonopos = $_POST['telefono'];
$correo = $_POST['email'];
$facebook = $_POST['facebook'];
$ocupacion = $_POST['ocupacion'];
$seEntero = $_POST['seEntero'];

//Verifica si ya se inscribio el ciudadano
abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT * FROM ciudadano WHERE dni=$dnipostul");
cerrarBase();
	$row = mysql_fetch_array($result);
	if ($row[0]==""){
		//Guardamos el voto en la BD
		abrirBase();
			mysql_query("SET NAMES 'utf8'");
			$result = mysql_query("INSERT INTO ciudadano (nomyape, dni, direccion, localidad, telefono, correo, facebook, ocupacion, seentero) VALUES ('$apynompos', '$dnipostul', '$direcpos',
				'$localidad', '$telefonopos', '$correo', '$facebook', '$ocupacion', '$seEntero')");
		cerrarBase();

		header("Location: guardado.php");
	}else{
		header("Location: error.php");
	}

?>
