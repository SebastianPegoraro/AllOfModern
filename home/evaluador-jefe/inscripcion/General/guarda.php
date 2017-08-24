<?php
header("Content-Type: text/html;charset=utf-8");
 include("../conect.php")?>
<?php 
error_reporting(0);
$dni=$_POST['dni'];
$nomyape=$_POST['nomyape'];
$tel=$_POST['tel'];
$ocupa=$_POST['ocupa'];
$local=$_POST['local'];
$email=$_POST['email'];
$direc=$_POST['dccion'];
$codp=$_POST['codp'];


//Validar que la persona no esté en la tabla padron
	abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT * FROM padron WHERE Documento='$dni'");
	$row = mysql_fetch_array($result);
	cerrarBase();
	if($row[4]!= ""){	
	header("Location: error.php");}
else{
abrirBase();
mysql_query("SET NAMES 'utf8'");
mysql_query("INSERT INTO general (dni, nomyape, tel, dir, local, email, codpost, ocupa) VALUES ('$dni','$nomyape','$tel','$direc','$local','$email','$codp','$ocupa')");

cerrarBase();
header("Location: guar.php");
}

?>
