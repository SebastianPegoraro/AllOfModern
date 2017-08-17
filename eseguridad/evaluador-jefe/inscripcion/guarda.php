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

//Votante
$dnivot=$_POST['dnivot'];
$apynomvot=$_POST['apynomvot'];
$ofivot=$_POST['jurvot'];
$email=$_POST['emailvot'];
$telvot=$_POST['telvot'];
$medio=$_POST['medio'];

//Caracteristicas seleccionadas
//1
$dedicacion1=$_POST['dedicacion1'];
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

//10
$obser1=$_POST['obser1'];
//11
$obser2=$_POST['obser2'];


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
	$result = mysql_query("INSERT INTO votos (dnipostul, NomyApePos, juris, Dependencia, Oficina, DireccionPos, Localidad, TelefonoPos, dnivot, NomyApeVot, TelVot, EmailVot, npostulante, dedicacion1, supera1, proact1, aprend1, comyresp1, resppyp1, punt1, colycop1, honest1, obser1, obser2, medio, total) VALUES ('$dnipostul','$apynompos','$jur','$depenpos','$ofipos','$direcpos','$localpos','$telefpos','$dnivot','$apynomvot','$telvot','$email','$npostulante',
'$dedicacion1','$supera1','$proact1','$aprend1','$comyresp1','$resppyp1','$punt1','$colycop1','$honest1', '$obser1', '$obser2' ,'$medio', '$total')"); 
header("Location: guardado.php");
cerrarBase();



//Enviamos un mail con el comprobante de votacion
$mail= new PHPMailer();
$mail->FromName ="Empleado Público 2016";
$mail->Subject = "Comprobante Voto Empleado Público 2016";
$mail->AddAddress($email,"Nombre");
$mail->AddBCC("premioempleadopublico@gmail.com");

$cuerpo="
Comprobante VotaciÃ³n Empleado PÃºblico 2016

Datos del Postulante:
DNI: $dnipostul
Apellido y Nombre: $apynompos

JurisdicciÃ³n: $jur

Datos del Votante:
DNI: $dnivot
Apellido y Nombre: $apynomvot
";
$mail->Body = $cuerpo;
$mail->Send();

header("Location: guardado.php");


}else{

header("Location: error.php");
}

?>
