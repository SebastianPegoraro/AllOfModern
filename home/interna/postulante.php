<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");
$jurpost=$_REQUEST['jur'];
$dnivotante=$_REQUEST['dni'];
  abrirBase();
        mysql_query("SET NAMES 'utf8'");
        $result = mysql_query("SELECT JurDenominacion FROM padron WHERE Documento=$dnivotante");
  cerrarBase();
        $jurpost = mysql_fetch_array($result);
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
  <div class="row votos-img">
    <div class="col-md-12 col-xs-12">
      <img src="images/VOTOS.png" alt="" >
    </div>
  </div>
  <div class="container interna white">

    <form class="" action="guarda.php" method="post">

      <div class="container"><!--Colaboracion-->
        <div class="row">
          <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
            <h3 class="regular">COLABORACI&OacuteN EN PROYECTOS SOCIALES</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
            <h2>.............................................</h2>
          </div>
        </div>
        <?php
        abrirBase();
      	mysql_query("SET NAMES 'utf8'");
      	$resulta = mysql_query("SELECT NomyApePos FROM votos WHERE categoria='Colaboracion' AND juris='$jurpost[0]'");
      	cerrarBase();
        $fila = mysql_fetch_row($resulta);
        if ($fila[0] != "") {
            ?>
            <div class="row">
              <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
                <h1 class="bold"><input type="radio" name="nomvotado" value="<?php echo $fila[0] ?>">
                 <?php echo $fila[0] ?></h1>
              </div>
            </div>
          <?php
        }else {
          ?>
          <div class="row">
            <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
              <h2 class="bold">Nadie de esta Jurisdicción se postuló en esta categoría</h2>
            </div>
          </div>
          <?php
        }
        ?>
      </div><!--Fin Colaboracion-->

      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <br><br><br><br>
          </div>
        </div>
      </div>

      <div class="container"><!--Capacitacion-->
        <div class="row">
          <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
            <h3 class="regular"> CAPACITACI&OacuteN</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
            <h2>.............................................</h2>
          </div>
        </div>
        <?php
        abrirBase();
        mysql_query("SET NAMES 'utf8'");
        $resulta = mysql_query("SELECT NomyApePos FROM votos WHERE categoria='Capacitacion' AND juris='$jurpost[0]'");
        cerrarBase();
        $fila = mysql_fetch_row($resulta);
        if ($fila[0] != "") {
            ?>
            <div class="row">
              <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
                <h1 class="bold"><input type="radio" name="nomvotado" value="<?php echo $fila[0] ?>">
                 <?php echo $fila[0] ?></h1>
              </div>
            </div>
          <?php
        }else {
          ?>
          <div class="row">
            <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
              <h2 class="bold">Nadie de esta Jurisdicción se postuló en esta categoría</h2>
            </div>
          </div>
          <?php
        }
        ?>
      </div><!--Fin Capacitacion-->

      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <br><br><br><br>
          </div>
        </div>
      </div>

      <div class="container"><!--Proyectos-->
        <div class="row">
          <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
            <h3 class="regular"> PROYECTOS ESPECIALES - TRANSVERSALES</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
            <h2>.............................................</h2>
          </div>
        </div>
        <?php
        abrirBase();
        mysql_query("SET NAMES 'utf8'");
        $resulta = mysql_query("SELECT NomyApePos FROM votos WHERE categoria='Proyectos' AND juris='$jurpost[0]'");
        cerrarBase();
        $fila = mysql_fetch_row($resulta);
        if ($fila[0] != "") {
            ?>
            <div class="row">
              <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
                <h1 class="bold"><input type="radio" name="nomvotado" value="<?php echo $fila[0] ?>">
                 <?php echo $fila[0] ?></h1>
              </div>
            </div>
          <?php
        }else {
          ?>
          <div class="row">
            <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
              <h2 class="bold">Nadie de esta Jurisdicción se postuló en esta categoría</h2>
            </div>
          </div>
          <?php
        }
        ?>
      </div><!--Fin Proyectos-->

      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <br><br><br><br>
          </div>
        </div>
      </div>

      <div class="container"><!--Innovacion-->
        <div class="row">
          <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
            <h3 class="regular"> INNOVACI&OacuteN EN EL PUESTO DE TRABAJO</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
            <h2>.............................................</h2>
          </div>
        </div>
        <?php
        abrirBase();
        mysql_query("SET NAMES 'utf8'");
        $resulta = mysql_query("SELECT NomyApePos FROM votos WHERE categoria='Innovacion' AND juris='$jurpost[0]'");
        cerrarBase();
        $fila = mysql_fetch_row($resulta);
        if ($fila[0] != "") {
            ?>
            <div class="row">
              <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
                <h1 class="bold"><input type="radio" name="nomvotado" value="<?php echo $fila[0] ?>">
                 <?php echo $fila[0] ?></h1>
              </div>
            </div>
          <?php
        }else {
          ?>
          <div class="row">
            <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
              <h2 class="bold">Nadie de esta Jurisdicción se postuló en esta categoría</h2>
            </div>
          </div>
          <?php
        }
        ?>
      </div><!--Fin Innovacion-->

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
            <input type="checkbox" name="dnivotante" value="<?php echo $dnivotante ?>" style="visibility: hidden;" checked>
            <h3><input class="voto-submit book" type="submit" name="Confirmar" value="CONFIRMAR"></h3>
          </div>
        </div>
      </div>

    </form>
  </div>
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

</body>

</html>
