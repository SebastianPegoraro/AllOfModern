<?php include("../conect.php")?>
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
$dni=$_REQUEST['dni']; 
session_start();
$_SESSION['dni']=$dni;
	conectar();
	$result = mysql_query("SELECT dnipostul, NomyApePos, juris, dnivot, NomyApeVot, TelVot FROM votos WHERE dnivot=$dni");
	desconectar();
	$row = mysql_fetch_array($result);
?>

<table width="851" height="248" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th height="204" bgcolor="#FFFFFF" scope="row"><img src="../emp.png" width="303" height="200" /></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="row"> <table width="301" border = '0' align="center">
      <tr> </tr>
      <tr> </tr>
    </table>
      <form id="form1" name="form1" method="post" action="guardar.php">
        <table width="100%" border="0" cellspacing="4">
          <tr>
            <th width="51%" align="left" scope="row"><h1>Datos Postulante</h1></th>
            <td width="49%" align="left"><h1>Informacion del Voto</h1></td>
          </tr>
          <tr>
            <th align="left" scope="row"><h3>Dni: 
              <input name="dnipost" type="text" disabled="disabled" id="dnipost" value="<?php echo $row[dnipostul];?>" readonly="readonly" />
            </h3></th>
            <td align="left"><h3>Dni Votante: 
              <input name="dnivot" type="text" disabled="disabled" id="dnivot" value="<?php echo $row[dnivot];?>" readonly="readonly" />
            </h3></td>
          </tr>
          <tr>
            <th align="left" scope="row"><h3>Apellido y Nombre: <?php echo $row[NomyApePos];?></h3></th>
            <td align="left"><h3>Apellido y Nombre: <?php echo $row[NomyApeVot];?></h3></td>
          </tr>
          <tr>
            <th align="left" scope="row"><h3>Jurisdiccion: <?php echo $row[juris];?></h3></th>
            <td align="left"><h3>Telefono Contacto: <?php echo $row[TelVot];?></h3></td>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <th scope="row"><h3>Agregar Observacion de la Auditoria:</h3></th>
            <td><textarea name="obser" id="obser" cols="45" rows="5"></textarea></td>
          </tr>
          <tr>
            <th colspan="2" scope="row"><br />              <input type="submit" name="button" id="button" value="Guardar Auditoria" /></th>
          </tr>
        </table>
      </form>
</th>
  </tr>
</table>
</body>
</html>