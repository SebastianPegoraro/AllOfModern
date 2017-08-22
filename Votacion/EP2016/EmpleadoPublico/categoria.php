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
	<a class="boton-voto" href="#"><img src="images/boton-voto.png" alt="Vot� ac�"></a>
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
					SELECCIONA UNA DE LAS CATEGORIAS Y SUBCATEGORIA<br>
				</h2>
				<form id="form1" name="form1" method="post" action="consulta.php" class="form-horizontal well">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<!--Primero-->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h1 class="panel-tittle">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Proyectos Especiales/Transversales
									</a>
								</h1>
							</div>
							<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					      <div class="list-group">
									<div data-toggle="buttons">
										<a href="formulario-proyectos.php" class="btn btn-primary">Transparencia</a>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="pe2" autocomplete="off">Gestion
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="pe3" autocomplete="off">Mejora
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="pe4" autocomplete="off">Participacion Ciudadana
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="pe5" autocomplete="off">Servicio de Atencion al Ciudadano
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="pe6" autocomplete="off">Mejora a la Gestion Publica
									  </label>
									</div>
					      </div>
					    </div>
						</div>
						<!--Segundo-->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h1 class="panel-tittle">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
										Capacitación
									</a>
								</h1>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
					      <div class="list-group">
									<div data-toggle="buttons">
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option7" autocomplete="off">Adquiridas
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option8" autocomplete="off">Impartidas
									  </label>
									</div>
					      </div>
					    </div>
						</div>
						<!--Tercero-->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTree">
								<h1 class="panel-tittle">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
										Colaboración en Proyectos Sociales
									</a>
								</h1>
							</div>
							<div id="collapseTree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTree">
					      <div class="list-group">
									<div data-toggle="buttons">
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option9" autocomplete="off">Medioambiente
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option10" autocomplete="off">Salud
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option11" autocomplete="off">Inclusión Social
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option12" autocomplete="off">Seguridad
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option13" autocomplete="off">Defensa al Consumidor
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option14" autocomplete="off">Educación
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option15" autocomplete="off">Niñez, Adolecencia y Familia
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option16" autocomplete="off">Asistencia Social
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option17" autocomplete="off">Recreación
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option18" autocomplete="off">Comunicación
									  </label>
									</div>
					      </div>
					    </div>
						</div>
						<!--Cuarto-->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingFour">
								<h1 class="panel-tittle">
									<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
										Innovación en el Puesto de Trabajo
									</a>
								</h1>
							</div>
							<div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
					      <div class="list-group">
									<div data-toggle="buttons">
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option19" autocomplete="off">M Procesos
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option20" autocomplete="off">Incorporación de nuevas tecnologias
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option21" autocomplete="off">Canales de Comunicaión
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option22" autocomplete="off">Alternati a los Servicios
									  </label>
										<br>
										<label class="btn btn-primary">
									    <input type="radio" name="options" id="option23" autocomplete="off">Reutilización de Insumos
									  </label>
									</div>
					      </div>
					    </div>
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
