<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");
require_once("class.phpmailer.php");
include("cuenta.txt");
error_reporting(0);

function valor($obser){
	switch($obser){
		case 1: $obser=5; break;
		case 2: $obser=2.5; break;
		default: $obser=0; break;
		}
		return $obser;
	}

$dnipostul=$_POST['dni'];
$categoria=$_POST['categoria'];
//Verificamos si tiene Numero de Postulante
	abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT npostulante FROM votos WHERE dnipostul=$dnipostul");
	cerrarBase();
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

?>

<?php
//Postulante
$jur=$_POST['jur'];
$apynompos=$_POST['apeynom'];
$ofipos=$_POST['oficina'];
$direcpos=$_POST['direc'];
$telefpos=$_POST['telef'];
$depenpos=$_POST['depen'];
$localpos=$_POST['local'];
$categoria=$_POST['categoria'];
$cargo=$_POST['cargo'];
$jefeSup=$_POST['jefeSup'];
$correo=$_POST['correo'];
$seentero=$_POST['seentero'];
//Votante
/*$dnivot=$_POST['dnivot'];
$apynomvot=$_POST['apynomvot'];
$ofivot=$_POST['jurvot'];
$email=$_POST['emailvot'];
$telvot=$_POST['telvot'];
$medio=$_POST['medio'];
*/
//Caracteristicas seleccionadas
//1
/*$dedicacion1=$_POST['dedicacion1'];
//Calcula puntaje
$totaldedica=valor($dedicacion1);
//2
$supera1=$_POST['supera1'];
//Calcula puntaje
$totalsupera=valor($supera1);
//3
$proact1=$_POST['proact1'];
//Calcula puntaje
$totalproact=valor($proact1);
//4
$aprend1=$_POST['aprend1'];
//Calcula puntaje
$totalaprend=valor($aprend1);
//5
$comyresp1=$_POST['comyresp1'];
//Calcula puntaje
$totalcomyresp=valor($comyresp1);
//6
$resppyp1=$_POST['resppyp1'];
//Calcula puntaje
$totalresppyp=valor($resppyp1);
//7
$punt1=$_POST['punt1'];
//Calcula puntaje
$totalpunt=valor($punt1);
//8
$colycop1=$_POST['colycop1'];
//Calcula puntaje
$totalcolycop=valor($colycop1);
//9
$honest1=$_POST['honest1'];
//Calcula puntaje
$totalhonest=valor($honest1);

$total = $totaldedica + $totalsupera + $totalproact + $totalaprend + $totalcomyresp + $totalresppyp + $totalpunt + $totalcolycop + $totalhonest;
*/
//1
$obser1=$_POST['obser1'];
//
$check1=$_POST['check1'];
$check2=$_POST['check2'];
$check3=$_POST['check3'];
$check4=$_POST['check4'];
$check5=$_POST['check5'];
$check6=$_POST['check6'];
$check7=$_POST['check7'];
$check8=$_POST['check8'];
$check9=$_POST['check9'];


//2
$obser2=$_POST['obser2'];
//3
$obser3=$_POST['obser3'];
//4
$obser4=$_POST['obser4'];
//5
$obser5=$_POST['obser5'];
//6
$obser6=$_POST['obser6'];
//7
$obser7=$_POST['obser7'];
//8
$obser8=$_POST['obser8'];
//9
$obser9=$_POST['obser9'];
//10
$obser10=$_POST['obser10'];


//Verificacion del voto
abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT * FROM votos WHERE dnipostul=$dnipostul AND dnivot=$dnivot");
	cerrarBase();
	$row = mysql_fetch_array($result);
		if ($row[1]==""){



//Guardamos el voto en la BD
abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("INSERT INTO votos (dnipostul, NomyApePos, juris, Dependencia, Oficina, DireccionPos, Localidad, TelefonoPos,  npostulante, categoria, obser1, check1, check2, check3, check4, check5, check6, check7, check8, check9, obser2, obser3, obser4, obser5, obser6, obser7, obser8, obser9, obser10, cargo, jefeSup, correo, seentero, depen) VALUES ('$dnipostul','$apynompos','$jur','$depenpos','$ofipos','$direcpos','$localpos','$telefpos','$npostulante', '$categoria', '$obser1', '$check1', '$check2', '$check3', '$check4', '$check5', '$check6', '$check7', '$check8', '$check9', '$obser2', '$obser3', '$obser4', '$obser5', '$obser6', '$obser7', '$obser8', '$obser9', '$obser10', '$cargo', '$jefeSup', '$correo', '$seentero', '$depen')");
header("Location: guardado.php");
cerrarBase();



//Enviamos un mail con el comprobante de votacion
$mail= new PHPMailer();
$mail->FromName ="Empleado P�blico 2017";
$mail->Subject = "Comprobante Voto Empleado P�blico 2017";
$mail->AddAddress($email,"Nombre");
$mail->AddBCC("dgmodernizacionchaco@gmail.com");

$cuerpo="
Comprobante Votación Empleado Público 2017

Datos del Postulante:
DNI: $dnipostul
Apellido y Nombre: $apynompos

Jurisdicción: $jur
";
$mail->Body = $cuerpo;
$mail->Send();

header("Location: guardado.php");


}else{

header("Location: error.php");
}

?>
