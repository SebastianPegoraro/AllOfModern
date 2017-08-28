<?php include("../conect.php");
header("Content-Type: text/html;charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
error_reporting(0);
$busca=$_POST['dni'];
if($busca!=""){
	abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT  JurDenominacion, Documento, ApellidoyNombres, SrevDen, OfiDenomin FROM padron WHERE Documento='$busca'");
	cerrarBase();
}
?>
<table width="1056" border="1" align="center" cellspacing="4" bgcolor="#FFFFFF">
  <tr>
    <th width="189" height="101" bgcolor="#FFFFFF" scope="row"><h1>Situacion del Postulante o Empleado</h1></th>
    <td width="303" align="right" bgcolor="#FFFFFF"><img src="../emp.png" width="303" height="200" /></td>
  </tr>
  <tr>
    <th height="65" colspan="2" scope="row"><form id="form1" name="form1" method="post" action="consulta.php">
      <table width="100%" border="0" cellspacing="4">
        <tr>
          <th width="13%" align="left" valign="top" bgcolor="#FFFFFF" scope="row">Ingrese Dni:
</th>
          <th width="48%" align="left" valign="top" bgcolor="#FFFFFF" scope="row"><input type="text" name="dni" id="dni" />
            <br />
            <br />
            <input type="submit" name="button" id="button" value="Buscar" /></th>
          <th width="39%" align="left" valign="top" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
          </tr>
      </table>
    </form></th>
  </tr>
  <tr>
    <th height="65" colspan="2" scope="row"><table width="100%" border="1" cellspacing="4" bgcolor="#CCCCCC">
      <tr>
        <th width="11%" align="left" bgcolor="#FFFFFF" scope="row">Dni </th>
        <td width="25%" bgcolor="#FFFFFF">Apellido y Nombre</td>
        <td width="27%" bgcolor="#FFFFFF">Jurisdiccion</td>
        <td width="17%" bgcolor="#FFFFFF">Situacion de Revista</td>
        <td width="20%" bgcolor="#FFFFFF">Oficina</td>
        </tr>
      <?php
       while ($row = mysql_fetch_array($result)){
       ?>
      <tr>
        <th align="left" bgcolor="#FFFFFF" scope="row"><?php echo $row['Documento']; ?></th>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['ApellidoyNombres']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['JurDenominacion']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['SrevDen']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['OfiDenomin']; ?></td>
        </tr>
      <?php }?>
    </table></th>
  </tr>
</table>
</body>
</html>
