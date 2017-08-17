<?php 
header("Content-Type: text/html;charset=utf-8");
include("../conect.php")?>
<?php include("segur.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php 
error_reporting(0);
	abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT dnipostul, NomyApePos, juris, dnivot, NomyApeVot FROM votos WHERE auditado='No'");
	cerrarBase();
?>
<table width="1056" border="1" align="center" cellspacing="4" bgcolor="#FFFFFF">
  <tr>
    <th width="189" height="101" bgcolor="#FFFFFF" scope="row"><h1>Listado de Personas<br />
NO Auditadas</h1></th>
    <td width="303" align="right" bgcolor="#FFFFFF"><img src="../emp.png" width="303" height="200" /></td>
  </tr>
  <tr>
    <th height="65" colspan="2" scope="row"><table width="100%" border="1" cellspacing="4" bgcolor="#CCCCCC">
      <tr>
        <th width="11%" align="left" bgcolor="#FFFFFF" scope="row">Dni Postulante</th>
        <td width="19%" bgcolor="#FFFFFF">Apellido y Nombre Postulante</td>
        <td width="20%" bgcolor="#FFFFFF">Jurisdiccion</td>
        <td width="11%" bgcolor="#FFFFFF">Dni Votante</td>
        <td width="19%" bgcolor="#FFFFFF">Apellido y Nombre Votante</td>
        </tr>
      <?php
       while ($row = mysql_fetch_array($result)){
       ?>
      <tr>
        <th align="left" bgcolor="#FFFFFF" scope="row"><?php echo $row['dnipostul']; ?></th>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['NomyApePos']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['juris']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['dnivot']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><a href="muestra.php?dni=<?php echo $row["dnivot"];?>"><?php echo $row['NomyApeVot']; ?></a></td>
        </tr>
      <?php }?>
    </table></th>
  </tr>
</table>
</body>
</html>
