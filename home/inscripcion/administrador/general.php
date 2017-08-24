<?php include("../conect.php")?>
<?php
header("Content-Type: text/html;charset=utf-8");
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

abrirBase();
mysql_query("SET NAMES 'utf8'"); 
$queEmp = "Select dni,nomyape,tel,ocupa FROM general";
$resEmp = mysql_query($queEmp) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
cerrarBase();

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'dni'=>'<b>Dni</b>',
				'nomyape'=>'<b>Apellido y Nombre</b>',
				'tel'=>'<b>Telefono</b>',
				'ocupa'=>'<b>Ocupacion</b>',
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>Empleado Publico 2012</b>\n";
$txttit.= "Listado Personal General\n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>
