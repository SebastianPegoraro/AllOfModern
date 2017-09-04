<?php
include("conect.php");
//controlar seguridad
$dnipost=$_REQUEST['dni'];
$jurpost=$_REQUEST['jurpost'];
if($dnipost==""){
  //header("Location: index.html");
  }
//Tiramos una consulta a la base para traer los datos
//Postulante
abrirBase();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT JurDenominacion, ApellidoyNombres, OfiDenomin FROM padron WHERE Documento=$dnipost");
	cerrarBase();
	$row = mysql_fetch_array($result);
	$jurdenomin=$row[0];
	$apeynompost=$row[1];
	$ofi=$row[2];
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Capacitacion</title>
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
              <td width="28%" align="left" bgcolor="#FFFFFF"><input name="direc" type="text" id="direc" size="40" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo" /></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Jurisdicci&oacuten</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="jur" type="text" id="jur" value="<?php echo $jurdenomin;?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Tel&eacutefono Personal/Laboral*</td>
              <td align="left" bgcolor="#FFFFFF"><span id="telef">
              <input name="telef" type="text" id="telef" size="40" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"/>
              <br />
              <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldMinCharsMsg"><br />
              No se cumple el m&iacutenimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el n&uacutemero m&aacuteximo de caracteres(12).</span></span></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Oficina</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="oficina" type="text" id="oficina" value="<?php echo $ofi;?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Localidad</td>
              <td align="left" bgcolor="#FFFFFF"><input name="local" type="text" id="local" size="40" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"/></td>
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
              <th bgcolor="#FFFFFF" scope="row"><input name="cargo" type="text" id="cargo" size="40" data-toggle="popover" data-placement="right" data-content="Debe rellenar este campo"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Jefe Inmediato Superior</td>
              <td align="left" bgcolor="#FFFFFF"><input name="jefeSup" type="text" id="jefeSup" size="40" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"/></td>
	    			</tr>
						<tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Correo Electr&oacutenico</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="correo" type="text" id="correo" size="40" data-toggle="popover" data-placement="right" data-content="Debe rellenar este campo"/></th>
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
                <h2>CATEGORIA: Capacitaci&oacuten</h2>
                <h4>Se eval&uacutea el nivel educativo alcanzado como as&iacute tambi&eacuten todos los cursos realizados
                y participaci&oacuten en seminarios con tem&aacuteticas acordes al puesto de trabajo</h4>
       <input type="checkbox" name="categoria" value="Capacitacion" style="visibility: hidden;" checked>
<!--Empiezan las preguntas abiertas -->
<p>&nbsp;</p>
<table>
	<tr>
		<td align="left" valign="top"><span id="obser1">
			<p><label align="left">DESCRIPCI&OacuteN DEL PUESTO</label></p>
        <p><textarea name="obser1" id="obser1" cols="120" rows="11" placeholder="Escriba aqu&iacute" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"></textarea></p>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser2">
			<p><label align="left">Detalle los cursos, licenciaturas, posgrados o diplomaturas que ha tomado. Pude incluir cursos cortos.</label></p><br>
      <p><label align="left">Estudios terciarios y/o universitarios</label></p>
        <p><textarea name="obser2" id="obser2" cols="120" rows="11" placeholder="Escriba aqu&iacute" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"></textarea></p>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser3">
			<p><label align="left">¿C&oacutemo constribuye su nivel acad&eacutemico a su desempe&ntildeo laboral?</label></p>
        <p><textarea name="obser3" id="obser3" cols="120" rows="11" placeholder="Escriba aqu&iacute" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"></textarea></p>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser4">
			<p><label align="left">Cursos y seminarios</label></p>
        <p><textarea name="obser4" id="obser4" cols="120" rows="11" placeholder="Detalle aqu&iacute el nombre de la instituci&oacuten, el nombre del curso y su duraci&oacuten. Si son varios, repita el procedimiento." data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"></textarea></p>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser5">
			<p><label align="left">¿C&oacutemo contribuy&oacute la capacitaci&oacuten en su puesto de trabajo?</label></p>
        <p><textarea name="obser5" id="obser5" cols="120" rows="11" placeholder="Escriba aqu&iacute" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"></textarea></p>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser6">
			<p><label align="left">¿Comparte los conocimientos adquiridos con sus compa&ntildeeros de trabajo?</label></p>
        <p><textarea name="obser6" id="obser6" cols="120" rows="11" placeholder="Escriba aqu&iacute" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"></textarea></p>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser7">
			<p><label align="left">¿En qu&eacute otras tem&aacuteticas que aporten a su puesto de trabajo le gustar&iacutea capacitarse?</label></p>
        <p><textarea name="obser7" id="obser7" cols="120" rows="11" placeholder="Escriba aqu&iacute" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"></textarea></p>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser8">
			<p><label align="left">¿Por qu&eacute se est&aacute postulando al premio?¿Por qu&eacute se postula en esta categor&iacutea?</label></p>
        <p><textarea name="obser8" id="obser8" cols="120" rows="11" placeholder="Escriba aqu&iacute" data-toggle="popover" data-placement="left" data-content="Debe rellenar este campo"></textarea></p>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser9">
			<p><label align="left">¿Qu&eacute otras categor&iacuteas adem&aacutes de las actuales cree que merecen reconocimiento?</label></p>
        <p><textarea name="obser9" id="obser9" cols="120" rows="11" placeholder="Escriba aqu&iacute"></textarea></p>
        </span>
		</td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser10">
			<p><label align="left">Sugerencias</label></label></p>
        <p><textarea name="obser10" id="obser10" cols="120" rows="11" placeholder="Escriba aqu&iacute"></textarea></p>
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
                          <td colspan="2" align="center"><input type="button" name="button2" id="button2" value="Confirmar la Votacion" /></td>
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
<div class="modal fade" tabindex="-1" role="dialog" id="msgerror">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error!</h4>
      </div>
      <div class="modal-body">
        <p>Hay campos requeridos sin rellenar!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script type="text/javascript">
  $("#button2").on("click", function(){
    var hayerror = false;
    $("input[type = text]").each(function(){
      if ($(this).val().trim() == "") {
        $(this).css("background-color","#f2dede");

        hayerror =true;
      }
    });
    $("textarea").each(function(){
      if ($(this).attr("id") != "obser9" && $(this).attr("id") != "obser10") {
        if ($(this).val().trim() == "") {
          $(this).css("background-color","#f2dede");
          hayerror =true;
        }
      }
    });
    if (hayerror) {
        $("#msgerror").modal('show');
    } else {
      $("#ble").submit();
    }

  });
</script>
</body>
</html>
