<?php
function valor($obser){
	switch($obser){
		case 1: $obser=5; break;
		case 2: $obser=2.5; break;
		default: $obser=0; break;
		}
		return $obser;
	}
include("conect.php");
$dni=$_POST['dni'];
$npostul=$_POST['npostul'];
$cargo=$_POST['cargo'];
//Controla si ya habia votado
conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT evaluado FROM votos WHERE dnipostul=$dni");
	desconectar();
	$row = mysql_fetch_array($result);
	$evaluado=$row[0];
if($evaluado=="Si"){
	header("Location: error.html");
	exit;
	}
//1
$dedicacion1=$_POST['dedicacion1'];
$dedicacion2=$_POST['dedicacion2'];
$obserdedica=$_POST['obserdedica'];
//Calcula puntaje
$val1=valor($dedicacion1);
$val2=valor($dedicacion2);
$totaldedica=$val1 + $val2;
echo "$totaldedica";
//2
$supera1=$_POST['supera1'];
$supera2=$_POST['supera2'];
$obsersupera=$_POST['obsersupera'];
//Calcula puntaje
$val1=valor($supera1);
$val2=valor($supera2);
$totalsupera=$val1 + $val2;
echo "$totalsupera";
//3
$proact1=$_POST['proact1'];
$proact2=$_POST['proact2'];
$obserproact=$_POST['obserproact'];
//Calcula puntaje
$val1=valor($proact1);
$val2=valor($proact2);
$totalproact=$val1 + $val2;
echo "$totalproact";
//4
$aprend1=$_POST['aprend1'];
$aprend2=$_POST['aprend2'];
$obseraprend=$_POST['obseraprend'];
//Calcula puntaje
$val1=valor($aprend1);
$val2=valor($aprend2);
$totalaprend=$val1 + $val2;
echo "$totalaprend";
//5
$comyresp1=$_POST['comyresp1'];
$comyresp2=$_POST['comyresp2'];
$obsercompyresp=$_POST['obsercompyresp'];
//Calcula puntaje
$val1=valor($comyresp1);
$val2=valor($comyresp2);
$totalcomyresp=$val1 + $val2;
echo "$totalcomyresp";
//6
$resppyp1=$_POST['resppyp1'];
$resppyp2=$_POST['resppyp2'];
$obserrespyp=$_POST['obserrespyp'];
//Calcula puntaje
$val1=valor($resppyp1);
$val2=valor($resppyp2);
$totalresppyp=$val1 + $val2;
echo "$totalresppyp";
//7
$punt1=$_POST['punt1'];
$punt2=$_POST['punt2'];
$obserpunt=$_POST['obserpunt'];
//Calcula puntaje
$val1=valor($punt1);
$val2=valor($punt2);
$totalpunt=$val1 + $val2;
echo "$totalpunt";
//8
$colycop1=$_POST['colycop1'];
$colycop2=$_POST['colycop2'];
$obsercolycop=$_POST['obsercolycop'];
//Calcula puntaje
$val1=valor($colycop1);
$val2=valor($colycop2);
$totalcolycop=$val1 + $val2;
echo "$totalcolycop";
//9
$honest1=$_POST['honest1'];
$honest2=$_POST['honest2'];
$obserhonest=$_POST['obserhonest'];
//Calcula puntaje
$val1=valor($honest1);
$val2=valor($honest2);
$totalhonest=$val1 + $val2;
echo "$totalhonest";

$total = $totaldedica + $totalsupera + $totalproact + $totalaprend + $totalcomyresp + $totalresppyp + $totalpunt + $totalcolycop + $totalhonest;

echo "$total";

echo "<br>
Variables de 1: $dedicacion1---$dedicacion2---$obserdedica--$totaldedica<br>

Variables de 2: $supera1---$supera2---$obsersupera--$totalsupera<br>

Variables de 3: $proact1---$proact2---$obserproact--$totalproact<br>

Variables de 4: $aprend1---$aprend2---$obseraprend--$totalaprend<br>

Variables de 5: $comyresp1---$comyresp2---$obsercompyresp--$totalcomyresp<br>

Variables de 6: $resppyp1---$resppyp2---$obserrespyp--$totalresppyp<br>

Variables de 7: $punt1---$punt2---$obserpunt--$totalpunt<br>

Variables de 8: $colycop1---$colycop2---$obsercolycop--$totalcolycop<br>

Variables de 9: $honest1---$honest2---$obserhonest--$totalhonest<br>
";
//insertar en la BD
//FALTA GUARDAR LAS OBSERVACIONES DE CADA UNO

$cola1 = $_POST['cola1'];
$cola2 = $_POST['cola2'];
$capa1 = $_POST['capa1'];
$capa2 = $_POST['capa2'];
$proy = $_POST['proy'];
$inno1 = $_POST['inno1'];
$inno2 = $_POST['inno2'];


conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("INSERT INTO evaluacion (dnipostul, cargo, npost, dedicacion1, dedicacion2, obserdedica, supera1, supera2, obsersupera, proact1, proact2, obserproact,
		aprend1, aprend2, obseraprend, comyresp1, comyresp2, obsercompyresp, resppyp1, resppyp2, obserresppyp, punt1, punt2, obserpunt, colycop1, colycop2, obsercolycop, honest1,
		honest2, obserhonest, total, cola1, cola2, capa1, capa1, proy, inno1, inno2) VALUES ('$dni','$cargo','$npostul','$dedicacion1','$dedicacion2','$obserdedica','$supera1',
			'$supera2','$obsersupera','$proact1','$proact2','$obserproact','$aprend1','$aprend2','$obseraprend','$comyresp1','$comyresp2','$obsercompyresp','$resppyp1','$resppyp2',
			'$obserrespyp','$punt1','$punt2','$obserpunt','$colycop1','$colycop2','$obsercolycop','$honest1','$honest2','$obserhonest','$total','$cola1','$cola2','$capa1','$capa2',
			'$proy','$inno1','$inno2')");

	$result = mysql_query("UPDATE votos SET evaluado='Si' WHERE dnipostul=$dni");
desconectar();
header("Location: final.html");

?>
