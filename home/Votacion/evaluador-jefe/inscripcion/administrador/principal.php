<?php include("../conect.php");
header("Content-Type: text/html;charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Busquedas</title>
<style type="text/css">
body {
	background-color: #006;
}
</style>
<script languaje="javascript">
function a(){
votante.disabled = true;
postulante.disabled = true;
jur.disabled = true;
}
function b(){
votante.disabled = false;
postulante.disabled = true;
jur.disabled = true;
}
function c(){
votante.disabled = true;
postulante.disabled = false;
jur.disabled = true;
}
function d(){
votante.disabled = true;
postulante.disabled = true;
jur.disabled = false;
}
function e(){
votante.disabled = true;
postulante.disabled = true;
jur.disabled = true;
}
</script>
</head>

<body>
<?php 
error_reporting(0);
$busca=$_POST['busca'];
$votante=$_POST['votante'];
$postulante=$_POST['postulante'];
$jur=$_POST['jur'];

if($busca=='completo'){
	abrirBase();
        mysql_query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM votos ORDER BY CAST(npostulante AS SIGNED) ASC";
	//$sql="SELECT dnipostul, NomyApePos, juris, dnivot, NomyApeVot, npostulante FROM votos ORDER BY npostulante";
	$result = mysql_query($sql);
	cerrarBase();
//	$sql = "SELECT NomyApePos,juris, COUNT( npostulante ) AS Votos "."FROM votos "."GROUP BY npostulante order by(Votos) DESC";
//	$result = mysql_query($sql, $c);
//	cerrarBase($c);
//	$row = mysql_fetch_array($result);
	}
if($busca=='dnivot'){
	abrirBase();
        mysql_query("SET NAMES 'utf8'");
	$sql="SELECT dnipostul, NomyApePos, juris, dnivot, NomyApeVot, npostulante FROM votos WHERE dnivot='$votante'";
	$result = mysql_query($sql);
	cerrarBase();
	}
if($busca=='dnipost'){
	abrirBase();
        mysql_query("SET NAMES 'utf8'");
	$sql="SELECT dnipostul, NomyApePos, juris, dnivot, NomyApeVot, npostulante FROM votos WHERE dnipostul='$postulante'";
	$result = mysql_query($sql);
	cerrarBase();
	}
if($busca=='juris'){
	abrirBase();
	if($jur!=16){
        mysql_query("SET NAMES 'utf8'");
	$sql="SELECT JurDenominacion FROM padron WHERE Jur='$jur'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$jur=$row[0];
	cerrarBase();
	}
	else{
	$jur='INSSSEP';
		}
	abrirBase();
        mysql_query("SET NAMES 'utf8'");
	$sql="SELECT dnipostul, NomyApePos, juris, dnivot, NomyApeVot, npostulante FROM votos WHERE juris='$jur'";
	$result = mysql_query($sql);
	cerrarBase();
	}
if($busca=='conc'){
	abrirBase();
        mysql_query("SET NAMES 'utf8'");
	$sql="SELECT dnipostul, NomyApePos, juris, dnivot, NomyApeVot, npostulante FROM votos";
	$result = mysql_query($sql);
	cerrarBase();
	}
?>
<table width="1056" border="1" align="center" cellspacing="4" bgcolor="#FFFFFF">
  <tr>
    <th width="189" height="101" bgcolor="#FFFFFF" scope="row"><h1>Listados</h1></th>
    <td width="303" align="right" bgcolor="#FFFFFF"><img src="../emp.png" width="303" height="200" /></td>
  </tr>
  <tr>
    <th height="65" colspan="2" scope="row"><form id="form1" name="form1" method="post" action="principal.php">
      <table width="100%" border="0" cellspacing="4">
        <tr>
          <th width="28%" align="left" valign="top" bgcolor="#FFFFFF" scope="row"><p>
            <label>
              <input type="radio" name="busca" value="completo" id="busca_0" onchange="a()" />
              Listar Ordenados por N° Postulante</label>
            </p>
            <p>
              <label>
                <input type="radio" name="busca" value="dnivot" id="busca_1" onchange="b()"/>
                Buscar Por DNI Votante</label>
              <br />
              <br />
              <label>
                <input type="radio" name="busca" value="dnipost" id="busca_2" onchange="c()"/>
                Buscar Por DNi Postulante</label>
              <br />
              <br />
              <label>
                <input type="radio" name="busca" value="juris" id="busca_3" onchange="d()"/>
                Buscar Por Jurisdiccion</label>
              <br />
	      <br />
	      <!--Se agrego un nuevo radio button
		<label>
                <input type="radio" name="busca" value="conc" id="busca_4" onchange="e()"/>
                Buscar Por Concepto</label>
              <br />	-->
            </p></th>
          <td width="45%" align="left" valign="top" bgcolor="#FFFFFF">
            <p>&nbsp;</p>
            <p>
              <input name="votante" type="text" id="votante" size="40" />
              </p>
            <p>            
              <input name="postulante" type="text" id="postulante" size="40" />            
              </p>
            <p>
              <select name="jur" id="jur">
             <option value="3">MINISTERIO DE GOBIERNO JUSTICIA Y SEGURIDAD</option>
              <option value="4">MINISTERIO DE HACIENDA Y FINANZAS</option>
              <option value="5">MINISTERIO DE PRODUCCION</option>
              <option value="6">MINISTERIO DE SALUD PUBLICA</option>
              <option value="10">INSTITUTO DE DESARROLLO URBANO Y VIVIENDA</option>
              <option value="11">MINISTERIO DE INDUSTRIA,EMPLEO Y TRABAJO</option>
              <option value="12">LOTERIA CHAQUEÑA</option>
              <option value="14">INSTITUTO DE COLONIZACION</option>
              <option value="15">INSTITUTO DE INVESTIGACION FORESTAL Y AGROPECUARIA</option>
              <option value="16">INSSSEP</option>
              <option value="18">FISCALIA DE ESTADO</option>
              <option value="19">CONTADURIA GENERAL DE LA PROVINCIA</option>
              <option value="20">ADMINISTRACION TRIBUTARIA PROVINCIAL (A.T.P)</option>
              <option value="21">POLICIA PROVINCIAL</option>
              <option value="22">S.U.O.P.E.</option>
              <option value="23">MINISTERIO DE INFRAESTRUCTURA Y SERVICIOS PUBLICOS</option>
              <option value="24">ADMINISTRACION PROVINCIAL DEL AGUA</option>
              <option value="25">INSTITUTO DEL ABORIGEN CHAQUEÑO</option>
              <option value="26">TESORERIA GENERAL DE LA PROVINCIA</option>
              <option value="28">MINISTERIO DE DESARROLLO SOCIAL</option>
              <option value="29">MINISTERIO DE EDUCACION CULTURA CIENCIA Y TECNOLOGIA</option>
              <option value="32">MINISTERIO DE PLANIFICACION Y AMBIENTE</option>
              <option value="33">SECRETARIA DE INVERSIONES,ASUNTOS INTERNAC.Y PROM</option>
              <option value="34">INSTITUTO DE CULTURA DEL CHACO</option>
              <option value="36">SERVICIO PENITENCIARIO PROVINCIAL</option>
              <option value="37">IPRODICH</option>
              <option value="39">ADMINISTRACION PUERTO DE BARRANQUERAS</option>
              <option value="42">INSTITUTO DE TURISMO DEL CHACO</option>
              <option value="45">MINISTERIO DE DESARROLLO URBANO Y TERRITORIAL</option>
              <option value="46">SECRETARIA DE DERECHOS HUMANOS</option>
              <option value="49">ESCUELA DE GOBIERNO DE LA PROVINCIA DEL CHACO</option>
              <option value="51">INST. PROVINCIAL DE ADMIN. PUBLICA DEL CHACO</option>
                </select>
            </p></td> 
          <td width="7%" align="right" valign="bottom" bgcolor="#FFFFFF"><a href="menu.php">Volver</a></td>
          <td width="10%" align="right" valign="bottom" bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Buscar" /></td>
          <td width="10%" align="right" valign="bottom" bgcolor="#FFFFFF"><a href="php-mysql-pdf.php?pasa=<?php echo "$sql";?>">Imprimir</a></td>
	</tr>
        </table>
    </form></th>
  </tr>
  <tr>
    <th height="65" colspan="2" scope="row"><table width="100%" border="1" cellspacing="4" bgcolor="#CCCCCC">
      <tr>
        <th width="9%" align="left" bgcolor="#FFFFFF" scope="row">Dni Postulante</th>
        <td width="24%" bgcolor="#FFFFFF">Apellido y Nombre</td>
        <td width="10%" bgcolor="#FFFFFF">Dni Votante</td>
        <td width="24%" bgcolor="#FFFFFF">Apellido y Nombre</td>
        <td width="25%" bgcolor="#FFFFFF">Jurisdiccion</td>
        <td width="8%" bgcolor="#FFFFFF">Numero Postulante</td>
      </tr>
       <?php
       while ($row = mysql_fetch_array($result)){
       ?>
      <tr>
        <th align="left" bgcolor="#FFFFFF" scope="row"><?php echo $row['dnipostul']; ?></th>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['NomyApePos']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['dnivot']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['NomyApeVot']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['juris']; ?></td>
        <td align="left" bgcolor="#FFFFFF"><?php echo $row['npostulante']; ?></td>
      </tr>
      <?php }?>	
    </table></th>
  </tr>
</table>
</body>
</html>
