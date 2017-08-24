<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ciudadanos</title>
<script src="../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #006;
}
.color {
	color: #88C53F;
}
</style>
</head>

<body>
<p>&nbsp;</p>
<table width="668" height="250" border="1" align="center" cellspacing="4" bgcolor="#FFFFFF">
  <tr>
    <th width="357" height="61" bgcolor="#FFFFFF" scope="row"><h2 class="color">Inscripción <br />
      de<br />
      Ciudadanos<br />
      Para<br />
      el<br />
    Tribunal Evaluador</h2></th>
    <td width="289"><img src="../emp.png" width="100%" height="200" /></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <th colspan="2" scope="row"><form id="form1" name="form1" method="post" action="guarda.php">
      <table width="100%" border="0" cellspacing="4">
        <tr>
          <th width="206" align="left" bgcolor="#FFFFFF" scope="row">DNI*</th>
          <td width="426" align="left" bgcolor="#FFFFFF"><span id="sprytextfield1">
          <input name="dni" type="text" id="dni" size="45" />
          <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span><span class="textfieldMinCharsMsg">No se cumple el mínimo de caracteres requerido.</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres.</span></span></td>
        </tr>
        <tr>
          <th align="left" bgcolor="#FFFFFF" scope="row">Apellido y Nombre*</th>
          <td align="left" bgcolor="#FFFFFF"><span id="sprytextfield2">
            <input name="nomyape" type="text" id="nomyape" size="45" />
            <span class="textfieldRequiredMsg">Se necesita un valor.</span></span></td>
        </tr>
        <tr>
          <th align="left" bgcolor="#FFFFFF" scope="row">Telefono Contacto*</th>
          <td align="left" bgcolor="#FFFFFF"><span id="sprytextfield3">
          <input name="tel" type="text" id="tel" size="45" />
          <br />
          <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span><span class="textfieldMinCharsMsg">No se cumple el mínimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres.</span></span></td>
        </tr>
        <tr>
          <th align="left" bgcolor="#FFFFFF" scope="row">Dirección</th>
          <td align="left" bgcolor="#FFFFFF"><input name="dccion" type="text" id="dccion" size="45" /></td>
        </tr>
        <tr>
          <th align="left" bgcolor="#FFFFFF" scope="row">Localidad</th>
          <td align="left" bgcolor="#FFFFFF"><input name="local" type="text" id="local" size="45" /></td>
        </tr>
        <tr>
          <th align="left" bgcolor="#FFFFFF" scope="row">Ocupación/Lugar de trabajo</th>
          <td align="left" bgcolor="#FFFFFF"><input name="ocupa" type="text" id="ocupa" size="45" /></td>
        </tr>
        <tr>
          <th align="left" bgcolor="#FFFFFF" scope="row">Email</th>
          <td align="left" bgcolor="#FFFFFF"><input name="email" type="email" id="email" size="45" /></td>
        </tr>
	<tr>
          <th align="left" bgcolor="#FFFFFF" scope="row">Medio por el cual se enteró del premio</th>
	  <th colspan="2" align="left" valign="middle" scope="row">
            <select name="codp" id="codp">
              <option value="1">Diario</option>
              <option value="2">Internet</option>
              <option value="3">Radio</option>
              <option value="4">Redes Sociales</option>
	      <option value="5">Otros</option>
            </select>
          </th>  
        </tr>
        <tr>
          <th align="right" bgcolor="#FFFFFF" scope="row"><p>&nbsp;
            </p>
            <p>
              <input type="reset" name="button2" id="button2" value="Restablecer" />
            </p></th>
          <th bgcolor="#FFFFFF" scope="row"><p>&nbsp;
            </p>
            <p>
              <input type="submit" name="button" id="button" value="Enviar" />
            </p></th>
          </tr>
	<th align="left">*Campos obligatorios.</th>
      </table>
    </form></th>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {validateOn:["blur"], minChars:7, maxChars:8});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"], minChars:7, maxChars:12});
</script>
</body>
</html>
