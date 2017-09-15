<?php 
include("conect.php");
//controlar seguridad
$dnipost=$_REQUEST['postul'];
$jurpost=$_REQUEST['jurpost'];
$votante=$_REQUEST['votante'];
if($dnipost==""){
	header("Location: index.html");
	}
//Tiramos una consulta a la base para traer los datos
//Postulante
abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT JurDenominacion, ApellidoyNombres, OfiDenomin FROM padron WHERE Documento=$dnipost and Jur=$jurpost");
	cerrarBase();
	$row = mysql_fetch_array($result);
	$jurdenomin=$row[0];
	$apeynompost=$row[1];
	$ofi=$row[2];
//Votante
abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT ApellidoyNombres FROM padron WHERE Documento=$votante and Jur=$jurpost");
	cerrarBase();
	$row = mysql_fetch_array($result);
	$apeynomvot=$row[0];
?>
<!DOCTYPE html>
<html lang="es">
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<!--<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>-->

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CHACO - Premio al Empleado P�blico 2016</title>
	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/slick/slick.css" rel="stylesheet">
    <link href="css/slick/slick-theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<a class="boton-voto" href="#"><img src="images/gracias.png" alt="Vot� ac�"></a>
	<div class="header-container">
		<header class="main container">
			<div class="header-left"></div>
			<div class="header-middle">
				<div class="dt title-container">
					<div class="dtc va-middle">
						<h1 class="header-title">
							Empleado P&uacuteblico del a&ntildeo <span class="anio">2016</span>
						</h1>
					</div>
				</div>
			</div>
		</header>
	</div>
	<nav class="navbar navbar-default">
	  <div class="container">
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
	      <ul class="nav navbar-nav navbar-center"> 
          <li>
            <a href="../index.html"><i class="fa fa-lg fa-home"></i>&nbsp;&nbsp;Portada</a>
          </li>	             	
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		



<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">

function ocultar($nombre){
	if ($nombre.style.display=='none'){
	$nombre.style.display='block'; 
	$nombre.required="required";
	}
	else {
	$nombre.style.display='none'; 
	$nombre.required=false;
	}
	}
</script>
</head>
<?php session_start();
error_reporting(0);
?>
<body>
<table width="1033" height="446" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  
    <th colspan="2" align="left" valign="top" bgcolor="#FFFFFF" scope="row"><form id="form1" name="form1" method="post" action="guarda.php">   
<p style="color:rgb(248,67,67)">Nota: Recuerde que podrá votar una (1) sóla vez y a un (1) compañero.</p>
<table width="1013" border="0" cellspacing="4">
        <tr>
          <th width="558" bgcolor="#FFFFFF" scope="row"><h2>1. Datos del Empleado a quien quiere votar</h2>
          </th>
        </tr>
        <tr>
          <th scope="row"><table width="100%" border="0" cellspacing="4">
            <tr>
              <th width="22%" align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Apellido Y Nombre</th>
              <th width="28%" bgcolor="#FFFFFF" scope="row"><label for="dni">
                <input name="apeynom" type="text" id="apeynom" value="<?php echo $apeynompost;?>" size="40" readonly="readonly"/>
              </label></th>
              <td width="22%" align="center" valign="middle" bgcolor="#FFFFFF">Dirección Laboral<br /></td>
              <td width="28%" align="left" bgcolor="#FFFFFF"><input name="direc" type="text" id="direc" size="40" /></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Jurisdicción</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="jur" type="text" id="jur" value="<?php echo $jurdenomin;?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Teléfono Personal/Laboral*</td>
              <td align="left" bgcolor="#FFFFFF"><span id="telef">
              <input name="telef" type="text" id="telef" size="40" />
              <br />
              <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldMinCharsMsg"><br />
              No se cumple el mínimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres(12).</span></span></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Oficina</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="oficina" type="text" id="oficina" value="<?php echo $ofi;?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Localidad</td>
              <td align="left" bgcolor="#FFFFFF"><input name="local" type="text" id="local" size="40" /></td>
	    </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">DNI</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="dni" type="text" id="dni" value="<?php echo $dnipost;?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Tipo de Atención</td>
	      	<th colspan="2" align="left" valign="middle" scope="row">
		    <select name="depen" id="depen">
		      <option value="1">On Line</option>
		      <option value="2">Telefónico</option>
		      <option value="3">Presencial</option>
		    </select>
          	</th>
            </tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              </tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row"><p>&nbsp;</p>
                <h2>Seleccione los Rasgos que Caracterizan al Postulante</h2>

<!--Empieza tabla con formulario que agregamos-->
<table width="100%" border="1">
        <tr><a name="arriba"></a>
          <td align="left">1) Dedicación.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Cumple con los objetivos y tareas encomendadas, con rendimiento adecuado durante toda la jornada.</p></td>
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

          <td colspan="5" bgcolor="#999999">&nbsp;</td>
          </tr>
    </table>
      <table width="100%" border="1">
        <tr>
          <td align="left">2) Deseo de superación.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Trata de adoptar nuevas formas de pensamiento y adquirir cualidades que mejorarán la calidad de su trabajo.</p></td>
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
        
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
          </tr>
        <tr>
          <td align="left">3) Proactividad.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Actúa rápida y decididamente ante situaciones problemáticas, sin esperar que los problemas se solucionen solos o los 			solucionen otros.</p></td>
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
        
        </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">4) Aprendizaje continuo.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Se capacita en temas relacionados a su cargo, en pos de aplicar y compartir sus conocimientos.</p></td>
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
        
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">5) Compromiso y responsabilidad.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Se compromete con los objetivos establecidos, defendiendo los intereses del organismo como si fueran propios.</p></td>
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
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">6) Respeto a su persona y sus pares.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Recibe abiertamente opiniones y críticas, las cuales toma en cuenta.</p></td>
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
        
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">7) Putualidad.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Acude en tiempo y forma a su lugar de trabajo.</p></td>
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
        
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">8) Colaboración y Cooperación.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Colabora y coopera con sus pares en la realización de las tareas encomendadas.</p></td>
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
        
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">9) Ética laboral.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Cuida los bienes del Estado y sus recursos, velando por la economía del material y la información que le fueron 			confiados.</p></td>
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
	
	
</th>
</tr>
</table>
<!--Termina tabla con formulario--> 

<!--Empiezan las preguntas abiertas -->
<p>&nbsp;</p>
<table>
	<tr>	
		<td align="left" valign="top"><span id="obser1">
			<label align="left"> 10) Explique y justifique por qué vota a esta persona como candidato al Mejor Empleado Público del año 2016, de su 				jurisdicción. </label>
                        <textarea name="obser1" id="obser1" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">No se cumple el mínimo de caracteres 				requerido(150).</span></span>
		</td>
			
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser2">
			<label align="left"> 11) Cuente una anécdota o situación de este postulante que haya ocurrido en el ámbito laboral, en la que se 
				se expresen cualidades que lo hagan candidato al Mejor Empleado Público del año 2016.
				Recuerde que se vota al mejor empleado, no al mejor compañero. </label>
                        <textarea name="obser2" id="obser2" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">No se cumple el mínimo de caracteres 				requerido(150).</span></span>
		</td>
		
	</tr>
</table>
<!-- Terminan las preguntas abiertas -->

                      <p>&nbsp;</p>
                      <table width="100%" height="186" border="0,5" cellspacing="4">
                        <tr>
                          <th colspan="6" scope="row"><h2>2. Datos de la Persona Votante</h2></th>
                          </tr>
                        <tr>
                          <th width="18%" height="26" align="left" scope="row">Nombre y Apellido</th>
                          <th width="25%" scope="row"><input name="apynomvot" type="text" id="textfield2" value="<?php echo $apeynomvot;?>" size="40" readonly="readonly"/></th>
                          <th width="13%" scope="row"><label for="apynomvot"></label></th>
                          <td width="10%">DNI</td>
                          <td width="28%"><input name="dnivot" type="text" id="textfield6" value="<?php echo $votante?>" size="40" readonly="readonly"/></td>
                          <td width="6%"><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">Jurisdicción</th>
                          <th height="26" scope="row"><input name="jurvot" type="text" id="textfield3" value="<?php echo $jurdenomin;?>" size="40" readonly="readonly"/></th>
                          <th scope="row"><label for="apynomvot"></label></th>
                          <td>Teléfono*</td>
                          <td><span id="telvot">
                          <input name="telvot" type="text" id="telvot" size="40" />
                          <br />
                          <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldMinCharsMsg">No se cumple el mínimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres(12).</span></span></td>
                          <td><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">Correo Electrónico*</th>
                          <th height="26" scope="row"><span id="sprytextfield3">
                          <label for="emailvot"></label>
                          <input name="emailvot" type="text" id="emailvot" size="40" />
                          <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span></span></th>
                          <th scope="row"><label for="apynomvot"></label></th>
                          
			 <th><label>Medio</label></th>
			      	<th colspan="2" align="left" valign="middle" scope="row">
				    <select name="medio" id="medio">
				      <option value="1">Diario</option>
				      <option value="2">Internet</option>
				      <option value="3">Radio</option>
				      <option value="4">Compañeros de trabajo</option>
				      <option value="5">Otros</option>
				    </select>
				(Medio por el cual se enteró del premio)
			  </th>
                          <td><label for="apynomvot"></label></td>
                         </tr>
                        <tr>
                          <th height="26" align="left" scope="row">&nbsp;</th>
                          <th height="26" scope="row">&nbsp;</th>
                          <th scope="row"><a href="index.php">Volver a Ingresar Datos</a></th>
                          <td colspan="2" align="center"><input type="submit" name="button2" id="button2" value="Confirmar la Votacion" /></td>
                          <td>&nbsp;</td>
                          </tr>
                        </table>
                      </th>
                  </tr>
                </table><p align="center">*Campos obligatorios</p>
              </th>
            </tr>
          </table></th>
        </tr>
      </table>
    </form></th>
  </tr>
</table>
<div class="footer-container">
  <footer class="main container-fluid">
    <div class="logos-gobierno text-center">
      <div class="logos-img">
        <img class="logo-footer largo" src="images/logo-sggc.png" alt="">
      </div>
      <div class="logos-img">
        <img class="logo-footer" src="images/logo-sub-cgpe.png" alt="">
      </div>
      <div class="logos-img">
        <img class="logo-footer" src="images/logo-dgme.png" alt="">
      </div>
      <div class="logos-img">
        <img class="logo-footer" src="images/logo-chacogob.png" alt="">
      </div>
    </div>
  </footer>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("telvot", "none", {minChars:7, maxChars:12});
var sprytextfield2 = new Spry.Widget.ValidationTextField("telef", "none", {minChars:7, maxChars:12});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("obser1", {minChars:150, hint:"Ingrese Como Minimo 150 Caracteres", validateOn:["blur"]});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("obser2", {minChars:150, hint:"Ingrese Como Minimo 150 Caracteres", validateOn:["blur"]});
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var spryradio3 = new Spry.Widget.ValidationRadio("spryradio3");
var spryradio5 = new Spry.Widget.ValidationRadio("spryradio5");
var spryradio7 = new Spry.Widget.ValidationRadio("spryradio7");
var spryradio9 = new Spry.Widget.ValidationRadio("spryradio9");
var spryradio11 = new Spry.Widget.ValidationRadio("spryradio11");
var spryradio13 = new Spry.Widget.ValidationRadio("spryradio13");
var spryradio15 = new Spry.Widget.ValidationRadio("spryradio15");
var spryradio17 = new Spry.Widget.ValidationRadio("spryradio17");
</script>
</body>
</html>
