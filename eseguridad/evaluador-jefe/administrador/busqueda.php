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
</head>

<body>
<?php 
error_reporting(0);
function valor($obser){
	switch($obser){
		case 1: $obser="Siempre - 5 Puntos"; break;
		case 2: $obser="Regularmente - 2.5 Puntos"; break;
		case 3: $obser="Nunca - 0 Puntos"; break;
		case 4: $obser="NS/NC - 0 Puntos"; break;
		}
		return $obser;
	}
$busca=$_POST['busca'];

	conectar();
    mysql_query("SET NAMES 'utf8'");
    $sql = "SELECT * FROM evaluacion where dnipostul = '$busca'";
	$result = mysql_query($sql);
	desconectar();
    $row = mysql_fetch_row($result);
	
?>
<table width="1056" align="center" cellspacing="4" bgcolor="#FFFFFF">
  <tr>
    <th width="572" height="101" align="left" bgcolor="#FFFFFF" scope="row"><img src="../img/emp.png" width="502" height="162" /></th>
    <th width="466" bgcolor="#FFFFFF" scope="row"><h3>EVALUACION </h3>
      <h3>REALIZADA </h3>
      <h3>POR </h3>
    <h3>EL JEFE</h3></th>
  </tr>
  <tr align="center">
    <th height="65" colspan="3" scope="row"><form id="form1" name="form1" method="post" action="busqueda.php">
      <table width="100%" height="34" border="0" cellspacing="4">
        <tr>
          <th width="28%" align="left" valign="top" bgcolor="#FFFFFF" scope="row">INGRESE DNI DEL POSTULANTE</th>
          <td width="45%" align="left" valign="top" bgcolor="#FFFFFF"><label for="busca"></label>
            <input name="busca" type="text" id="busca" size="50" /></td>
          <td width="7%" align="left" valign="bottom" bgcolor="#FFFFFF"><a href="menu.php">Volver</a></td>
          <td width="10%" align="right" valign="bottom" bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="Buscar" /></td>
          <td width="10%" align="right" valign="bottom" bgcolor="#FFFFFF"><a href="php-mysql-pdf.php?pasa=<?php echo "$busca";?>">Imprimir</a></td>
        </tr>
        </table>
    </form></th>
  </tr>
  <tr>
    <th height="65" colspan="3" scope="row"><table width="100%" border="1">
      <tr>
        <td colspan="5" align="center"> DNI: <?php echo "  $row[1]"; ?></td>
      </tr>
      <tr><a name="arriba" id="arriba"></a>
        <td colspan="5" align="left">Concepto 1: Dedicación          </td>
        </tr>
      <tr>
        <td width="559" align="left">Realiza una ocupación plena de su tiempo laboral.</td>
        <td colspan="4" align="left"><?php $muestra=valor($row[4]); echo "$muestra"; ?></td>
</tr>
      <tr>
        <td align="left"><p>Cumple con los objetivos y tareas encomendadas, aprovechando de forma plena su tiempo laboral.</p></td>
        <td colspan="4" align="left"><?php $muestra=valor($row[5]); echo "$muestra"; ?></td>
</tr>
      <tr>
        <td align="left">Observaciones:</td>
        <td colspan="4" align="left"><label for="obserdedica"></label>
          <textarea name="obserdedica" id="obserdedica" cols="50" rows="5"><?php $muestra=$row[6]; echo "$muestra"; ?></textarea></td>
      </tr>
      <tr>
        <td colspan="5" align="left" bgcolor="#999999">&nbsp;</td>
      </tr>
      
        <tr>
          <td colspan="5" align="center">Concepto 2: Deseo de superación</td>
        </tr>
        <tr>
          <td width="559" align="left"><p>Posee espíritu de superación. Tiene ímpetu para capacitarse y fijarse nuevas metas dentro de la organización.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[7]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left"><p>Brinda importancia a las necesidades de alcanzar los objetivos, realiza aportes para ello.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[8]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left">Observaciones:</td>
          <td colspan="4" align="left"><label for="obserdedica2"></label>
          <textarea name="obsersupera" id="obsersupera" cols="50" rows="5"><?php $muestra=$row[9]; echo "$muestra"; ?></textarea></td>
        </tr>

        <tr>
          <td colspan="5" align="left" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="5" align="center">Concepto 3: Proactividad</td>
        </tr>
        <tr>
          <td width="559" align="left"><p>Emprende constantemente nuevas acciones y genera cambios constructivos en su entorno de trabajo.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[10]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left"><p>Supera los obstáculos y realiza repetidos intentos para alcanzar los objetivos manteniéndose firme en un proyecto hasta completarlo.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[11]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left">Observaciones:</td>
          <td colspan="4" align="left"><label for="obserdedica3"></label>
          <textarea name="obserproact" id="obserproact" cols="50" rows="5"><?php $muestra=$row[12]; echo "$muestra"; ?></textarea></td>
        </tr>

        <tr>
          <td colspan="5" align="left" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="5" align="center">Concepto 4: Aprendizaje continuo</td>
        </tr>
        <tr>
          <td width="559" align="left"><p>Busca y comparte información útil para la resolución de situaciones.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[13]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left"><p>Emprende acciones para difundir nuevas tecnologías y metodologías de la organización.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[14]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left">Observaciones:</td>
          <td colspan="4" align="left"><label for="obserdedica4"></label>
          <textarea name="obseraprend" id="obseraprend" cols="50" rows="5"><?php $muestra=$row[15]; echo "$muestra"; ?></textarea></td>
        </tr>
        <tr>
          <td colspan="5" align="left" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="5" align="center">Concepto 5: Compromiso y responsabilidad</td>
        </tr>
        <tr>
          <td width="559" align="left"><p>Se compromete con los objetivos del equipo de trabajo.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[16]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left"><p>Defiende los intereses del grupo de trabajo como si fueran propios.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[17]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left">Observaciones:</td>
          <td colspan="4" align="left"><label for="obserdedica5"></label>
          <textarea name="obsercompyresp" id="obsercompyresp" cols="50" rows="5"><?php $muestra=$row[18]; echo "$muestra"; ?></textarea></td>
        </tr>
        <tr>
          <td colspan="5" align="left" bgcolor="#999999">&nbsp;</td>
        </tr>
                
        <tr>
          <td colspan="5" align="center">Concepto 6: Respeto a su persona y sus pares</td>
        </tr>
        <tr>
          <td width="559" align="left"><p>Sabe recibir abiertamente opiniones y criticas, las cuales toma en cuenta.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[19]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left"><p>Escucha, respeta y valora las ideas y propuestas de sus pares y colaboradores.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[20]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left">Observaciones:</td>
          <td colspan="4" align="left"><label for="obserdedica6"></label>
          <textarea name="obserrespyp" id="obserrespyp" cols="50" rows="5"><?php $muestra=$row[21]; echo "$muestra"; ?></textarea></td>
        </tr>
        <tr>
          <td colspan="5" align="left" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="5" align="center">Concepto 7: Puntualidad</td>
        </tr>
        <tr>
          <td width="559" align="left"><p>Acude en tiempo y forma a su lugar de trabajo.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[22]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left"><p>Comunica de su inasistencia.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[23]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left">Observaciones:</td>
          <td colspan="4" align="left"><label for="obserdedica7"></label>
          <textarea name="obserpunt" id="obserpunt" cols="50" rows="5"><?php $muestra=$row[24]; echo "$muestra"; ?></textarea></td>
        </tr>
        <tr>
          <td colspan="5" align="left" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="5" align="center">Concepto 8: Colaboración y Cooperación</td>
        </tr>
        <tr>
          <td width="559" align="left"><p>Motiva al grupo a integrar sus ideas y a llegar a consenso. Colabora para la obtención de un objetivo común.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[25]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left"><p>Contribuye en el orden y limpieza en el ámbito de trabajo.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[26]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left">Observaciones:</td>
          <td colspan="4" align="left"><label for="obserdedica8"></label>
          <textarea name="obsercolycop" id="obsercolycop" cols="50" rows="5"><?php $muestra=$row[27]; echo "$muestra"; ?></textarea></td>
        </tr>
        <tr>
          <td colspan="5" align="left" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td colspan="5" align="center">Concepto9: Honestidad</td>
        </tr>
        <tr>
          <td width="559" align="left"><p>Se comporta y expresa con coherencia y sinceridad.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[28]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left"><p>Orienta su vida y su trabajo según sus valores.</p></td>
          <td colspan="4" align="left"><?php $muestra=valor($row[29]); echo "$muestra"; ?></td>
</tr>
        <tr>
          <td align="left">Observaciones:</td>
          <td colspan="4" align="left"><label for="obserdedica9"></label>
          <textarea name="obserhonest" id="obserhonest" cols="50" rows="5"><?php $muestra=$row[30]; echo "$muestra"; ?></textarea></td>
        </tr>
        <tr>
          <td align="center">PUNTAJE TOTAL :</td>
          <td colspan="4"><?php $muestra=$row[31]; echo "$muestra"; ?></td>
        </tr>
    </table></th>
  </tr>
</table>
</body>
</html>
