<?php include("../conect.php");
header("Content-Type: text/html;charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="../Sistema/menu/single_twentyfive.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url(../Sistema/areas/images/bg.png);
	background-color: #006;
}
body,td,th {
	color: #FFF;
}
</style>
</head>

<body>
<br />
<table width="55%" height="571" border="1" align="center">
  <tr>
    <td height="565" align="center" valign="top" bgcolor="#FFFFFF"><div id="menuContainer"><img src="../emp.png" width="303" height="200" /></div> <?php 
$imprime=$_REQUEST['dni'];
	$c=abrirBase();
	mysql_query("SET NAMES 'utf8'"); 
	$sql="SELECT * FROM votos WHERE dnivot='$imprime'";
	$result = mysql_query($sql,$c);
	$row = mysql_fetch_array($result);
	cerrarBase($c);
	$imprime="                                     Premio Empleado Publico del Año 2014
	
Datos del Candidato
Apellido y Nombre: $row[2]
Dni: $row[1]
Jurisdiccion: $row[3]
Oficina: $row[7]
Direccion: $row[8]
Localidad: $row[9]
Telefono: $row[10]	
	
	Talon 1: Formulario N° $row[0] del Postulante N° $row[15];
----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	Talon 2: Formulario N° $row[0] del Postulante N° $row[15];
	
Perfil del Candidato:
Caracteristicas Seleccionadas:
$row[4];
	
Observaciones Adicionales:
$row[5];

Datos de la Persona que Propone al Candidato
Apellido y Nombre: $row[12]
Dni: $row[11]
Telefono: $row[13]
Jurisdiccion: $row[3]
";
//incluimos la libreria que sirve para crear el PDF
include ("fpdf/fpdf.php"); 
//verificamos si se completado ya el textarea y 
//le dio click en el boton de convertir a pdf
//caso contrario mostramos el formulario
if (!isset($_POST['ok'])){ ?>
      <form name='convertir_pdf' id='convertir_pdf' method='post' action='#'>
        <textarea name='contenido' cols='90' rows='20' disabled="disabled" readonly="readonly"><?php echo $imprime;?></textarea>
        <br />
        <input type='submit' name='ok' value='Imprimir'  />
    </form></td>
    <?php }else{ 
//en el caso que ya se haya echo click en el boton 
//de convertir a pdf entra aqui
?>
<?php echo "<u><b>".$imprime."</b></u>"; 
//de aqui y hasta donde esta la marca es 
//el script encargado de generar el pdf
//con el texto que esta dentro del Textarea

//instaciamos un objeto y le indicamos las 
//propiedades del documento (orientacion, unidad de medida y tamaño)
$pdf = new FPDF('P','mm','Letter'); 
$pdf->AliasNbPages(); //como queremos que se muestre el paginado
$pdf->AddPage();//creamos una hoja nueva

$pdf->SetFont('Arial','B', 12);//selecciones la fuente, estilo y tamaño

//ahora insertamos el texto del textarea dentro 
//de una multicelda, si tienes problemas con la 
//presentacion del contenido intenta utilizando 
//el utf8_decode, las propiedades de Multicell
//es ancho, alto, contenido, bordo, alineacion, relleno
$nvo=utf8_decode($imprime);
$pdf->MultiCell(0,7,$nvo,1,'J',0);

$pdf->Output("ejemplo.pdf","F"); //le indicamos la salida del documento

//se puede utilizar javascript para abrir en una nueva ventana
//el documento pdf generado
echo "<script language='javascript'>
		window.open('ejemplo.pdf','_blank','');
      </script>";

?>
</div>
<?php } 
?>
  </tr>
</table>
</body>
</html>
