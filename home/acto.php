<!DOCTYPE html>
<html lang="es">
<?php
include("conect.php");
?>
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
      <div class="header-left-acto"></div>
      <div class="header-middle">
        <div class="dt title-container">
          <div class="dtc va-middle">
            <h1 class="header-title-premio medium">
							Acto Empleado P&uacuteblico <span class="anio regular">2017</span>
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
      <div class="col-sm-12">
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/acto1.png" alt="">
            </div>
            <div class="item">
              <img src="images/acto2.png" alt="">
            </div>
            <div class="item">
              <img src="images/acto3.png" alt="">
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
  			    <span aria-hidden="true"></span>
  			    <span class="sr-only">Previous</span>
  			  </a>
          <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
  			    <span aria-hidden="true"></span>
  			    <span class="sr-only">Next</span>
  			  </a>
        </div>
      </div>
    </div>

    <br><br><br>

    <div class="row">
      <div class="col-md-3 col-xs-3 contacto">
        <img src="images/acto-dni.gif" alt="Loading"/>
      </div>
      <div class="col-md-9 col-xs-9 acto text-center">
        <br>
        <h1 class="ingdni bold">Ingrese su D.N.I.</h1>
        <br>
        <br>
        <form class="form-horizontal" action="acto.php" method="get">
          <input type="text" name="dniagasajado" class="form-control dni">
          <h3><input class="consulta book" type="submit" name="confirmar" value="CONSULTAR"></h3>
        </form>
      </div>
    </div>

    <br><br><br>

    <?php
      if (isset($_GET['confirmar'])) {
        if (empty($_GET['dniagasajado'])) {
          ?>
          <div class="row">
            <div class="col-md-3 col-xs-3 contacto">
              <img src="images/acto-error.gif" alt="">
            </div>
            <div class="col-md-9 col-xs-9 acto text-center">
              <br>
              <h1 class="ingdni bold">ERROR!</h1>
              <br>
              <br>
              <h2 class="bold white">Lo sentimos, usted no es uno de los agasajados por el Día del Empleado Público</h2>
              <br>
              <br>
            </div>
          </div>
          <?php
        } else {
          $dniagasajado = $_REQUEST['dniagasajado'];
          abrirBase();
        	mysql_query("SET NAMES 'utf8'");
        	$result = mysql_query("SELECT * FROM agasajados WHERE dni=$dniagasajado");
        	cerrarBase();
        	$row = mysql_fetch_array($result);
          if ($row != "") {
          ?>
            <div class="row">
              <div class="col-md-3 col-xs-3 contacto">
                <img src="images/acto-descarga.gif" alt="Loading"/>
              </div>
              <div class="col-md-9 col-xs-9 acto text-center">
                <br>
                <h1 class="white bold">"Felicidades usted está invitado a participar del Acto por el Día del Empleado Público"</h1>
                <br>
                <div class="row">
                  <div class="col-md-2 col-xs-2 col-md-offset-5 col-xs-offset-5">
                    <img src="images/pdf.png" alt="">
                  </div>
                  <div class="col-md-3 col-xs-3 col-md-offset-4 col-xs-offset-4">
                    <h3><input class="descarga-btn book" data-toggle="modal" data-target="#myModal" type="submit" name="Confirmar" value="DESCARGAR"></h3>
                  </div>
                </div>
                <br>
                <h3 class="book white">-Puede descargar el PDF</h3>
                <h3 class="book white">-Puede puede pasar a retirar la invitación (Formato Papel) en la unidad RRHH de su Jurisdicción a partir de...</h3>
                <br>
                <br>
              </div>
            </div>
          <?php
          } else {
          ?>
          <div class="row">
            <div class="col-md-3 col-xs-3 contacto">
              <img src="images/acto-error.gif" alt="">
            </div>
            <div class="col-md-9 col-xs-9 acto text-center">
              <br>
              <h1 class="ingdni bold">ERROR!</h1>
              <br>
              <br>
              <h2 class="bold white">Lo sentimos, usted no es uno de los agasajados por el Día del Empleado Público</h2>
              <br>
              <br>
            </div>
          </div>
          <?php
          }
        }
      }
    ?>

  </div>

  <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Ingrese su número de celular...</h4>
        </div>
        <div class="modal-body">
          <p>Es importante facilitar un número válido, ya que desde la organización se contactarán para informar detalles en relación al encuentro. </p>
          <form class="form-group" action="guarda.php" method="post">
            <input class="form-control" type="text" placeholder="362 455-5555" name="telefono">
            <input type="hidden" name="dni" value="<?php echo $dniagasajado; ?>">
            <input type="submit" name="boton" id="boton" class="form-btn" value="Confirmar Celular">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

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
  <script type="text/javascript" src="js/validation.js"></script>

</body>

</html>
