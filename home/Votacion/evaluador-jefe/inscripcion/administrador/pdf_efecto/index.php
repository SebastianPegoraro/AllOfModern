<!-- http://www.AprendeAProgramarEnPHPya.com/blog -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>.:: CREANDO UN PDF SIMPLE CON PHP ::.</title>
<link href="estilo.css" type="text/css" rel="stylesheet" />

<!-- Aqui vamos a poner el codigo que realiza la animación -->
<script src='js/jquery-1.7.2.min.js' type='text/javascript'></script>
<script>
$(document).ready(function(){
   //código a ejecutar cuando el DOM está listo para recibir instrucciones.   
   
   //ocultamos el div carga,  
   $("#carga").css("height", $(document).height()).hide();
   
   //una vez que se da click en el boton submit
   //se muestra el div que tiene el efecto de 
   //cargando
   $('#convertir_pdf').submit(function(){
	   $('#carga').show(0);//muestra el div carga 
	   return true; 
   });
     
});
</script>
<!-- aqui termina la parte del script -->
</head>

<body>
<?php 
//incluimos la libreria que sirve para crear el PDF
include ("fpdf/fpdf.php"); 
//verificamos si se completado ya el textarea y 
//le dio click en el boton de convertir a pdf
//caso contrario mostramos el formulario
if (!isset($_POST['ok'])){ ?>

<div id='contenido'>

<form name='convertir_pdf' id='convertir_pdf' method='post' action='#'>
<b>Hola, en el siguiente cuadro de texto anota lo que deseas pasar a PDF:<br /></b>
<textarea name='contenido' rows='20' cols='50'></textarea><br />
<input type='submit' name='ok' value='Convertir a PDF'  />
</form>
</div>

<?php }else{ 
//en el caso que ya se haya echo click en el boton 
//de convertir a pdf entra aqui
?>
<div id='pdf'>
Ahora espera en lo que se carga el <strong>documento PDF</strong><br />
Con lo que tú has escrito en el textarea:<br /> 

<?php echo "<u><b>".$_POST['contenido']."</b></u>"; 
//de aqui y hasta donde esta la marca es 
//el script encargado de generar el pdf
//con el texto que esta dentro del Textarea

//instaciamos un objeto y le indicamos las 
//propiedades del documento (orientacion, unidad de medida y tamaño)
$pdf = new FPDF('P','mm','Letter'); 
$pdf->AliasNbPages(); //como queremos que se muestre el paginado
$pdf->AddPage();//creamos una hoja nueva

$pdf->SetFont('Arial','B', 10);//selecciones la fuente, estilo y tamaño

//ahora insertamos el texto del textarea dentro 
//de una multicelda, si tienes problemas con la 
//presentacion del contenido intenta utilizando 
//el utf8_decode, las propiedades de Multicell
//es ancho, alto, contenido, bordo, alineacion, relleno
$nvo=utf8_decode($_POST['contenido']);
$pdf->MultiCell(0,7,$nvo,1,'J',0);

$pdf->Output("ejemplo.pdf","F"); //le indicamos la salida del documento

//se puede utilizar javascript para abrir en una nueva ventana
//el documento pdf generado
echo "<script language='javascript'>
		window.open('ejemplo.pdf','_blank','');
      </script>";
?>
</div>
<?php } ?>
<!-- este div (carga) es para el efecto 
y el div cargando es para ubicar la imagen
gif al centro de la ventana -->
<div id='carga'>
	<div id='cargando'>
    	<img src="img/cargando.gif" width="300" height="200" />
     </div>
</div>
</body>
</html>