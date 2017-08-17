<?php include("../conect.php")?>
<?php
$info=$_GET['pasa'];
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);

abrirBase();
if($info==1){
$queEmp = "SELECT juris as Jurisdiccion, dnipostul as DNI_Postulante, NomyApePos as Nombre_y_Apellido, COUNT( npostulante ) AS Cantidad_de_Votos, `npostulante` as N_Postulante FROM votos GROUP BY (N_Postulante) order by Jurisdiccion,Cantidad_de_Votos DESC";
$resEmp = mysql_query($queEmp) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
cerrarBase();
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
				'Jurisdiccion'=>'<b>Jurisdiccion</b>',
				'DNI_Postulante'=>'<b>Dni Postulante</b>',
				'Nombre_y_Apellido'=>'<b>Apellido y Nombre</b>',
				'Cantidad_de_Votos'=>'<b>Cantidad de Votos</b>',
				
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
}
if($info==2){
$queEmp = "SELECT `perfil` as Perfil, COUNT(DISTINCT `dni`) AS Cantidad_de_Votos FROM votos_publico group by(`perfil`)";
abrirBase();
$resEmp = mysql_query($queEmp) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
cerrarBase();
$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('num'=>$ixx));
}
$titles = array(
	'Perfil'=>'<b>Perfil</b>',
	'Cantidad_de_Votos'=>'<b>Cantidad de Votos</b>',
	);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>500
			);
}
if($info==3){
$queEmp = "SELECT dni, nomyape, tel, ocupa FROM general ";
abrirBase();
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
}
$txttit = "<b>Empleado Publico 2015</b>\n";
//$txttit.= "N.P.=Numero de Postulante \n";

$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$now=time();
putenv("TZ=America/Argentina/Buenos_Aires");
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s",$now)."\n\n", 10);
$pdf->ezStream();
?>
