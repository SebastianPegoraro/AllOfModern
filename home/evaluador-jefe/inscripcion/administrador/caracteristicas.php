<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<?php include("../conect.php");
error_reporting(0);
$busca=$_POST['dni'];
abrirBase();
$resEmp = mysql_query("SELECT dnipost,caract,descrip FROM `obser` where dnipost=$busca");
cerrarBase();
?>
</head>

<body>
<table width="921" border="1" align="center" cellspacing="4" bgcolor="#FFFFFF">
  <tr>
    <th width="189" height="101" bgcolor="#FFFFFF" scope="row"><h1>Listados</h1></th>
    <td width="303" align="right" bgcolor="#FFFFFF"><img src="../emp.png" alt="" width="303" height="200" /></td>
  <tr>
    <th height="65" colspan="2" scope="row"><table width="100%" border="1" cellspacing="4" bgcolor="#CCCCCC">
      <tr>
        <th width="11%" align="center" bgcolor="#FFFFFF" scope="row">Dni </th>
        <th width="45%" align="center" bgcolor="#FFFFFF" scope="row">Caracteristica</th>
        <th width="44%" align="center" bgcolor="#FFFFFF" scope="row">Descripcion</th>
        </tr>
      <?php
       while ($row = mysql_fetch_array($resEmp)){
       ?>
      <tr>
        <th align="left" bgcolor="#FFFFFF" scope="row"><? echo $row['dnipost'];?></th>
        <th align="left" bgcolor="#FFFFFF" scope="row"><? echo $row['caract'];?></th>
        <th align="left" bgcolor="#FFFFFF" scope="row"><? echo $row['descrip'];?></th>
        </tr>
      <?php }?>
    </table></th>
  </tr>
</table>
</body>
</html>
