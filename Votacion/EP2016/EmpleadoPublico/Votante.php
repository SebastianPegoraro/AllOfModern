<?php 
$dnipost=$_REQUEST['dni'];
$jurpost=$_REQUEST['jur'];
if($dnipost==""){
	header("Location: index.html");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CHACO - Premio al Empleado Público 2016</title>
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
	<a class="boton-voto" href="#"><img src="images/boton-voto.png" alt="Votá acá"></a>
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
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>
					INGRESA TU DNI<br>
					<small>Y LA JURISDICCI&Oacute;N QUE APARECE EN EL RECIBO DE SUELDO</small>
				</h2>
				<form id="form1" name="form1" method="post" action="consulta.php" class="form-horizontal well">
		
 				<div class="form-group">
 						<label for="dnipostulante" class="col-sm-2 control-label">DNI</label>
					<div class="col-sm-10">
							<input type="hidden" name="dnipostulante" id="dnipostulante" value="<?php echo $dnipost ?>"/>
            				<input type="hidden" name="jurpost" id="jurpost" value="<?php echo $jurpost ?>" />
						   	<span id="dnivotante"></span>
						    <input type="text" name="dnivotante" id="dnivotante" class="form-control"/>
						    <input name="oculto" type="hidden" id="oculto" value="votante" />
				    </div>
				</div>
				<div class="form-group">
					    <label for="jurpost" class="col-sm-2 control-label">JURISDICCI&Oacute;N</label>
					    <div class="col-sm-10">
						    <select name="jurvot" id="jurvot">
				              <option value="2">SECRETARIA GENERAL DE LA GOBERNACION</option>
				              <option value="3">MINISTERIO DE GOBIERNO JUSTICIA Y SEGURIDAD</option>
				              <option value="4">MINISTERIO DE HACIENDA Y FINANZAS</option>
				              <option value="5">MINISTERIO DE PRODUCCION</option>
				              <option value="6">MINISTERIO DE SALUD PUBLICA</option>
				              <option value="10">INSTITUTO DE DESARROLLO URBANO Y VIVIENDA</option>
				              <option value="11">MINISTERIO DE INDUSTRIA,EMPLEO Y TRABAJO</option>
				              <option value="12">LOTERIA CHAQUEÃ‘A</option>
				              <option value="14">INSTITUTO DE COLONIZACION</option>
				              <option value="15">INSTITUTO DE INVESTIGACION FORESTAL Y AGROPECUARIA</option>
				              <option value="16">INSSSEP</option>
				              <option value="18">FISCALIA DE ESTADO</option>
				              <option value="19">CONTADURIA GENERAL DE LA PROVINCIA</option>
				              <option value="20">ADMINISTRACION TRIBUTARIA PROVINCIAL (A.T.P)</option>
				              <option value="21">POLICIA PROVINCIAL</option>
				              <option value="23">MINISTERIO DE INFRAESTRUCTURA Y SERVICIOS PUBLICOS</option>
				              <option value="24">ADMINISTRACION PROVINCIAL DEL AGUA</option>
				              <option value="25">INSTITUTO DEL ABORIGEN CHAQUEÃ‘O</option>
				              <option value="26">TESORERIA GENERAL DE LA PROVINCIA</option>
				              <option value="28">MINISTERIO DE DESARROLLO SOCIAL</option>
				              <option value="29">MINISTERIO DE EDUCACION CULTURA CIENCIA Y TECNOLOGIA</option>
				              <option value="32">MINISTERIO DE PLANIFICACION Y AMBIENTE</option>
				              <option value="33">SECRETARIA DE INVERSIONES,ASUNTOS INTERNAC.Y PROM</option>
				              <option value="34">INSTITUTO DE CULTURA DEL CHACO</option>
				              <option value="37">IPRODICH</option>
				              <option value="39">ADMINISTRACION PUERTO DE BARRANQUERAS</option>
				              <option value="42">INSTITUTO DE TURISMO DEL CHACO</option>
				              <option value="45">MINISTERIO DE DESARROLLO URBANO Y TERRITORIAL</option>
				              <option value="46">SECRETARIA DE DERECHOS HUMANOS</option>
				              <option value="49">ESCUELA DE GOBIERNO DE LA PROVINCIA DEL CHACO</option>
				              <option value="51">INST. PROVINCIAL DE ADMIN. PUBLICA DEL CHACO</option>
				            </select>
				        </div>
				    </div>
				<button type="submit" name="Consultar" id="Consultar" class="btn btn-default">
			    		SIGUIENTE <i class="fa fa-arrow-right"></i>
			    </button>

         <!--<tr>
          <th width="278" align="right" valign="middle" scope="row"><h3>
            <input type="hidden" name="dnipostulante" id="dnipostulante" value="<?php echo $dnipost ?>"/>
            <input type="hidden" name="jurpost" id="jurpost" value="<?php echo $jurpost ?>" />
            DNI: </h3></th>
          <td width="280" align="left" valign="middle" bgcolor="#FFFFFF"><p>
            <label for="dnivotante"></label>
            <span id="dnivotante">
            <input type="text" name="dnivotante" id="dnivotante" />
            <input name="oculto" type="hidden" id="oculto" value="votante" />
          </p></td>
        </tr>
        <tr>
          <th colspan="2" align="center" valign="middle" scope="row"><p>
            <select name="jurvot" id="jurvot">
              <option value="2">SECRETARIA GENERAL DE LA GOBERNACION</option>
              <option value="3">MINISTERIO DE GOBIERNO JUSTICIA Y SEGURIDAD</option>
              <option value="4">MINISTERIO DE HACIENDA Y FINANZAS</option>
              <option value="5">MINISTERIO DE PRODUCCION</option>
              <option value="6">MINISTERIO DE SALUD PUBLICA</option>
              <option value="10">INSTITUTO DE DESARROLLO URBANO Y VIVIENDA</option>
              <option value="11">MINISTERIO DE INDUSTRIA,EMPLEO Y TRABAJO</option>
              <option value="12">LOTERIA CHAQUEÃ‘A</option>
              <option value="14">INSTITUTO DE COLONIZACION</option>
              <option value="15">INSTITUTO DE INVESTIGACION FORESTAL Y AGROPECUARIA</option>
              <option value="16">INSSSEP</option>
              <option value="18">FISCALIA DE ESTADO</option>
              <option value="19">CONTADURIA GENERAL DE LA PROVINCIA</option>
              <option value="20">ADMINISTRACION TRIBUTARIA PROVINCIAL (A.T.P)</option>
              <option value="21">POLICIA PROVINCIAL</option>
              <option value="23">MINISTERIO DE INFRAESTRUCTURA Y SERVICIOS PUBLICOS</option>
              <option value="24">ADMINISTRACION PROVINCIAL DEL AGUA</option>
              <option value="25">INSTITUTO DEL ABORIGEN CHAQUEÃ‘O</option>
              <option value="26">TESORERIA GENERAL DE LA PROVINCIA</option>
              <option value="28">MINISTERIO DE DESARROLLO SOCIAL</option>
              <option value="29">MINISTERIO DE EDUCACION CULTURA CIENCIA Y TECNOLOGIA</option>
              <option value="32">MINISTERIO DE PLANIFICACION Y AMBIENTE</option>
              <option value="33">SECRETARIA DE INVERSIONES,ASUNTOS INTERNAC.Y PROM</option>
              <option value="34">INSTITUTO DE CULTURA DEL CHACO</option>
              <option value="37">IPRODICH</option>
              <option value="39">ADMINISTRACION PUERTO DE BARRANQUERAS</option>
              <option value="42">INSTITUTO DE TURISMO DEL CHACO</option>
              <option value="45">MINISTERIO DE DESARROLLO URBANO Y TERRITORIAL</option>
              <option value="46">SECRETARIA DE DERECHOS HUMANOS</option>
              <option value="49">ESCUELA DE GOBIERNO DE LA PROVINCIA DEL CHACO</option>
              <option value="51">INST. PROVINCIAL DE ADMIN. PUBLICA DEL CHACO</option>
            </select>
          </p></th>
          </tr>
        <tr>
          <th colspan="2" align="center" valign="middle" scope="row"><input type="submit" name="Consultar" id="Consultar" value="SIGUIENTE" /></th>
        </tr>
      </table>-->
    </form>

		</div>
	</div>
</div>
	<div class="footer-container">
		<footer class="main container-fluid">
			<div class="row">
				<div class="col-sm-5 left">
					<img class="logo-footer" src="images/logo-sggc.png" alt="">
				</div>
				<div class="col-sm-3 middle">
					<img class="logo-footer" src="images/logo-sub-cgpe.png" alt="">
				</div>
				<div class="col-sm-4 right">
					<img class="logo-footer" src="images/logo-dgme.png" alt="">
				</div>
			</div>
		</footer>
	</div>
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../SpryAssets/SpryValidationTextField.js"></script>
	<script type="text/javascript">
		(function($){
			var sprytextfield1 = new Spry.Widget.ValidationTextField("dnivotante", "integer", {minChars:7, maxChars:8});
		}(jQuery));
	</script>
</body>
</html>
