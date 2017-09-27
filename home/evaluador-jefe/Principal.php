<?php
include("conect.php");
$dni=$_POST['dni'];
$npostul=$_POST['npostul'];
$cargo=$_POST['cargo'];
conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT evaluado FROM votos WHERE dnipostul=$dni");
desconectar();
$row = mysql_fetch_array($result);
$evaluado=$row[0];
if(($evaluado=="Si") || ($dni=="")){
	header("Location: error.html");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Empleado P&uacuteblico del A&ntildeo</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/slick/slick.css" rel="stylesheet">
  <link href="css/slick/slick-theme.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="favicon.ico" />
  <link rel="stylesheet/less" type="text/css" href="styles.less" />
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		<script language=JavaScript>
		function subir() {
		   var myForm = document.form1;
		   myForm.cargo.focus();
		   }
		</script>

</head>

<body ng-app="pep2016">
  <div class="navbar-fixed-top">
    <header class="main container header-container-olim">
      <div class="header-left-prem"></div>
      <div class="header-middle">
        <div class="dt title-container">
          <div class="dtc va-middle">
            <h1 class="header-title-premio medium">
							Empleado P&uacuteblico del a&ntildeo <span class="anio regular">2017</span>
						</h1>
          </div>
          <div class="dtc va-middle text-right">
            <ul class="fa-ul">
              <li><img src="images/logo chaco gris-01.png" alt="" class="img header-logo-gob"></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
  </div>

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid book">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
        <a class="navbar-brand" href="#"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.html">INICIO</a></li>
          <li><a href="../quienes-somos.html">QUIENES SOMOS</a></li>
          <li><a href="../contacto.html">CONTACTO</a></li>
          <li><a href="https://web.facebook.com/ModernizacionC"><i class="fa fa-facebook"></i></a></li>
          <!-- Buscagor, para ms adelante...
          <li><a href="#" class="fa fa-search"></a></li>
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Buscador">
            </div>
          </form>-->
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>



	<div class="container">
<table width="924" height="579" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th colspan="2" align="left" valign="top" bgcolor="#FFFFFF" scope="row"><form id="form1" name="form1" method="post" action="recibe.php">
      <table width="100%" border="1">
      <tr>        </tr>
      </table>
      <table width="100%" border="1">
        <tr><a name="arriba"></a>
          <td>Concepto 1: Dedicaci&oacuten
            <input name="dni" type="hidden" id="dni" value="<?php echo $dni; ?>" />
            <input name="npostul" type="hidden" id="npostul" value="<?php echo $npostul; ?>" />
            <input name="cargo" type="hidden" id="cargo" value="<?php echo $cargo; ?>" /></td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375">Realiza una ocupaci&oacuten plena de su tiempo laboral.</td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
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
          <td>Concepto 2: Deseo de superaci&oacuten</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Posee esp&iacuteritu de superaci&oacuten. Tiene &iacutempetu para capacitarse y fijarse nuevas metas dentro de la organizaci&oacuten.</p></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
</tr>
        <tr>
          <td><p>Supera los obst&aacuteculos y realiza repetidos intentos para alcanzar los objetivos manteni&eacutendose firme en un proyecto hasta completarlo.</p></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
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
          <td width="375"><p>Busca y comparte informaci&oacuten &uacutetil para la resoluci&oacuten de situaciones.</p></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
</tr>
        <tr>
          <td><p>Emprende acciones para difundir nuevas tecnolog&iacuteas y metodolog&iacuteas de la organizaci&oacuten.</p></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica4"></label>
            <textarea name="obserrespyp" id="obserrespyp" cols="50" rows="5"></textarea></td>
        </tr>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica5"></label>
            <textarea name="obserpunt" id="obserpunt" cols="50" rows="5"></textarea></td>
        </tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td>Concepto 8: Colaboraci&oacuten y Cooperaci&oacuten</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Motiva al grupo a integrar sus ideas y a llegar a consenso. Colabora para la obtenci&oacuten de un objetivo com&uacuten.</p></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
</tr>
        <tr>
          <td><p>Contribuye en el orden y limpieza en el &aacutembito de trabajo.</p></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica6"></label>
            <textarea name="obsercolycop" id="obsercolycop" cols="50" rows="5"></textarea></td>
        </tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td>Concepto9: &eacutetica laboral</td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
</tr>
        <tr>
          <td><p>Cuida los bienes del Estado y sus recursos, velando por la econom&iacutea del material y la informaci&oacuten que le fueron confiados.</p></td>
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
            <span class="radioRequiredMsg">Realice una selecci&oacuten.</span></div></td>
</tr>
        <tr>
          <td>Observaciones:</td>
          <td colspan="4"><label for="obserdedica7"></label>
            <textarea name="obserhonest" id="obserhonest" cols="50" rows="5"></textarea></td>
        </tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <th>PREGUNTAS ABIERTAS</th>
        </tr>
        <?php
        conectar();
        	mysql_query("SET NAMES 'utf8'");
        	$resul = mysql_query("SELECT categoria FROM votos WHERE dnipostul=$dni");
        desconectar();
        $fila = mysql_fetch_array($resul);
        $jurisdiccion = $fila[0];
        ?>
        <?php
        if ($jurisdiccion == 'Colaboracion') {
          ?>
          <tr>
            <td>¿Considera que su actividad social impacta positivamente en las actividades laborales?</td>
            <td colspan="4"><label for="obserdedica7"></label>
              <textarea name="cola1" id="cola1" cols="50" rows="5"></textarea></td>
          </tr>
          <tr>
            <td>¿Apoya la postulaci&oacuten del agente en la categor&iacutea capacitaci&oacuten? ¿Por qu&eacute?</td>
            <td colspan="4"><label for="obserdedica7"></label>
              <textarea name="cola2" id="cola2" cols="50" rows="5"></textarea></td>
          </tr>
          <?php
        }

        if ($jurisdiccion == 'Capacitacion') {
           ?>
           <tr>
             <td>¿El agente aplica en el &aacutembito laboral los conocimientos adquiridos a trav&eacutes de las jornadas de capacitaci&oacuten?</td>
             <td colspan="4"><label for="obserdedica7"></label>
               <textarea name="capa1" id="capa1" cols="50" rows="5"></textarea></td>
           </tr>
           <tr>
             <td>¿Apoya la postulaci&oacuten del agente en la categor&iacutea capacitaci&oacuten? ¿Por qu&eacute?</td>
             <td colspan="4"><label for="obserdedica7"></label>
               <textarea name="capa2" id="capa2" cols="50" rows="5"></textarea></td>
           </tr>
           <?php
        }

        if ($jurisdiccion == 'Proyectos') {
           ?>
           <tr>
             <td>¿Apoya la postulaci&oacuten del agente en la categor&iacutea proyectos transversales? ¿Por qu&eacute?</td>
             <td colspan="4"><label for="obserdedica7"></label>
               <textarea name="proy" id="proy" cols="50" rows="5"></textarea></td>
           </tr>
           <?php
        }

        if ($jurisdiccion == 'Innovacion') {
           ?>
           <tr>
             <td>¿El agente produjo un cambio positivo en su &aacutembito laboral con el proyecto en cuesti&oacuten?</td>
             <td colspan="4"><label for="obserdedica7"></label>
               <textarea name="inno1" id="inno1" cols="50" rows="5"></textarea></td>
           </tr>
           <tr>
             <td>¿Apoya la postulaci&oacuten del agente en la categor&iacutea Innovaci&oacuten en el puesto de trabajo? ¿Por qu&eacute?</td>
             <td colspan="4"><label for="obserdedica7"></label>
               <textarea name="inno2" id="inno2" cols="50" rows="5"></textarea></td>
           </tr>
           <?php
        }
        ?>
      </table>
      <table width="100%" border="1">
        <tr>
          <td align="center"><input type="submit" name="button" id="button" value="Enviar-Evaluacion" onclick="javascript:window.scrollTo(0,0);"/></td>
        </tr>
</table>
    </form></th>
</tr>
</table>


</div>

<!-- Footer -->
<div class="footer-container">
  <footer class="main container-fluid">
    <div class="logos-gobierno text-center">
      <div class="logos-img">
        <img class="logo-footer" src="images/modenizacion blanco-01.png" alt="">
      </div>
      <div class="logos-img">
        <img class="logo-footer" src="images/secretaria blanco-01.png" alt="">
      </div>
      <div class="logos-img">
        <img class="logo-footer" src="images/chaco blanco-01.png" alt="">
      </div>
    </div>
  </footer>
</div>

<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="js/angular-ui-router.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/slide.js"></script>
<script src="less.js" type="text/javascript"></script>
<script type="text/javascript" src="js/smoothAuto-Scroll.js"></script>
<script type="text/javascript" src="../SpryAssets/SpryValidationTextField.js"></script>

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
