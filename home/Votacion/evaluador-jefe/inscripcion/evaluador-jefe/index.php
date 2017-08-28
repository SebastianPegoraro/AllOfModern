<?php include("conect.php");
error_reporting(0);
$postulante=$_GET['dni'];
conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT dnipostul, NomyApePos, oficina, npostulante, evaluado FROM padronfinal WHERE dnipostul=$postulante");
	desconectar();
	$row = mysql_fetch_array($result);
	$dni=$row[0];
	$apeynom=$row[1];
	$oficina=$row[2];
	$npostul=$row[3];
	$evaluado=$row[4];
if(($evaluado=="Si") || ($dni=="")){
	header("Location: error.html");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="img/icono.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Principal</title>
<style type="text/css">
body {
	background-color: #999;
}
</style>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

<script language=JavaScript>
function subir() {
   var myForm = document.form1;
   myForm.cargo.focus();
   }
</script>
</head>

<body>
<table width="684" height="446" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th height="167" align="center" valign="middle" bgcolor="#FFFFFF" scope="row"><h1><img src="img/emp.png" alt="" width="466" height="186" /></h1></th>
  </tr>
  <tr>
    <th align="left" valign="top" bgcolor="#FFFFFF" scope="row"><form id="form1" name="form1" method="post" action="Principal.php">
      <table width="100%" border="0" cellspacing="4">
        <tr>
          <th colspan="2" bgcolor="#88C53F" scope="row"><h2>Planilla de Evaluación</h2>
          </th>
        </tr>
<!-- Agregado-->	
	<th align="left" valign="middle" scope="row">Datos del Postulante</th> 
        <tr>
          <th align="left" valign="middle" scope="row">Nombre del agente:</th>
          <th align="left" valign="top" scope="row"><label for="apeynom"></label>
            <input name="apeynom" type="text" id="apeynom" value="<?php echo $apeynom; ?>" size="50" readonly="readonly" /></th>
        </tr>
        <tr>
          <th width="264" align="left" valign="middle" scope="row">Oficina en la que trabaja: </th>
          <th width="300" align="left" valign="top" scope="row"><input name="oficina" type="text" id="oficina" value="<?php echo $oficina; ?>" size="50" readonly="readonly" /></th>
        </tr>
        <tr>
          <th width="264" align="left" valign="middle" scope="row">DNI: </th>
          <th align="left" valign="top" scope="row"><input name="dni" type="text" id="dni" value="<?php echo $dni; ?>" size="50" readonly="readonly" /></th>
        </tr>
        <tr>
          <th width="264" align="left" valign="middle" scope="row">Cargo: </th>
          <th align="left" valign="top" scope="row"><span id="sprytextfield1">
            <label for="cargo"></label>
            <input name="cargo" type="text" id="cargo" size="50" />
            <span class="textfieldRequiredMsg"><br />
            Ingresar Cargo del Postulante.</span></span>            <input name="npostul" type="hidden" id="npostul" value="<?php echo $npostul; ?>" /></th>
        </tr>
	<tr>
<!--agregado-->
	<tr>
	</tr>
	<th align="left" valign="middle" scope="row">Datos del Jefe-evaluador</th>
	
	<tr> 
	  <th align="left" valign="middle" scope="row">Nombre y Apellido:</th>
          <th align="left" valign="top" scope="row"><span id="sprytextfield2"><label for="apynomjefe"></label>
            <input name="apynomjefe" type="text" id="apynomjefe" size="50"/>
	    <span class="textfieldRequiredMsg"><br />
	    Ingresar Apellido y Nombre del Jefe.</span></span>
	  </th>
	</tr>
	
	<tr>
	<th align="left" valign="middle" scope="row">Cargo:</th>
          <th align="left" valign="top" scope="row"><span id="sprytextfield3"><label for="cargojefe"></label>
            <input name="cargojefe" type="text" id="cargojefe" size="50"/>
	    <span class="textfieldRequiredMsg"><br />
	    Ingresar Cargo del Jefe.</span></span>
	  </th>
	</tr>
	
	<tr>
	<th align="left" valign="middle" scope="row">Email:</th>
          <th align="left" valign="top" scope="row"><span id="sprytextfield4"><label for="mailjefe"></label>
            <input name="mailjefe" type="text" id="mailjefe" size="50"/>
	    <span class="textfieldRequiredMsg"><br />
	    Ingresar Email del Jefe.</span></span>
	  </th>
	</tr>
	</tr>
        <tr>
          <th colspan="2" align="left" valign="middle" scope="row"><p>Instrucciones de llenado:</p>
            <p>A continuación se detallan nueve (9) características acordes al perfil que debe reunir aquel empleado postulante al “Premio al Empleado Público del Año”. La suma total de los conceptos a evaluar es de 90 puntos. Cada concepto representa 10 puntos del total de la evaluación. </p>
            <p>Cada concepto contempla dos (2) atributos con un valor de 5 puntos cada uno. </p>
            <p>El jefe, evaluará a su empleado en cada atributo, seleccionando el casillero de “Siempre”, “Regularmente” o “nunca”, según corresponda. </p>
            <p>En caso de no ser posible hacer una valoración de algún atributo, deberá marcar “NS/ NC”.</p>
            <p>Si en la evaluación del jefe, el agente evaluado presenta siempre el atributo evaluado tendrá el total del puntaje que es de 5 puntos, si lo presenta regularmente tendrá la mitad del puntaje que será de 2,5 puntos y si nunca lo presenta no tendrá puntaje.</p>
            <p>Seleccionar la opción que usted considera es más apropiada para el empleado que se encuentra evaluando. Todos los campos son obligatorios, para ser valida la evaluación. </p>
            <p>Las observaciones no son campos obligatorios, pero servirán de aporte al momento en que el jurado realice la evaluación de las postulaciones.</p></th>
        </tr>
        <tr>
          <th colspan="2" align="center" valign="middle" scope="row"><input type="submit" name="Consultar" id="Consultar" value="Realizar Evaluacion" onclick="subir()"/></th>
        </tr>
      </table>
    </form></th>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
</body>
</html>
