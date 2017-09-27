<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<script src="../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #006;
}
</style>
</head>

<body>
<table width="315" height="248" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th height="204" scope="row"><img src="../img/emp.png" width="303" height="200" /></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="row">
      <form id="form1" name="form1" method="post" action="ingreso.php">
        <table width="301" border = '0' align="center">
          <tr>
            <td colspan="2" align="center" valign="middle"><h2><u>Ingreso Administracion</u></h2>
         </td>
          </tr>
          <tr>
            <td width="95">Usuario</td>
            <td width="190" align="center"><label for="usuario2"></label>
              <span id="sprytextfield1">
              <input type="text" name="usuario" id="usuario" />
              <br />
            <span class="textfieldRequiredMsg">Se necesita un valor.</span></span></td>
          </tr>
          <tr>
            <td>Contraseña</td>
            <td align="center"><label for="contrasena"></label>
              <label for="contrasena"></label>
            <input type="password" name="contrasena" id="contrasena" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><p>
              <input type="submit" name="button" id="button" value="Ingresar" />
            </p></td>
          </tr>
        </table>
      </form>
      </th>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
</script>
</body>
</html>