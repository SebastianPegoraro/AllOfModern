<?php
header("Content-Type: text/html;charset=utf-8");
include("../conect.php");
?>
<?php
$consulta=$_GET['pasa'];
$jur=$_GET['jur'];
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

conectar();
mysql_query("SET NAMES 'utf8'"); 
$resEmp = mysql_query($consulta) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
desconectar();
$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) {
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'dnipostul'=>'<b>Dni Postulante</b>',
				'NomyApePos'=>'<b>Apellido y Nombre</b>',
				'Votos'=>'<b>Votos</b>',
				'npostulante'=>'<b>N. Postulante</b>',

			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>Empleado Publico 2012</b>\n";
$txttit.= "Jurisdiccion: $jur \n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>