<?php include("../conect.php")?>
<?php
$consulta=$_GET['pasa'];
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

abrirBase();
//$queEmp = "SELECT NomyApePos,juris, COUNT( npostulante ) AS Votos "."FROM votos "."GROUP BY npostulante order by(npostulante)";
$resEmp = mysql_query($consulta) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
cerrarBase();
$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'dnipostul'=>'<b>Dni Postulante</b>',
				'NomyApePos'=>'<b>Apellido y Nombre</b>',
				'dnivot'=>'<b>Dni Votante</b>',
				'NomyApeVot'=>'<b>Apellido y Nombre</b>',
				'juris'=>'<b>Jurisdiccion</b>',
				'npostulante'=>'<b>N.P.</b>',
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
$txttit = "<b>Empleado Publico 2014</b>\n";
$txttit.= "N.P.=Numero de Postulante \n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>
