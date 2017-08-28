<?php 
include("conect.php");
$dni=$_POST['dni'];
$npostul=$_POST['npostul'];
$cargo=$_POST['cargo'];
$apeynom=$_POST['apeynom'];
conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT evaluado FROM padronfinal WHERE dnipostul=$dni");
	desconectar();
	$row = mysql_fetch_array($result);
	$evaluado=$row[0];
if(($evaluado=="Si") || ($dni=="")){
	header("Location: error.html");
	}

?>
<!--agregado datos jefe 2014 gabriel-->
<?php
$apynomjefe=$_POST['apynomjefe'];
$cargojefe=$_POST['cargojefe'];
$mailjefe=$_POST['mailjefe'];
?>
<!---->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="img/icono.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Evaluacion</title>
<style type="text/css">
.colorazul {color: #00AAEA;
}
</style>
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #999;
}
</style>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<script language=JavaScript>
function subir() {
   var myForm = document.form1;
   myForm.dedicacion1.focus();
   }
</script>
</head>

<body>
<table width="924" height="579" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th width="303" height="167" align="center" valign="top" bgcolor="#FFFFFF" scope="row"><h1><img src="img/emp.png" width="367" height="162" /></h1></th>
    <th width="271" align="center" bgcolor="#FFFFFF" scope="row"><h2><span class="colorazul">EVALUACION </span></h2>
      <h2><span class="colorazul">DEL</span></h2>
    <h2><span class="colorazul"> POSTULANTE</span></h2></th>
  </tr>
  <tr>
    <th colspan="2" align="left" valign="top" bgcolor="#FFFFFF" scope="row"><form id="form1" name="form1" method="post" action="recibe.php">
      <table width="100%" border="1">
      <tr>        </tr>
      </table>
      <table width="100%" border="1">
	<!--inputs agregados para datos del jefe-->
	<input name="apynomjefe" type="hidden" id="apynomjefe" value="<?php echo $apynomjefe; ?>"/>
	<input name="cargojefe" type="hidden" id="cargojefe" value="<?php echo $cargojefe; ?>"/>
	<input name="mailjefe" type="hidden" id="mailjefe" value="<?php echo $mailjefe; ?>"/>
	<input name="apeynom" type="hidden" id="apeynom" value="<?php echo $apeynom; ?>"/>
	<!---->
        <tr><a name="arriba"></a>
          <td>Concepto 1: Dedicación
            <input name="dni" type="hidden" id="dni" value="<?php echo $dni; ?>" />
            <input name="npostul" type="hidden" id="npostul" value="<?php echo $npostul; ?>" />
            <input name="cargo" type="hidden" id="cargo" value="<?php echo $cargo; ?>" /></td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375">Realiza una ocupación plena de su tiempo laboral.</td>
          <td colspan="4"><div id="spryradio1">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="dedicacion1" value="1" id="RadioGroup1_0" />
                </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="dedicacion1" value="2" id="RadioGroup1_1" />
                </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="dedicacion1" value="3" id="RadioGroup1_2" />
                </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="dedicacion1" value="4" id="RadioGroup1_3" />
                </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
        </tr>
        <tr>
          <td><p>Cumple con los objetivos y tareas encomendadas, aprovechando de forma plena su tiempo laboral.</p></td>
          <td colspan="4"><div id="spryradio2">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="dedicacion2" value="1" id="RadioGroup1_4" />
                </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="dedicacion2" value="2" id="RadioGroup1_5" />
                </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="dedicacion2" value="3" id="RadioGroup1_6" />
                </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="dedicacion2" value="4" id="RadioGroup1_7" />
                </label></td>
              </tr>
            </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
        </tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica"></label>
            <textarea name="obserdedica" id="obserdedica" cols="50" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
          </tr>
    </table>
      <table width="100%" border="1">
        <tr>
          <td>Concepto 2: Deseo de superación</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Posee espíritu de superación. Tiene ímpetu para capacitarse y fijarse nuevas metas dentro de la organización.</p></td>
          <td colspan="4"><div id="spryradio3">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="supera1" value="1" id="RadioGroup1_8" />
                </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="supera1" value="2" id="RadioGroup1_9" />
                </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="supera1" value="3" id="RadioGroup1_10" />
                </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="supera1" value="4" id="RadioGroup1_11" />
                </label></td>
              </tr>
            </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
        </tr>
        <tr>
          <td><p>Brinda importancia a las necesidades de alcanzar los objetivos, realiza aportes para ello.</p></td>
          <td colspan="4"><div id="spryradio4">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="supera2" value="1" id="RadioGroup1_12" />
                </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="supera2" value="2" id="RadioGroup1_13" />
                </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="supera2" value="3" id="RadioGroup1_14" />
                </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="supera2" value="4" id="RadioGroup1_15" />
                </label></td>
              </tr>
            </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
        </tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica"></label>
            <textarea name="obsersupera" id="obsersupera" cols="50" rows="5"></textarea></td>
        </tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
          </tr>
        <tr>
          <td>Concepto 3: Proactividad</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Emprende constantemente nuevas acciones y genera cambios constructivos en su entorno de trabajo.</p></td>
          <td colspan="4"><div id="spryradio5">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="proact1" value="1" id="RadioGroup1_16" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="proact1" value="2" id="RadioGroup1_17" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="proact1" value="3" id="RadioGroup1_18" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="proact1" value="4" id="RadioGroup1_19" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td><p>Supera los obstáculos y realiza repetidos intentos para alcanzar los objetivos manteniéndose firme en un proyecto hasta completarlo.</p></td>
          <td colspan="4"><div id="spryradio6">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="proact2" value="1" id="RadioGroup1_20" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="proact2" value="2" id="RadioGroup1_21" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="proact2" value="3" id="RadioGroup1_22" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="proact2" value="4" id="RadioGroup1_23" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica"></label>
            <textarea name="obserproact" id="obserproact" cols="50" rows="5"></textarea></td>
        </tr>
        </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td>Concepto 4: Aprendizaje continuo</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Busca y comparte información útil para la resolución de situaciones.</p></td>
          <td colspan="4"><div id="spryradio7">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="aprend1" value="1" id="RadioGroup1_24" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="aprend1" value="2" id="RadioGroup1_25" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="aprend1" value="3" id="RadioGroup1_26" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="aprend1" value="4" id="RadioGroup1_27" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td><p>Emprende acciones para difundir nuevas tecnologías y metodologías de la organización.</p></td>
          <td colspan="4"><div id="spryradio8">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="aprend2" value="1" id="RadioGroup1_28" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="aprend2" value="2" id="RadioGroup1_29" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="aprend2" value="3" id="RadioGroup1_30" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="aprend2" value="4" id="RadioGroup1_31" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica2"></label>
            <textarea name="obseraprend" id="obseraprend" cols="50" rows="5"></textarea></td>
        </tr>
        <tr> </tr>
        <tr> </tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td>Concepto 5: Compromiso y responsabilidad</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Se compromete con los objetivos del equipo de trabajo.</p></td>
          <td colspan="4"><div id="spryradio9">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="comyresp1" value="1" id="RadioGroup1_32" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="comyresp1" value="2" id="RadioGroup1_33" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="comyresp1" value="3" id="RadioGroup1_34" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="comyresp1" value="4" id="RadioGroup1_35" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td><p>Defiende los intereses del grupo de trabajo como si fueran propios.</p></td>
          <td colspan="4"><div id="spryradio10">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="comyresp2" value="1" id="RadioGroup1_36" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="comyresp2" value="2" id="RadioGroup1_37" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="comyresp2" value="3" id="RadioGroup1_38" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="comyresp2" value="4" id="RadioGroup1_39" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica3"></label>
            <textarea name="obsercompyresp" id="obsercompyresp" cols="50" rows="5"></textarea></td>
        </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td>Concepto 6: Respeto a su persona y sus pares</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Sabe recibir abiertamente opiniones y criticas, las cuales toma en cuenta.</p></td>
          <td colspan="4"><div id="spryradio11">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="resppyp1" value="1" id="RadioGroup1_40" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="resppyp1" value="2" id="RadioGroup1_41" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="resppyp1" value="3" id="RadioGroup1_42" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="resppyp1" value="4" id="RadioGroup1_43" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td><p>Escucha, respeta y valora las ideas y propuestas de sus pares y colaboradores.</p></td>
          <td colspan="4"><div id="spryradio12">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="resppyp2" value="1" id="RadioGroup1_44" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="resppyp2" value="2" id="RadioGroup1_45" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="resppyp2" value="3" id="RadioGroup1_46" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="resppyp2" value="4" id="RadioGroup1_47" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica4"></label>
            <textarea name="obserrespyp" id="obserrespyp" cols="50" rows="5"></textarea></td>
        </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td>Concepto 7: Puntualidad</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Acude en tiempo y forma a su lugar de trabajo.</p></td>
          <td colspan="4"><div id="spryradio13">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="punt1" value="1" id="RadioGroup1_48" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="punt1" value="2" id="RadioGroup1_49" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="punt1" value="3" id="RadioGroup1_50" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="punt1" value="4" id="RadioGroup1_51" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td><p>Comunica de su inasistencia.</p></td>
          <td colspan="4"><div id="spryradio14">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="punt2" value="1" id="RadioGroup1_52" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="punt2" value="2" id="RadioGroup1_53" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="punt2" value="3" id="RadioGroup1_54" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="punt2" value="4" id="RadioGroup1_55" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica5"></label>
            <textarea name="obserpunt" id="obserpunt" cols="50" rows="5"></textarea></td>
        </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td>Concepto 8: Colaboración y Cooperación</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Motiva al grupo a integrar sus ideas y a llegar a consenso. Colabora para la obtención de un objetivo común.</p></td>
          <td colspan="4"><div id="spryradio15">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="colycop1" value="1" id="RadioGroup1_56" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="colycop1" value="2" id="RadioGroup1_57" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="colycop1" value="3" id="RadioGroup1_58" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="colycop1" value="4" id="RadioGroup1_59" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td><p>Contribuye en el orden y limpieza en el ámbito de trabajo.</p></td>

          <td colspan="4"><div id="spryradio16">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="colycop2" value="1" id="RadioGroup1_60" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="colycop2" value="2" id="RadioGroup1_61" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="colycop2" value="3" id="RadioGroup1_62" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="colycop2" value="4" id="RadioGroup1_63" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica6"></label>
            <textarea name="obsercolycop" id="obsercolycop" cols="50" rows="5"></textarea></td>
        </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td>Concepto9: Ética laboral</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Es leal a los principios del organismo.</p></td>
          <td colspan="4"><div id="spryradio17">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="honest1" value="1" id="RadioGroup1_64" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="honest1" value="2" id="RadioGroup1_65" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="honest1" value="3" id="RadioGroup1_66" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="honest1" value="4" id="RadioGroup1_67" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td><p>Cuida los bienes del Estado y sus recursos, velando por la economía del material y la información que le fueron confiados.</p></td>
          <td colspan="4"><div id="spryradio18">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="honest2" value="1" id="RadioGroup1_68" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="honest2" value="2" id="RadioGroup1_69" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="honest2" value="3" id="RadioGroup1_70" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="honest2" value="4" id="RadioGroup1_71" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica7"></label>
            <textarea name="obserhonest" id="obserhonest" cols="50" rows="5"></textarea></td>
        </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
        <tr> </tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td align="center"><input type="submit" name="button" id="button" value="Enviar-Evaluacion" onclick="javascript:window.scrollTo(0,0);"/></td>
        </tr>
</table>
    </form></th>
</tr>
</table>
<script type="text/javascript">
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var spryradio2 = new Spry.Widget.ValidationRadio("spryradio2");
var spryradio3 = new Spry.Widget.ValidationRadio("spryradio3");
var spryradio4 = new Spry.Widget.ValidationRadio("spryradio4");
var spryradio6 = new Spry.Widget.ValidationRadio("spryradio6");
var spryradio5 = new Spry.Widget.ValidationRadio("spryradio5");
var spryradio8 = new Spry.Widget.ValidationRadio("spryradio8");
var spryradio7 = new Spry.Widget.ValidationRadio("spryradio7");
var spryradio10 = new Spry.Widget.ValidationRadio("spryradio10");
var spryradio9 = new Spry.Widget.ValidationRadio("spryradio9");
var spryradio12 = new Spry.Widget.ValidationRadio("spryradio12");
var spryradio11 = new Spry.Widget.ValidationRadio("spryradio11");
var spryradio14 = new Spry.Widget.ValidationRadio("spryradio14");
var spryradio13 = new Spry.Widget.ValidationRadio("spryradio13");
var spryradio16 = new Spry.Widget.ValidationRadio("spryradio16");
var spryradio15 = new Spry.Widget.ValidationRadio("spryradio15");
var spryradio18 = new Spry.Widget.ValidationRadio("spryradio18");
var spryradio17 = new Spry.Widget.ValidationRadio("spryradio17");
</script>
</body>
</html>

