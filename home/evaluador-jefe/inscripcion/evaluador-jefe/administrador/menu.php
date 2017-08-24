<?php 
error_reporting(0);
$inden=$_GET['iden'];
if($inden==""){
	header("Location: index.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<table width="315" height="248" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th height="204" scope="row"><img src="../img/emp.png" width="303" height="200" /></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="row"> <table width="301" border = '0' align="center">
      <tr> </tr>
      <tr> </tr>
    </table>
    <p><a href="consultas.php?pasa=1">Listado de Personas Evaluadas</a></p>
    <p><a href="consultas.php?pasa=2">Listado de Personas por Evaluar</a></p>
    <p><a href="busqueda.php">Busqueda</a></p>
    <p>&nbsp;</p></th>
  </tr>
  <tr>
    <th align="right" bgcolor="#FFFFFF" scope="row"><a href="index.php">Salir</a></th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>