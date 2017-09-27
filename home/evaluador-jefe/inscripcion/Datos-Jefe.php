<?php 
$dnipost=$_REQUEST['postul'];
$jurpost=$_REQUEST['jurpost'];
$votante=$_REQUEST['votante'];
if($dnipost==""){
	header("Location: index.html");
	}
?>

<!DOCTYPE html>
<html lang="es">
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<!--<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>-->

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
	<a class="boton-voto" href="#"><img src="images/yacasi.png" alt="Votá acá"></a>
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
          DATOS DEL JEFE DE LA PERSONA POSTULADA<br>
        </h2>
		
    <form id="form1" name="form1" method="post" action="guarda-jefes.php" class="form-horizontal well">

    	<div class="form-group">
					    <label for="apeynom" class="col-sm-2 control-label">Apellido y Nombre:</label>
					    <div class="col-sm-10">
					    	<span id="apeynom"></span>
						    <input type="text" name="apeynom" id="apeynom" class="form-control"/>
						    <input name="oculto" type="hidden" id="oculto" value="postulante" />
						    <input type="hidden" name="dnipost" id="dnipost" value="<?php echo $dnipost ?>"/>
					    </div>
		</div>
		<div class="form-group">
					    <label for="cargo" class="col-sm-2 control-label">Cargo:</label>
					    <div class="col-sm-10">
					    	<span id="cargo"></span>
						    <input type="text" name="cargo" id="cargo" class="form-control"/>
						    <input name="oculto" type="hidden" id="oculto" value="postulante" />
						    <input type="hidden" name="jurpost" id="jurpost" value="<?php echo $jurpost ?>"/>
					    </div>
		</div>
		<div class="form-group">
					    <label for="tel" class="col-sm-2 control-label">Tel.</label>
					    <div class="col-sm-10">
					    	<span id="tel"></span>
						    <input type="text" name="tel" id="tel" class="form-control"/>
						    <input name="oculto" type="hidden" id="oculto" value="postulante" />
						    <input type="hidden" name="votante" id="votante" value="<?php echo $votante ?>"/>
					    </div>
		</div>             
		<div class="form-group">
					    <label for="email" class="col-sm-2 control-label">Mail</label>
					    <div class="col-sm-10">
					    	<span id="email"></span>
						    <input type="text" name="email" id="email" class="form-control"/>
						</div>
		</div>                
             
        <button type="submit" name="button" id="button" class="btn btn-default">
			    		SIGUIENTE <i class="fa fa-arrow-right"></i>
		</button>            
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
<!--<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {hint:"362-4411111"});
</script>-->

</body>

</html>
