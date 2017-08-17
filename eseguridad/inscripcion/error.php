<?php //header("Location: http://scgp.chaco.gov.ar/scgpchaco/");?>
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
	<?php 
	error_reporting(0);
	session_start();
	session_destroy();
	?>
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
	        <li>
	        	<a href="../index.html"><i class="fa fa-lg fa-home"></i>&nbsp;&nbsp;Portada</a>
	        </li>	             	
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>
					ERROR<br>
					<small>CONDICIONES PARA VOTAR</small>
				</h2>
				<form id="form1" name="form1" method="post" action="consulta.php" class="form-horizontal well">
					
				  	
    <strong>Para votar debe tener en cuenta los siguientes requisitos: </strong>
	<p><br><strong>1) </strong>Se permitirá un <strong>(1) solo voto</strong> por agente.</br></p>
	<p><br><strong>2) </strong>Usted podrá votar a un agente que pertenezca a la planta  permanente del Estado, se encuentre comprendido  en la Ley Nº 2017 y posea 10 años de antiguedad.</br></p>
	<p><br><strong>3) </strong>Usted deberá  prestar servicios bajo la modalidad contractual de planta permanente, contrato de servicios, contrato de obra, 			personal de gabinete o jornalizado.</br></p>
	<p><br><strong>4) </strong>Usted  debe prestar servicio en la Jurisdicción donde trabaja el agente al que postula.</br></p>
	<p><br><strong>5) </strong>Una vez que realice su voto, no habrá modificación con respecto al agente que postuló.</br></p>
	<p><br><strong>6) </strong>Usted deberá completar los campos indicados como obligatorios.</br></p>
	<p><br><strong>Recuerde: </strong>El objetivo del premio es reconocer la dedicación y contracción al trabajo y no el compañerismo.</p></br>
      </h3>
      <h3>&nbsp;</h3>
      <h3>
      <a href="http://scgp.chaco.gov.ar/scgpchaco/images/PROFyM/premioempleadopublico/2014/reglamentopremioempleado2014.pdf">*Descargar Reglamento</a></h3>
    <tr>
    <th colspan="2" align="center" valign="middle" bgcolor="#FFFFFF" scope="row"><h2><a href="index.php"><br />
      Volver a Ingresar Datos</a><br />
    </h2></th>
  </tr>
</table>
<h1>&nbsp;</h1>
</body>


			    	
				</form>
			</div>
		</div>

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
	<script type="text/javascript" src="../SpryAssets/SpryValidationTextField.js"></script>
	<script type="text/javascript">
		(function($){
			var sprytextfield1 = new Spry.Widget.ValidationTextField("dnipostulante", "integer", {minChars:7, maxChars:8});
		}(jQuery));
	</script>
</body>
</html>






