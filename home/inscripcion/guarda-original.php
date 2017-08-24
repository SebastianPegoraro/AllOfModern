<?php 
header("Content-Type: text/html;charset=utf-8");
include("conect.php");
require_once("class.phpmailer.php");
?>
<?php 
include("cuenta.txt");
error_reporting(0);
$dnipostul=$_POST['dni'];
//Verificamos si tiene Numero de Postulante
	conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT npostulante FROM votos WHERE dnipostul=$dnipostul");
	desconectar();
	$row = mysql_fetch_array($result);
//si existe consultamos el numero de postulante y asignamos el mismo num
	if($row[0]!=""){
		$npostulante=$row[0];
		}
//si no existe consultamos en el txt el proximo numero a asignar
     else{
		 if(file_exists("cuenta.txt")){
			$f=fopen("cuenta.txt","r");
			$sub=fread($f,filesize("cuenta.txt"));
			$sub=$sub + 1;
			fclose($f);

			$f=fopen("cuenta.txt","w");
			fwrite($f,$sub);
			fclose($f);
			$npostulante=$sub;
		}
		else{
		$f=fopen("cuenta.txt","w");
		fwrite($f,"1");
		fclose($f);
		$npostulante=1;
		}
		}
//Guardar Datos en la tabla votantes
//Postulant
$jur=$_POST['jur'];
$apynompos=$_POST['apeynom'];
$ofipos=$_POST['oficina'];
$direcpos=$_POST['direc'];
$telefpos=$_POST['telef'];
$depenpos=$_POST['depen'];
$localpos=$_POST['local'];
//Votante
$dnivot=$_POST['dnivot'];
$apynomvot=$_POST['apynomvot'];
$ofivot=$_POST['jurvot'];
$email="".$_POST['emailvot']."";
$telvot=$_POST['telvot'];
//Guardamos el voto en la BD	
conectar();
mysql_query("SET NAMES 'utf8'");
mysql_query("INSERT INTO votos (dnipostul, NomyApePos, juris, Dependencia, Oficina, DireccionPos, Localidad, TelefonoPos, dnivot, NomyApeVot, TelVot, EmailVot, npostulante, auditado, obseraudi) VALUES ('$dnipostul','$apynompos','$jur','$depenpos','$ofipos','$direcpos','$localpos','$telefpos','$dnivot','$apynomvot','$telvot','$email','$npostulante','No','')");
desconectar();
//guardamos en obser las caracteristicas seleccionadas y las observaciones

if(isset($_POST['caracteristicas2'])==true){
	$conoc="Dedicacion";
	$obser=$_POST['obser2'];
	//Guardamos las caract. con la obser.
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("INSERT INTO obser(dnipost, dnivot, caract, descrip, npostulante) VALUES ('$dnipostul','$dnivot','$conoc','$obser','$npostulante')");
	desconectar();
	}
if(isset($_POST['caracteristicas3'])==true){
	$conoc="Deseos de Superacion";
	$obser=$_POST['obser3'];
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("INSERT INTO obser(dnipost, dnivot, caract, descrip, npostulante) VALUES ('$dnipostul','$dnivot','$conoc','$obser','$npostulante')");
	desconectar();
	}
if(isset($_POST['caracteristicas4'])==true){
	$conoc="Proactividad";
	$obser=$_POST['obser4'];
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("INSERT INTO obser(dnipost, dnivot, caract, descrip, npostulante) VALUES ('$dnipostul','$dnivot','$conoc','$obser','$npostulante')");
	desconectar();
	}
if(isset($_POST['caracteristicas5'])==true){
	$conoc="Aprendizaje Continuo";
	$obser=$_POST['obser5'];
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("INSERT INTO obser(dnipost, dnivot, caract, descrip, npostulante) VALUES ('$dnipostul','$dnivot','$conoc','$obser','$npostulante')");
	desconectar();
	}
if(isset($_POST['caracteristicas1'])==true){
	$conoc="Compromiso y Responsabilidad";
	$obser=$_POST['obser1'];
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("INSERT INTO obser(dnipost, dnivot, caract, descrip, npostulante) VALUES ('$dnipostul','$dnivot','$conoc','$obser','$npostulante')");
	desconectar();
	}
if(isset($_POST['caracteristicas7'])==true){
	$conoc="Respeto a su Persona y a sus Pares";
	$obser=$_POST['obser7'];
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("INSERT INTO obser(dnipost, dnivot, caract, descrip, npostulante) VALUES ('$dnipostul','$dnivot','$conoc','$obser','$npostulante')");
	desconectar();
	}
if(isset($_POST['caracteristicas8'])==true){
	$conoc="Puntualidad";
	$obser=$_POST['obser8'];
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("INSERT INTO obser(dnipost, dnivot, caract, descrip, npostulante) VALUES ('$dnipostul','$dnivot','$conoc','$obser','$npostulante')");
	desconectar();
	}
if(isset($_POST['caracteristicas9'])==true){
	$conoc="Colaboracion y Cooperacion";
	$obser=$_POST['obser9'];
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("INSERT INTO obser(dnipost, dnivot, caract, descrip, npostulante) VALUES ('$dnipostul','$dnivot','$conoc','$obser','$npostulante')");
	desconectar();
	}
if(isset($_POST['caracteristicas6'])==true){
	$conoc="Honestidad";
	$obser=$_POST['obser6'];
	conectar();
	mysql_query("SET NAMES 'utf8'");
	mysql_query("INSERT INTO obser(dnipost, dnivot, caract, descrip, npostulante) VALUES ('$dnipostul','$dnivot','$conoc','$obser','$npostulante')");
	desconectar();
	}
//Enviamos un mail con el comprobante de votacion
$mail= new PHPMailer();
$mail->FromName ="Empleado Publico 2013";
$mail->Subject = "Comprobante Voto Empleado Publico 2013";
$mail->AddAddress($email,"Nombre");
$mail->AddBCC("cristian87ariel@gmail.com");

$cuerpo="
Comprobante Votacion Empleado Publico 2013

Datos del Postulante:
DNI: $dnipostul
Apellido y Nombre: $apynompos

Jurisdiccion: $jur

Datos del Votante:
DNI: $dnivot
Apellido y Nombre: $apynomvot
";
$mail->Body = $cuerpo;
$mail->Send();

header("Location: guardado.php");

?>
