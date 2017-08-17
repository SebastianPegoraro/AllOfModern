<?php 
include("../conect.php");
require_once('class.ezpdf.php');
header("Content-Type: text/html;charset=utf-8");
$pasa=$_GET['pasa'];
error_reporting(0);
function valor($obser){
	switch($obser){
		case 1: $obser="Siempre - 5 Puntos"; break;
		case 2: $obser="Regularmente - 2.5 Puntos"; break;
		case 3: $obser="Nunca - 0 Puntos"; break;
		case 4: $obser="NS/NC - 0 Puntos"; break;
		}
		return $obser;
	}
$busca=$_POST['busca'];
	conectar();
    mysql_query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM evaluacion where dnipostul = '$pasa'";
	$result = mysql_query($sql);
	desconectar();
//	1
    $row = mysql_fetch_row($result);
	$data[] = array('valor'=>"Concepto 1: Dedicación ", 'punt'=>"");
	$muestra4=valor($row[4]);
	$data[] = array('valor'=>"Realiza una ocupación plena de su tiempo laboral.", 'punt'=>"$muestra4");
	$muestra5=valor($row[5]);
	$data[] = array('valor'=>"Cumple con los objetivos y tareas encomendadas, aprovechando de forma plena su tiempo laboral.", 'punt'=>"$muestra5");
	$data[] = array('valor'=>"Observacion", 'punt'=>"$row[6]");
//  2
	$data[] = array('valor'=>"Concepto 2: Deseo de superación", 'punt'=>"");
	$muestra7=valor($row[7]);
	$data[] = array('valor'=>"Posee espíritu de superación. Tiene ímpetu para capacitarse y fijarse nuevas metas dentro de la organización.", 'punt'=>"$muestra7");
	$muestra8=valor($row[8]);
	$data[] = array('valor'=>"Brinda importancia a las necesidades de alcanzar los objetivos, realiza aportes para ello.", 'punt'=>"$muestra8");
	$data[] = array('valor'=>"Observacion", 'punt'=>"$row[9]");
//  3
	$data[] = array('valor'=>"Concepto 3: Proactividad", 'punt'=>"");
	$muestra10=valor($row[10]);
	$data[] = array('valor'=>"Emprende constantemente nuevas acciones y genera cambios constructivos en su entorno de trabajo.", 'punt'=>"$muestra10");
	$muestra11=valor($row[11]);
	$data[] = array('valor'=>"Supera los obstáculos y realiza repetidos intentos para alcanzar los objetivos manteniéndose firme en un proyecto hasta completarlo.", 'punt'=>"$muestra11");
	$data[] = array('valor'=>"Observacion", 'punt'=>"$row[12]");
//  4
	$data[] = array('valor'=>"Concepto 4: Aprendizaje continuo", 'punt'=>"");
	$muestra13=valor($row[13]);
	$data[13] = array('valor'=>"Busca y comparte información útil para la resolución de situaciones.", 'punt'=>"$muestra13");
	$muestra14=valor($row[14]);
	$data[] = array('valor'=>"Emprende acciones para difundir nuevas tecnologías y metodologías de la organización.", 'punt'=>"$muestra14");
	$data[] = array('valor'=>"Observacion", 'punt'=>"$row[15]");
	//  5
	$data[] = array('valor'=>"Concepto 5: Compromiso y responsabilidad", 'punt'=>"");
	$muestra16=valor($row[16]);
	$data[] = array('valor'=>"Se compromete con los objetivos del equipo de trabajo.", 'punt'=>"$muestra16");
	$muestra17=valor($row[17]);
	$data[] = array('valor'=>"Defiende los intereses del grupo de trabajo como si fueran propios.", 'punt'=>"$muestra17");
	$data[] = array('valor'=>"Observacion", 'punt'=>"$row[18]");
	//  6
	$data[] = array('valor'=>"Concepto 6: Respeto a su persona y sus pares", 'punt'=>"");
	$muestra19=valor($row[19]);
	$data[] = array('valor'=>"Sabe recibir abiertamente opiniones y criticas, las cuales toma en cuenta.", 'punt'=>"$muestra19");
	$muestra20=valor($row[20]);
	$data[] = array('valor'=>"Escucha, respeta y valora las ideas y propuestas de sus pares y colaboradores.", 'punt'=>"$muestra20");
	$data[] = array('valor'=>"Observacion", 'punt'=>"$row[21]");
	//  7
	$data[] = array('valor'=>"Concepto 7: Puntualidad", 'punt'=>"");
	$muestra22=valor($row[22]);
	$data[] = array('valor'=>"Acude en tiempo y forma a su lugar de trabajo.", 'punt'=>"$muestra22");
	$muestra23=valor($row[23]);
	$data[] = array('valor'=>"Comunica de su inasistencia.", 'punt'=>"$muestra23");
	$data[] = array('valor'=>"Observacion", 'punt'=>"$row[24]");
	//  8
	$data[] = array('valor'=>"Concepto 8: Colaboración y Cooperación", 'punt'=>"");
	$muestra25=valor($row[25]);
	$data[] = array('valor'=>"Motiva al grupo a integrar sus ideas y a llegar a consenso. Colabora para la obtención de un objetivo común.", 'punt'=>"$muestra25");
	$muestra26=valor($row[26]);
	$data[] = array('valor'=>"Contribuye en el orden y limpieza en el ámbito de trabajo.", 'punt'=>"$muestra26");
	$data[] = array('valor'=>"Observacion", 'punt'=>"$row[27]");
	//  9
	$data[] = array('valor'=>"Concepto9: Ética laboral", 'punt'=>"");
	$muestra28=valor($row[28]);
	$data[] = array('valor'=>"Es leal a los principios del organismo.", 'punt'=>"$muestra28");
	$muestra29=valor($row[29]);
	$data[] = array('valor'=>"Cuida los bienes del Estado y sus recursos, velando por la ecnomía del material y la información que le fueron confiados.", 'punt'=>"$muestra29");
	$data[] = array('valor'=>"Observacion", 'punt'=>"$row[30]");

	
	
	
	$titles = array('valor'=>"CONCEPTO",'punt'=>"PUNTAJE");
	
$opciones = array(
//'shaded'=>1, 
'showLines'=>1, 
'showHeadings'=>1,
'fontsize'=>10,
'colGap'=>2, 
'xOrientation'=>'center', 
'shadeCol'=>array(0.9,0.9,0.9),
'cols'=>array( 
"valor" => array('justification'=>'left', 'width' => '250'), 
"punt" => array('justification'=>'left', 'width' => '250')));

//para el pdf
$pdf =& new Cezpdf('a4');
$pdf->selectFont('fonts/helvetica.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);
$pdf->ezStartPageNumbers(285,18,10,'right','{PAGENUM} de {TOTALPAGENUM}',1); 

$pdf->ezText("EMPLEADO PUBLICO 2015", 14);
$pdf->ezText("N Postulante = $row[3]", 14);
$pdf->ezText("Nombre y apellido del jefe = $row[32]\n", 14);
//$pdf->ezTable($data,$titles,'',array('fontSize'=>10,'width'=>500,'cols'=>$data));
$pdf->ezTable($data,$titles,'',$opciones);
$pdf->ezText("\n Puntaje Total del Jefe = $row[31]\n", 14);
ob_end_clean();
$pdf->ezStream();
	 
?>
