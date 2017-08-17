<?php 
include("conect.php");
$dni=$_GET['dni'];
//Controla que la persona este en el padron
conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT dni FROM padron_electoral WHERE dni=$dni");
	desconectar();
	$row = mysql_fetch_array($result);
	$evaluado=$row[0];	
if($evaluado==""){
	header("Location: error.html");
	exit;
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
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-app="pep2016">
	<div class="header-container">
		<header class="main container">
			<div class="header-left"></div>
			<div class="header-middle">
				<div class="dt title-container">
					<div class="dtc va-middle">
						<h1 class="header-title">
							Empleado Público del año <span class="anio">2016</span>
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
	        
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container content" ui-view>

		<p class="text-justify">
			<strong>Como CIUDADANO tenés la oportunidad de elegir,</strong> entre los ganadores de cada jurisdicción, al <strong>EMPLEADO PÚBLICO DEL PODER EJECUTIVO DEL AÑO 2016</strong>, por eso, a continuación te presentamos 5 (cinco) perfiles correspondientes a los ganadores de las 5 (cinco) jurisdicciones participantes. La identidad se mantiene oculta para garantizar la transparencia  y objetividad del concurso.<br />
		</p>

	    <p class="text-justify">
	    <FONT COLOR="red">
		Nota: el orden de los perfiles no tiene relación con el número de postulante que los candidatos hayan tenido
		en la instancia anterior. 
		Para preservar el anonimato de los candidatos, se los ordenaron aleatoriamente designándole a cada uno un número.
		</font>
		<br/>
		</p>

	<p align="center">
		<td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=A&dni=<?php echo $dni; ?>"><img src="img/PERFIL1.png"/></a></td>
	</p>
	<p align="center">
		<td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=B&dni=<?php echo $dni; ?>"><img src="img/PERFIL2.png"/></a></td>
	</p>
	<p align="center">
		<td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=C&dni=<?php echo $dni; ?>"><img src="img/PERFIL3.png"/></a></td>
	</p>
	<p align="center">
		<td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=D&dni=<?php echo $dni; ?>"><img src="img/PERFIL4.png"/></a></td>
	</p>
	<p align="center">
		<td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=E&dni=<?php echo $dni; ?>"><img src="img/PERFIL5.png"/></a></td>
	</p>
   |
	</div>
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
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/angular-ui-router.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	
</body>
</html>

