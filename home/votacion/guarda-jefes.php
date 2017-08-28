<?php 
include("conect.php");
?>

<?php 
error_reporting(0);
$dnipost=$_POST['dnipost'];
$jurpost=$_POST['jurpost'];
$votante=$_POST['votante'];
$apeynom=$_POST['apeynom'];
$cargo=$_POST['cargo'];
$tel=$_POST['tel'];
$email=$_POST['email'];

//ACA SE TIENE QUE GUARDAR EN LA TABLA DE JEFES
abrirBase();
mysql_query("SET NAMES 'utf8'");
mysql_query("INSERT INTO jefes(dnipostul, apeynom, cargo, tel, email) VALUES ('$dnipost','$apeynom','$cargo','$tel','$email')");
cerrarBase();
//REDIRECCIONAMOS CON LOS DATOS NECESARIOS A LOS FORMULARIOS CORRRESPONDIENTES
if($jurpost==16){
	header("Location: formuins.php?votante=$votante&postul=$dnipost");
	}
else{
	header("Location: formulario.php?votante=$votante&postul=$dnipost&jurpost=$jurpost");
	}
?>
