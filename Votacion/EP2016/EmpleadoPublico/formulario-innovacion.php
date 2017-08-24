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

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Innovacion</title>
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
  <script>
    function mostrar(id) {
      obj = document.getElementById(id);
      obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
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
            <h1 class="header-title-premio">
							Empleado P&uacuteblico del a&ntildeo <span class="anio">2017</span>
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
    <div class="container-fluid">
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
          <!--<li><a href="../eseguridad/index.html">INICIO</a></li>
          <li><a href="../eseguridad/quienes-somos.html">QUIENES SOMOS</a></li>
          <li><a href="../eseguridad/contacto.html">CONTACTO</a></li>
          <li><a href="https://web.facebook.com/ModernizacionC"><i class="fa fa-facebook"></i></a></li>
           Buscagor, para m&aacutes adelante...
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
<table width="1013" border="0" cellspacing="4">
        <tr>
          <th width="558" bgcolor="#FFFFFF" scope="row"><h2>Ingrese sus Datos para Postularse</h2>
          </th>
        </tr>
        <tr>
          <th scope="row"><table width="100%" border="0" cellspacing="4">
            <tr>
              <th width="22%" align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Apellido Y Nombre</th>
              <th width="28%" bgcolor="#FFFFFF" scope="row"><label for="dni">
                <input name="apeynom" type="text" id="apeynom" value="<?php echo $apeynompost;?>" size="40" readonly="readonly"/>
              </label></th>
              <td width="22%" align="center" valign="middle" bgcolor="#FFFFFF">Direcci&oacuten Laboral<br /></td>
              <td width="28%" align="left" bgcolor="#FFFFFF"><input name="direc" type="text" id="direc" size="40" /></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Jurisdicci&oacuten</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="jur" type="text" id="jur" value="<?php echo $jurdenomin;?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Tel&eacutefono Personal/Laboral*</td>
              <td align="left" bgcolor="#FFFFFF"><span id="telef">
              <input name="telef" type="text" id="telef" size="40" />
              <br />
              <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldMinCharsMsg"><br />
              No se cumple el m&iacutenimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el n&uacutemero m&aacuteximo de caracteres(12).</span></span></td>
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
              <td align="center" valign="middle" bgcolor="#FFFFFF">Tipo de Atenci&oacuten</td>
			      	<th colspan="2" align="left" valign="middle" scope="row">
						    <select name="depen" id="depen">
						      <option value="1">On Line</option>
						      <option value="2">Telef&oacutenico</option>
						      <option value="3">Presencial</option>
						    </select>
		          </th>
            </tr>
						<tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Cargo</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="cargo" type="text" id="cargo" size="40"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Jefe Inmediato Superior</td>
              <td align="left" bgcolor="#FFFFFF"><input name="jefeSup" type="text" id="jefeSup" size="40" /></td>
	    			</tr>
						<tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Correo Electr&oacutenico</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="correo" type="text" id="correo" size="40"/></th>
							<td align="center" valign="middle" bgcolor="#FFFFFF">Como se Enter&oacute del Premio</td>
			      	<th colspan="2" align="left" valign="middle" scope="row">
						    <select name="seEntero" id="seEntero">
						      <option value="1">Diario</option>
						      <option value="2">Internet</option>
						      <option value="3">Radio</option>
									<option value="4">Compa&ntildeero de Trabajo</option>
						    </select>
		          </th>
	    			</tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              </tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row"><p>&nbsp;</p>
                <h2>CATEGORIA: Innovaci&oacuten</h2>


<!--Empiezan las preguntas abiertas -->
<p>&nbsp;</p>
<table>
	<tr>
		<td align="left" valign="top"><span id="obser1">
			<p><label align="left">Qu&eacute soluci&oacuten se ha propuesto para el mismo? </label></p>
       <p>                 <textarea name="obser1" id="obser1" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">aca no deber�a controlar</span></span>
		  </p>
    </td>

	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser2">
			<p><label align="left">Qu&eacute resultados dio la soluci&oacuten planteada o qu&eacute resultados espera de la misma?</label></p>
       <p>                 <textarea name="obser2" id="obser2" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">aca no deber�a controlar</span></span>
		  </p>
    </td>

	</tr>
  <tr>
    <td align="left" valign="top"><span id="obser2">
      <p><label align="left">De qu&eacute manera Ud. contribuy&oacute al estudio del problema y/o soluci&oacuten? Cu&aacuteles fueron sus tareas? </label></p>
       <p>                 <textarea name="obser2" id="obser2" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">aca no deber�a controlar</span></span>
        </p>
    </td>

  </tr>
  <tr>
    <td align="left" valign="top"><span id="obser2">
      <p><label align="left">Considera que sus aportes fueron determinantes? </label></p>
      <p>                  <textarea name="obser2" id="obser2" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">aca no deber�a controlar</span></span>
      </p>
    </td>

  </tr>
  <tr>
    <td align="left" valign="top"><span id="obser2">
     <p><label align="left">Por qu&eacute se est&aacute postulando al premio? Por qu&eacute se postula en esta categor&iacute?</label></p>
     <p>                   <textarea name="obser2" id="obser2" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">aca no deber�a controlar</span></span>
    </p>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top"><span id="obser2">
      <p><label align="left">Qu&eacute otras categor&iacuteas adem&aacutes de las actuales cree que merecen reconocimiento?</label></p>
      <p>                  <textarea name="obser2" id="obser2" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">aca no deber�a controlar</span></span>
      </p>
    </td>

  </tr>
   <tr>
    <td align="left" valign="top"><span id="obser2">
     <p> <label align="left">Sugerencias</label></p>
     <p>                   <textarea name="obser2" id="obser2" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">aca no deber�a controlar</span></span>
    </p>
    </td>

  </tr>
</table>

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
