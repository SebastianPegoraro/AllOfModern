<?php 
include("conect.php");
//controlar seguridad
$dnipost=$_REQUEST['postul'];
$jurpost=$_REQUEST['jurpost'];
$votante=$_REQUEST['votante'];
if($dnipost==""){
	header("Location: index.html");
	}
//Tiramos una consulta a la base para traer los datos
//Postulante
conectar();
	$result = mysql_query("SELECT JurDenominacion, ApellidoyNombres, OfiDenomin FROM padron WHERE Documento=$dnipost and Jur=$jurpost");
	desconectar();
	$row = mysql_fetch_array($result);
	$jurdenomin=$row[0];
	$apeynompost=$row[1];
	$ofi=$row[2];
//Votante
conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT ApellidoyNombres FROM padron WHERE Documento=$votante and Jur=$jurpost");
	desconectar();
	$row = mysql_fetch_array($result);
	$apeynomvot=$row[0];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario</title>
<style type="text/css">
body {
	background-color: #006;
}
</style>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function ocultar($nombre){
	if ($nombre.style.display=='none'){
	$nombre.style.display='block'; 
	$nombre.required="required";
	}
	else {
	$nombre.style.display='none'; 
	$nombre.required=false;
	}
	}
</script>
</head>
<?php session_start();
error_reporting(0);
?>
<body>
<table width="1033" height="446" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th width="710" height="167" bgcolor="#FFFFFF" scope="row"><h1>Formulario Empleado Publico<br />
      <br />
      2013</h1></th>
    <th width="301" bgcolor="#FFFFFF" scope="row"><img src="emp.png" width="100%" height="200" /></th>
  </tr>
  <tr>
    <th colspan="2" align="left" valign="top" bgcolor="#FFFFFF" scope="row"><form id="form1" name="form1" method="post" action="guarda.php">
      <table width="1013" border="0" cellspacing="4">
        <tr>
          <th width="558" bgcolor="#FFFFFF" scope="row"><h2>Por Favor Complete los Datos del Postulante</h2>
          </th>
        </tr>
        <tr>
          <th scope="row"><table width="100%" border="0" cellspacing="4">
            <tr>
              <th width="22%" align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Apellido Y Nombre</th>
              <th width="28%" bgcolor="#FFFFFF" scope="row"><label for="dni">
                <input name="apeynom" type="text" id="apeynom" value="<?php echo $apeynompost;?>" size="40" readonly="readonly"/>
              </label></th>
              <td width="22%" align="center" valign="middle" bgcolor="#FFFFFF">Dirección Laboral<br /></td>
              <td width="28%" align="left" bgcolor="#FFFFFF"><input name="direc" type="text" id="direc" size="40" /></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Jurisdicción</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="jur" type="text" id="jur" value="<?php echo $jurdenomin;?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Teléfono Laboral*</td>
              <td align="left" bgcolor="#FFFFFF"><span id="telef">
              <input name="telef" type="text" id="telef" size="40" />
              <br />
              <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldMinCharsMsg"><br />
              No se cumple el mínimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres(12).</span></span></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Oficina</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="oficina" type="text" id="oficina" value="<?php echo $ofi;?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Dependencia</td>
              <td align="left" bgcolor="#FFFFFF"><input name="depen" type="text" id="depen" size="40" /></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">DNI</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="dni" type="text" id="dni" value="<?php echo $dnipost;?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Localidad</td>
              <td align="left" bgcolor="#FFFFFF"><input name="local" type="text" id="local" size="40" /></td>
            </tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              </tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row"><p>&nbsp;</p>
                <h2>Seleccione los Rasgos que Caracterizan al Postulante</h2>
                <table width="100%" height="466" border="1" cellspacing="4">
                  <tr>
                    <th width="100%" height="456" align="left" valign="top" bgcolor="#FFFFFF" scope="row"><table width="100%" height="327">
                      <tr>
                        <td height="45" colspan="4" align="left" valign="middle">Al menos 1 Característica deberá Seleccionar*</td>
                        </tr>
                      <tr>
                        <td width="25%" height="45" align="left" valign="middle"><input type="checkbox" name="caracteristicas1" value="Compromiso"  id="caracteristicas_4" onchange="ocultar(obser1);"/>
                        Compromiso y Responsabilidad</td>
                        <td width="27%" align="left" valign="middle"><label for="obser1"></label>
                          <textarea name="obser1" id="obser1" cols="30" rows="3" style="display:none" onfocus="this.value='';"></textarea></td>
                        <td width="20%" align="left" valign="middle"><input type="checkbox" name="caracteristicas6" value="Honestidad"  id="caracteristicas_8" onchange="ocultar(obser6);" />
Honestidad</td>
                        <td width="28%" align="left" valign="middle"><textarea name="obser6" id="obser6" cols="30" rows="3" style="display:none" onfocus="this.value='';"></textarea></td>
                        </tr>
                      <tr>
                        <td height="45" align="left" valign="middle"><input type="checkbox" name="caracteristicas2" value="Dedicacion" id="caracteristicas_0" onchange="ocultar(obser2);"/>
Dedicación</td>
                        <td height="45" align="left" valign="middle"><textarea name="obser2" id="obser2" cols="30" rows="3" style="display:none" onfocus="this.value='';"></textarea></td>
                        <td align="left" valign="middle"><input type="checkbox" name="caracteristicas7" value="Respeto" id="caracteristicas_5"  onchange="ocultar(obser7);"/>
                          Respeto a su persona y a sus pares</td>
                        <td align="left" valign="middle"><textarea name="obser7" id="obser7" cols="30" rows="3" style="display:none" onfocus="this.value='';"></textarea></td>
                        </tr>
                      <tr>
                        <td height="60" align="left" valign="middle"><input type="checkbox" name="caracteristicas3" value="Superacion" id="caracteristicas_1" onchange="ocultar(obser3);" />
Deseos de Superación</td>
                        <td height="60" align="left" valign="middle"><textarea name="obser3" id="obser3" cols="30" rows="3" style="display:none" onfocus="this.value='';"></textarea></td>
                        <td align="left" valign="middle"><input type="checkbox" name="caracteristicas8" value="Puntualidad" id="caracteristicas_6" onchange="ocultar(obser8);"/>
Puntualidad</td>
                        <td align="left" valign="middle"><textarea name="obser8" id="obser8" cols="30" rows="3" style="display:none" onfocus="this.value='';"></textarea></td>
                        </tr>
                      <tr>
                        <td height="60" align="left" valign="middle"><input type="checkbox" name="caracteristicas4" value="Proactividad" id="caracteristicas_2" onchange="ocultar(obser4);" />
Pro actividad</td>
                        <td height="60" align="left" valign="middle"><textarea name="obser4" id="obser4" cols="30" rows="3" style="display:none" onfocus="this.value='';"></textarea></td>
                        <td align="left" valign="middle"><input type="checkbox" name="caracteristicas9" value="Colaboracion" id="caracteristicas_7" onchange="ocultar(obser9);"/>
Colaboración y Cooperación</td>
                        <td align="left" valign="middle"><textarea name="obser9" id="obser9" cols="30" rows="3" style="display:none" onfocus="this.value='';"></textarea></td>
                        </tr>
                      <tr>
                        <td height="56" align="left" valign="middle"><input type="checkbox" name="caracteristicas5" value="Aprendizaje"  id="caracteristicas_3" onchange="ocultar(obser5);"/>
Aprendizaje Continuo</td>
                        <td height="56" align="left" valign="middle"><textarea name="obser5" id="obser5" cols="30" rows="3" style="display:none" onfocus="this.value='';"></textarea></td>
                        <td align="left" valign="middle">&nbsp;</td>
                        <td align="left" valign="middle">&nbsp;</td>
                        </tr>
                      </table>
                      <p>&nbsp;</p>
                      <table width="100%" height="186" border="0,5" cellspacing="4">
                        <tr>
                          <th colspan="6" scope="row"><h2>Complete sus Datos Personales Faltantes</h2></th>
                          </tr>
                        <tr>
                          <th width="18%" height="26" align="left" scope="row">Nombre y Apellido</th>
                          <th width="25%" scope="row"><input name="apynomvot" type="text" id="textfield2" value="<?php echo $apeynomvot;?>" size="40" readonly="readonly"/></th>
                          <th width="13%" scope="row"><label for="apynomvot"></label></th>
                          <td width="10%">DNI</td>
                          <td width="28%"><input name="dnivot" type="text" id="textfield6" value="<?php echo $votante?>" size="40" readonly="readonly"/></td>
                          <td width="6%"><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">Jurisdicción</th>
                          <th height="26" scope="row"><input name="jurvot" type="text" id="textfield3" value="<?php echo $jurdenomin;?>" size="40" readonly="readonly"/></th>
                          <th scope="row"><label for="apynomvot"></label></th>
                          <td>Teléfono*</td>
                          <td><span id="telvot">
                          <input name="telvot" type="text" id="telvot" size="40" />
                          <br />
                          <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldMinCharsMsg">No se cumple el mínimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres(12).</span></span></td>
                          <td><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">Correo Electrónico*</th>
                          <th height="26" scope="row"><span id="sprytextfield3">
                          <label for="emailvot"></label>
                          <input name="emailvot" type="text" id="emailvot" size="40" />
                          <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span></span></th>
                          <th scope="row"><label for="apynomvot"></label></th>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">&nbsp;</th>
                          <th height="26" scope="row">&nbsp;</th>
                          <th scope="row"><a href="index.html">Volver a Ingresar Datos</a></th>
                          <td colspan="2" align="center"><input type="submit" name="button2" id="button2" value="Confirmar la Votacion" /></td>
                          <td>&nbsp;</td>
                          </tr>
                        </table>
                      </th>
                  </tr>
                </table>
              </th>
            </tr>
          </table></th>
        </tr>
      </table>
    </form></th>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("telvot", "none", {minChars:7, maxChars:12, hint:"362-4411111"});
var sprytextfield2 = new Spry.Widget.ValidationTextField("telef", "none", {minChars:7, maxChars:12, hint:"362-4411111"});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
</script>
</body>
</html>