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
					<div class="dtc va-bottom-middle text-right">
						<img class="header-logo-gob" src="images/logo-chacogob.png" alt="Logo Gobierno del Chaco">
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
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Cargo</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="cargo" type="text" id="cargo" size="40"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Jefe Inmediato Superior</td>
              <td align="left" bgcolor="#FFFFFF"><input name="jefeSup" type="text" id="jefeSup" size="40" /></td>
	    			</tr>
						<tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Correo Electrónico</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="correo" type="text" id="correo" size="40"/></th>
							<td align="center" valign="middle" bgcolor="#FFFFFF">Como se Enteró del Premio</td>
			      	<th colspan="2" align="left" valign="middle" scope="row">
						    <select name="seEntero" id="seEntero">
						      <option value="1">Diario</option>
						      <option value="2">Internet</option>
						      <option value="3">Radio</option>
									<option value="4">Compañero de Trabajo</option>
						    </select>
		          </th>
	    			</tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              </tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row"><p>&nbsp;</p>
                <h2>CATEGORIA: Capacitación</h2>
                <h4>Se evalúa el nivel educativo alcanzado como así también todos los cursos realizados
                y participación en seminarios con temáticas acordes al puesto de trabajo</h4>

<!--Empiezan las preguntas abiertas -->
<p>&nbsp;</p>
<table>
	<tr>
		<td align="left" valign="top"><span id="descrip">
			<label align="left">DESCRIPCIÓN DEL PUESTO</label>
        <textarea name="descrip" id="descrip" cols="120" rows="11" placeholder="Escriba aquí"></textarea>
        </span>
		</td>
	</tr>
	<tr>
		<td>
			<h4>Detalle los cursos, licenciaturas, posgrados o diplomaturas que ha tomado.
				Puede incluir cursos cortos.</h4>
		</td>
	</tr>
	<tr>
		<td>
			<table>
				<tbody>
					<h5><u>Estudios terciarios y/o universitarios</u></h5>
				</tbody>
				<tr>
					<td>Fecha de inicio</td>
					<td><input type="text" name="EInicio" id="EInicio" placeholder="AAAA-MM-DD"></td>
				</tr>
				<tr>
					<td>Fecha de Finalización</td>
					<td><input type="text" name="EFinal" id="EFinal" placeholder="AAAA-MM-DD"></td>
				</tr>
				<tr>
					<td>Nombre de la Institución</td>
					<td><input type="text" name="Einsti" id="Einsti"></td>
				</tr>
				<tr>
					<td>Programa académico</td>
					<td><input type="text" name="acade" id="acade"></td>
				</tr>
				<tr>
					<td>Grado Obtenido</td>
					<td><input type="text" name="grado" id="grado"></td>
				</tr>
				<tr>
					<td>Distinciones y Reconocimiento</td>
					<td><input type="text" name="distReco" id="distReco"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td><h4>¿Cómo contribuye su nivel académico a su desempeño laboral?</h4></td>
	</tr>
	<tr>
		<td>
			<table>
				<thead>
					<h5><u>Cursos y Seminarios</u></h5>
				</thead>
				<tr>
					<td>Fecha de inicio</td>
					<td><input type="text" name="CInicio" id="CInicio" placeholder="AAAA-MM-DD"></td>
				</tr>
				<tr>
					<td>Fecha de Finalización</td>
					<td><input type="text" name="CFinal" id="CFinal" placeholder="AAAA-MM-DD"></td>
				</tr>
				<tr>
					<td>Nombre de la Institución</td>
					<td><input type="text" name="insti" id="Einsti"></td>
				</tr>
				<tr>
					<td>Nombre del Curso</td>
					<td><input type="text" name="nCurso" id="nCurso"></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="descrip">
			<label align="left">¿Cómo contribuyó la capacitación en su puesto de trabajo?</label>
        <textarea name="descrip" id="descrip" cols="120" rows="11" placeholder="Escriba aquí"></textarea>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="descrip">
			<label align="left">¿Comparte los conocimientos adquiridos con sus compañeros de trabajo?</label>
        <textarea name="descrip" id="descrip" cols="120" rows="11" placeholder="Escriba aquí"></textarea>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="descrip">
			<label align="left">¿En qué otras temáticas que aporten a su puesto de trabajo le gustaría capacitarse?</label>
        <textarea name="descrip" id="descrip" cols="120" rows="11" placeholder="Escriba aquí"></textarea>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="descrip">
			<label align="left">¿Por qué se está postulando al premio?¿Por qué se postula en esta categoría?</label>
        <textarea name="descrip" id="descrip" cols="120" rows="11" placeholder="Escriba aquí"></textarea>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="descrip">
			<label align="left">¿Qué otras categorías además de las actuales cree que merecen reconocimiento?</label>
        <textarea name="descrip" id="descrip" cols="120" rows="11" placeholder="Escriba aquí"></textarea>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="descrip">
			<label align="left">Sugerencias</label></label>
        <textarea name="descrip" id="descrip" cols="120" rows="11" placeholder="Escriba aquí"></textarea>
        </span>
		</td>
	</tr>

</table>
<!-- Terminan las preguntas abiertas -->

                      <p>&nbsp;</p>
                      <table width="100%" height="186" border="0,5" cellspacing="4">


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
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("telvot", "none", {minChars:7, maxChars:12});
var sprytextfield2 = new Spry.Widget.ValidationTextField("telef", "none", {minChars:7, maxChars:12});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("descrip", {minChars:5});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("obser2", {minChars:5});
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
