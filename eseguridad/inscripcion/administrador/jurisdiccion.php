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
$jur=$_POST['jur'];

	conectar();
	if($jur!=16){
	mysql_query("SET NAMES 'utf8'"); 
	$sql="SELECT JurDenominacion FROM padron WHERE Jur='$jur'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$jur=$row[0];
	echo "$jur";
	desconectar();
	}
	else{
	$jur='INSSSEP';
		}

	conectar();
	mysql_query("SET NAMES 'utf8'"); 
	$sql="SELECT dnipostul, NomyApePos, npostulante, COUNT( npostulante ) AS Votos FROM votos WHERE juris='$jur' GROUP BY npostulante order by(Votos) DESC";
	$result = mysql_query($sql);
	desconectar();
?>
<table width="1056" border="1" align="center" cellspacing="4" bgcolor="#FFFFFF">
  <tr>
    <th width="189" height="101" bgcolor="#FFFFFF" scope="row"><h1>Jurisdicciones</h1></th>
    <td width="303" align="right" bgcolor="#FFFFFF"><img src="../emp.png" width="303" height="200" /></td>
  </tr>
  <tr>
    <th height="40" colspan="2" scope="row"><form id="form1" name="form1" method="post" action="jurisdiccion.php">
      <table width="100%" border="0" cellspacing="4">
        <tr>
          <th width="45%" align="left" valign="top" bgcolor="#FFFFFF" scope="row">
            
              <select name="jur" id="jur">
                <option value="2">SECRETARIA GENERAL DE LA GOBERNACION</option>
                <option value="3">MINISTERIO DE GOBIERNO JUSTICIA Y SEGURIDAD</option>
                <option value="4">MINISTERIO DE HACIENDA Y FINANZAS</option>
                <option value="5">MINISTERIO DE PRODUCCION</option>
                <option value="6">MINISTERIO DE SALUD PUBLICA</option>
                <option value="10">INSTITUTO DE DESARROLLO URBANO Y VIVIENDA</option>
                <option value="12">LOTERIA CHAQUEÑA</option>
                <option value="14">INSTITUTO DE COLONIZACION</option>
                <option value="15">INSTITUTO DE INVESTIGACION FORESTAL Y AGROPECUARIA</option>
                <option value="16">INSSSEP</option>
                <option value="18">FISCALIA DE ESTADO</option>
                <option value="19">CONTADURIA GENERAL DE LA PROVINCIA</option>
                <option value="20">ADMINISTRACION TRIBUTARIA PROVINCIAL (A.T.P)</option>
                <option value="21">POLICIA PROVINCIAL</option>
                <option value="23">MINISTERIO DE INFRAESTRUCTURA Y SERVICIOS PUBLICOS</option>
                <option value="24">ADMINISTRACION PROVINCIAL DEL AGUA</option>
                <option value="25">INSTITUTO DEL ABORIGEN CHAQUEÑO</option>
                <option value="26">TESORERIA GENERAL DE LA PROVINCIA</option>
                <option value="28">MINISTERIO DE DESARROLLO SOCIAL</option>
                <option value="29">MINISTERIO DE EDUCACION CULTURA CIENCIA Y TECNOLOGIA</option>
                <option value="32">MINISTERIO DE PLANIFICACION Y AMBIENTE</option>
                <option value="34">INSTITUTO DE CULTURA DEL CHACO</option>
                <option value="39">ADMINISTRACION PUERTO DE BARRANQUERAS</option>
                <option value="42">INSTITUTO DE TURISMO DEL CHACO</option>
                <option value="45">MINISTERIO DE DESARROLLO URBANO Y TERRITORIAL</option>
                <option value="46">SECRETARIA DE DERECHOS HUMANOS</option>
                </select>
            </th>
          <td width="21%" align="left" valign="bottom" bgcolor="#FFFFFF"><a href="menu.php">
            <input type="submit" name="button" id="button" value="Filtrar" />
          </a></td>
          <td width="17%" align="right" valign="bottom" bgcolor="#FFFFFF"><a href="menu.php">Volver</a></td>
          <td width="17%" align="right" valign="bottom" bgcolor="#FFFFFF"><a href="juris.php?pasa=<?php echo "$sql";?>&jur=<?php echo "$jur";?>">Imprimir</a></td>
        </tr>
      </table>
    </form></th>
  </tr>
  <tr>
    <th height="65" colspan="2" scope="row"><table width="100%" border="1" cellspacing="4" bgcolor="#CCCCCC">
      <tr>
        <th width="9%" align="left" bgcolor="#FFFFFF" scope="row">Dni Postulante</th>
        <td width="24%" bgcolor="#FFFFFF">Apellido y Nombre</td>
        <td width="10%" bgcolor="#FFFFFF">Cantidad de Votos</td>
        <td width="8%" bgcolor="#FFFFFF">Numero Postulante</td>
      </tr>
      <?php
       while ($row = mysql_fetch_array($result)){
       ?>
      <tr>
        <th align="left" bgcolor="#FFFFFF" scope="row"><?php echo $row['dnipostul']; ?></th>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['NomyApePos']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['Votos']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['npostulante']; ?></td>
      </tr>
      <?php }?>
    </table></th>
  </tr>
</table>
</body>
</html>