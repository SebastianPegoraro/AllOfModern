<?php 
include("conect.php");
$dni=$_GET['dni'];
//Controla que la persona este en el padron
conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT dni FROM padron_electoral WHERE dni=$dni");
	desconectar();
	$row = mysql_fetch_array($result);
	$evaluado=$row[0];	
if($evaluado==""){
	header("Location: error.html");
	exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Empleado Publico 2015</title>
<link rel="shortcut icon" href="img/icono.ico" />
<style type="text/css">
body {
	background-color: #999;
}
</style>
</head>
<body>
<table width="476" height="395" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th height="173" bgcolor="#FFFFFF" scope="row"><img src="img/emp.png" alt="" width="301" height="169" /></th>
  </tr>  
  <tr>
    <th align="center" bgcolor="#FFFFFF" scope="row"><h3 style="color:#006">Dejanos tu sugerencia y/o comentario sobre el premio</h3></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="row">
     <form id="form1" name="form1" method="post" action="guardacomen_sinvotos.php">
      <p>
        <label for="comenta"></label>
        <br />
        <textarea name="comenta" id="comenta" cols="50" rows="10"></textarea>
        <input name="oculto" type="hidden" id="oculto" value="<?php echo $dni; ?>" />
      </p>
      <p>
        <input type="submit" name="button" id="button" value="Enviar Comentario" />
      </p>
    </form>
   </th>
  </tr>
</table>
</body>
</html>
