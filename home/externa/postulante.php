<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");
$dnivotante=$_REQUEST['dni'];
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

<!--<div class="container contacto text-center">-->
  <div class="row contacto text-center">
    <div class="col-md-6 col-xs-6 col-md-offset-3 col-xs-offset-3">
      <img src="images/EXT-HEAD.png" alt="">
      <br><br>
    </div>
  </div>
  <div class="row blue-votos contacto text-center">
    <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
      <br><br><br><br>
      <img src="images/PERFIL-1.gif" alt="">
      <form class="" action="guarda.php" method="post">
        <input type="checkbox" name="postulado" value="1" style="visibility: hidden;" checked>
        <input type="checkbox" name="dnivotante" value="<?php echo $dnivotante;?>" style="visibility: hidden;" checked>
        <h3><input class="book" type="submit" name="confirmar" value="VOTÁ AQUÍ!"></h3>
      </form>
      <br>
    </div>
  </div>
  <div class="row cele-votos contacto text-center">
    <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
      <br><br><br><br>
      <img src="images/PERFIL-2.gif" alt="">
      <form class="" action="guarda.php" method="post">
        <input type="checkbox" name="postulado" value="2" style="visibility: hidden;" checked>
        <input type="checkbox" name="dnivotante" value="<?php echo $dnivotante;?>" style="visibility: hidden;" checked>
        <h3><input class="book" type="submit" name="confirmar" value="VOTÁ AQUÍ!"></h3>
      </form>
      <br>
    </div>
  </div>
  <div class="row blue-votos contacto text-center">
    <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
      <br><br><br><br>
      <img src="images/PERFIL-3.gif" alt="">
      <form class="" action="guarda.php" method="post">
        <input type="checkbox" name="postulado" value="3" style="visibility: hidden;" checked>
        <input type="checkbox" name="dnivotante" value="<?php echo $dnivotante;?>" style="visibility: hidden;" checked>
        <h3><input class="book" type="submit" name="confirmar" value="VOTÁ AQUÍ!"></h3>
      </form>
      <br>
    </div>
  </div>
  <div class="row cele-votos contacto text-center">
    <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
      <br><br><br><br>
      <img src="images/PERFIL-4.gif" alt="">
      <form class="" action="guarda.php" method="post">
        <input type="checkbox" name="postulado" value="4" style="visibility: hidden;" checked>
        <input type="checkbox" name="dnivotante" value="<?php echo $dnivotante;?>" style="visibility: hidden;" checked>
        <h3><input class="book" type="button" name="confirmar" value="VOTÁ AQUÍ!"></h3>
      </form>
      <br>
    </div>
  </div>
  <div class="row blue-votos contacto text-center">
    <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
      <br><br><br><br>
      <img src="images/PERFIL-5.gif" alt="">
      <form class="" action="guarda.php" method="post">
        <input type="checkbox" name="postulado" value="5" style="visibility: hidden;" checked>
        <input type="checkbox" name="dnivotante" value="<?php echo $dnivotante;?>" style="visibility: hidden;" checked>
        <h3><input class="book" type="button" name="confirmar" value="VOTÁ AQUÍ!"></h3>
      </form>
      <br>
    </div>
  </div>
  <div class="row cele-votos contacto text-center">
    <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
      <br><br><br><br>
      <img src="images/PERFIL-6.gif" alt="">
      <form class="" action="guarda.php" method="post">
        <input type="checkbox" name="postulado" value="6" style="visibility: hidden;" checked>
        <input type="checkbox" name="dnivotante" value="<?php echo $dnivotante;?>" style="visibility: hidden;" checked>
        <h3><input class="book" type="button" name="confirmar" value="VOTÁ AQUÍ!"></h3>
      </form>
      <br>
    </div>
  </div>
<!--</div>-->

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
