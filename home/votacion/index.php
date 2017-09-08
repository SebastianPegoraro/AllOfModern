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
          <li><a href="../index.html">INICIO</a></li>
          <li><a href="../quienes-somos.html">QUIENES SOMOS</a></li>
          <li><a href="../contacto.html">CONTACTO</a></li>
          <li><a href="https://web.facebook.com/ModernizacionC"><i class="fa fa-facebook"></i></a></li>
          <!-- Buscagor, para más adelante...
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
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>
					POSTULATE<br>
					<small>INGRESA TU DNI Y LA JURISDICCI&Oacute;N</small>
				</h2>
				<form id="form1" name="form1" method="post" action="consulta.php" class="form-horizontal well">
					<div class="form-group">
					    <label for="dnipostulante" class="col-sm-2 control-label">DNI</label>
					    <div class="col-sm-10">
					    	<span id="dnipostulante"></span>
						    <input type="text" name="dnipostulante" id="dnipostulante" class="form-control" required/>
						    <input name="oculto" type="hidden" id="oculto" value="postulante" />
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label for="jurpost" class="col-sm-2 control-label">JURISDICCI&Oacute;N</label>
					    <div class="col-sm-10">
					    	<select class="form-control" name="jurpost" id="jurpost">
				              <option value="2">SECRETARIA GENERAL DE GOBIERNO Y COORDINACION</option>
				              <option value="3">MINISTERIO DE GOBIERNO, JUSTICIA Y RELACION CON LA COMUNIDAD</option>
				              <option value="4">MINISTERIO DE HACIENDA Y FINANZAS</option>
				              <option value="5">MINISTERIO DE PRODUCCION</option>
				              <option value="6">MINISTERIO DE SALUD PUBLICA</option>
											<option value="7">MINISTERIO DE SEGURIDAD PUBLICA</option>
				              <option value="10">INSTITUTO DE DESARROLLO URBANO Y VIVIENDA</option>
				              <option value="11">MINISTERIO DE INDUSTRIA, COMERCIO Y SERVICIOS</option>
				              <option value="12">LOTERIA CHAQUE&NtildeA</option>
				              <option value="14">INSTITUTO DE COLONIZACION</option>
				              <option value="15">INSTITUTO DE INVESTIGACION FORESTAL Y AGROPECUARIA</option>
				              <option value="16">INSSSEP</option>
				              <option value="18">FISCALIA DE ESTADO</option>
				              <option value="19">CONTADURIA GENERAL DE LA PROVINCIA</option>
				              <option value="20">ADMINISTRACION TRIBUTARIA PROVINCIAL (A.T.P)</option>
				              <option value="21">POLICIA PROVINCIAL</option>
				              <option value="23">MINISTERIO DE INFRAESTRUCTURA Y SERVICIOS PUBLICOS</option>
				              <option value="24">ADMINISTRACION PROVINCIAL DEL AGUA</option>
				              <option value="25">INSTITUTO DEL ABORIGEN CHAQUE&NtildeO</option>
				              <option value="26">TESORERIA GENERAL DE LA PROVINCIA</option>
				              <option value="28">MINISTERIO DE DESARROLLO SOCIAL</option>
				              <option value="29">MINISTERIO DE EDUCACION CULTURA CIENCIA Y TECNOLOGIA</option>
				              <option value="32">MINISTERIO DE PLANIFICACION, AMBIENTE E INNOVACION TECNOLOGICA</option>
				              <option value="33">SECRETARIA DE INVERSIONES,ASUNTOS INTERNAC.Y PROM</option>
				              <option value="34">INSTITUTO DE CULTURA DEL CHACO</option>
				              <option value="37">IPRODICH</option>
				              <option value="39">ADMINISTRACION PUERTO DE BARRANQUERAS</option>
				              <option value="42">INSTITUTO DE TURISMO DEL CHACO</option>
				              <option value="45">MINISTERIO DE DESARROLLO URBANO Y TERRITORIAL</option>
				              <option value="46">SECRETARIA DE DERECHOS HUMANOS</option>
											<option value="48">INSTITUTO DE DEPORTE</option>
				              <option value="49">ESCUELA DE GOBIERNO DE LA PROVINCIA DEL CHACO</option>
				              <option value="51">INST. PROVINCIAL DE ADMIN. PUBLICA DEL CHACO</option>
				            </select>
					    </div>
				    </div>
            <div class="form-group">
					    <label for="categoria" class="col-sm-2 control-label">CATEGOR&IacuteA</label>
					    <div class="col-sm-10">
					    	<select class="form-control" name="categoria" id="categoria">
				              <option value="1">COLABORACI&OacuteN EN PROYECTOS SOCIALES</option>
				              <option value="2">CAPACITACI&OacuteN</option>
							        <option value="3">PROYECTOS ESPECIALES - TRANSVERSALES</option>
				              <option value="4">INNOVACI&OacuteN EN EL PUESTO DE TRABAJO</option>
				        </select>
					    </div>
				    </div>
			    	<button type="submit" name="Consultar" id="Consultar" class="btn btn-default">
			    		SIGUIENTE <i class="fa fa-arrow-right"></i>
			    	</button>
				    	<!-- <input type="submit" name="Consultar" id="Consultar" value="SIGUIENTE" /> -->
					<!-- <span id="dnipostulante"></span>
		            <input type="text" name="dnipostulante" id="dnipostulante" />
		            <input name="oculto" type="hidden" id="oculto" value="postulante" /> -->
				</form>
			</div>
		</div>

	</div>

  <!-- Footer -->
  <div class="footer-container">
    <footer class="main container-fluid">
      <div class="logos-gobierno text-center">
        <div class="logos-img">
          <img class="logo-footer" src="images/modern.png" alt="">
        </div>
        <div class="logos-img">
          <img class="logo-footer" src="images/secret.png" alt="">
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

</body>

</html>
