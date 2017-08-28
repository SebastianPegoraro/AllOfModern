<?php 
require_once('class.ezpdf.php');
include("../conect.php");
$pasa=$_GET['pasa'];
if($pasa==1){
	conectar();
mysql_query("SET NAMES 'utf8'");
$resEmp = mysql_query("SELECT dnipostul, NomyApePos, juris, oficina from padronfinal where evaluado='Si'");
$cantidad = mysql_num_rows($resEmp);
desconectar();
 while ($row = mysql_fetch_row($resEmp)){
	 $data[] = array('dni'=>$row[0], 'nomyape'=>$row[1], 'juris'=>$row[2], 'ofic'=>$row[3]);
	 }
	 $titles = array('dni'=>"DNI", 'nomyape'=>"Apellido y Nombre", 'juris'=>"Jurisdiccion", 'ofic'=>"Oficina");
	
	$txttit = "<b>Empleado Publico 2014</b>\n";
	$txttit.= "Personas Evaluadas =  $cantidad / 15 \n\n";
	}
if($pasa==2){	
	conectar();
mysql_query("SET NAMES 'utf8'");
$resEmp = mysql_query("SELECT dnipostul, NomyApePos, juris, oficina from padronfinal where evaluado='No'");
$cantidad = mysql_num_rows($resEmp);
desconectar();
 while ($row = mysql_fetch_row($resEmp)){
	 $data[] = array('dni'=>$row[0], 'nomyape'=>$row[1], 'juris'=>$row[2], 'ofic'=>$row[3]);
	 }
	 $titles = array('dni'=>"DNI", 'nomyape'=>"Apellido y Nombre", 'juris'=>"Jurisdiccion", 'ofic'=>"Oficina");
	
	$txttit = "<b>Empleado Publico 2014</b>\n";
	$txttit.= "Personas que faltan evaluar =  $cantidad / 15 \n\n";
	}
	
//para el pdf
$pdf =& new Cezpdf('a4');
$pdf->selectFont('fonts/helvetica.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);
$pdf->ezStartPageNumbers(285,18,10,'right','{PAGENUM} de {TOTALPAGENUM}',1); 

$pdf->ezText($txttit, 12);
$pdf->ezTable($data,$titles,'',array('fontSize'=>10,'width'=>500,'cols'=>$data));
ob_end_clean();
$pdf->ezStream();
?>
