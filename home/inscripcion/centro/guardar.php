<table width="315" height="248" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th height="204" scope="row"><img src="../emp.png" width="303" height="200" /></th>
  </tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="row"> 
      <table width="301" border = '0' align="center">
        <tr>
          <td width="285" align="center" valign="middle"><h3><strong>Datos Actualizados <br />
            <br />
            <a href="principal.php">volver al menu principal</a></strong></h3></td>
          </tr>
      </table>
      <table width="301" border = '0' align="center">
        <tr> </tr>
        <tr> </tr>
    </table></th>
</tr>
  <tr>
    <th bgcolor="#FFFFFF" scope="row">
      <table width="301" border = '0' align="center">
        <tr> </tr>
        <tr> </tr>
      </table>
</th>
  </tr>
</table>
<?php include("../conect.php")?>
<?php 
session_start();
$dni=$_SESSION['dni'];
$ob=$_POST['obser'];
conectar();
mysql_query("Update votos SET auditado='Si', obseraudi='$ob' WHERE dnivot='$dni'");
desconectar();
?>