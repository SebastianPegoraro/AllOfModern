<?php include("conect.php");
error_reporting(0);
$postulante=$_GET['dni'];
conectar();
	mysql_query("SET NAMES 'utf8'");
	$result = mysql_query("SELECT dnipostul, NomyApePos, oficina, npostulante, evaluado FROM padronfinal WHERE dnipostul=$postulante");
	desconectar();
	$row = mysql_fetch_array($result);
	$dni=$row[0];
	$apeynom=$row[1];
	$oficina=$row[2];
	$npostul=$row[3];
	$evaluado=$row[4];
if(($evaluado=="Si") || ($dni=="")){
	header("Location: error.html");
	}
?>

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
    <link rel="shortcut icon" href="img/icono.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Principal</title>

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

<script language=JavaScript>
function subir() {
   var myForm = document.form1;
   myForm.cargo.focus();
   }
</script>
</head>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
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
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2>
					PLANILLA DE EVALUACI&Oacute;N<br>
				</h2>
				<form id="form1" name="form1" method="post" action="Principal.php" class="form-horizontal well">
					<div class="form-group">
					    <label for="apeynom" class="col-sm-2 control-label">Nombre del Agente</label>
					    <div class="col-sm-10">
					    	<span id="apeynom"></span>
						    <input type="text" name="apeynom" id="apeynom" class="form-control" value="<?php echo $apeynom; ?>" size="50" readonly="readonly" />
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label for="oficina" class="col-sm-2 control-label">Oficina en la que Trabaja</label>
					    <div class="col-sm-10">
					    	<span id="oficina"></span>
						    <input type="text" name="oficina" id="oficina" class="form-control" value="<?php echo $oficina; ?>" size="50" readonly="readonly" />
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label for="dni" class="col-sm-2 control-label">DNI</label>
					    <div class="col-sm-10">
					    	<span id="dni"></span>
						    <input type="text" name="dni" id="dni" class="form-control" value="<?php echo $dni; ?>" size="50" readonly="readonly" />
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label for="cargo" class="col-sm-2 control-label">Cargo</label>
					    <div class="col-sm-10">
					    	<span id="cargo"></span>
						    <input type="text" name="cargo" id="cargo" class="form-control"/>
						    <input name="oculto" type="hidden" id="oculto" value="cargo"/>
						    <span class="textfieldRequiredMsg"><br />
            Ingresar Cargo del Postulante.</span></span>            <input name="npostul" type="hidden" id="npostul" value="<?php echo $npostul; ?>" /></th>
					    </div>
				  	</div>
				  	
					<th colspan="2" align="left" valign="middle" scope="row"><h2><small>Instrucciones de llenado:</small></h2>
					            <p>A continuación se detallan nueve (9) características acordes al perfil que debe reunir aquel empleado postulante al “Premio al Empleado Público del Año”. La suma total de los conceptos a evaluar es de 90 puntos. Cada concepto representa 10 puntos del total de la evaluación. </p>
					            <p>Cada concepto contempla dos (2) atributos con un valor de 5 puntos cada uno. </p>
					            <p>El jefe, evaluará a su empleado en cada atributo, seleccionando el casillero de “Siempre”, “Regularmente” o “nunca”, según corresponda. </p>
					            <p>En caso de no ser posible hacer una valoración de algún atributo, deberá marcar “NS/ NC”.</p>
					            <p>Si en la evaluación del jefe, el agente evaluado presenta siempre el atributo evaluado tendrá el total del puntaje que es de 5 puntos, si lo presenta regularmente tendrá la mitad del puntaje que será de 2,5 puntos y si nunca lo presenta no tendrá puntaje.</p>
					            <p>Seleccionar la opción que usted considera es más apropiada para el empleado que se encuentra evaluando. Todos los campos son obligatorios, para ser valida la evaluación. </p>
					            <p>Las observaciones no son campos obligatorios, pero servirán de aporte al momento en que el jurado realice la evaluación de las postulaciones.</p>
					</th>

			    	<button type="submit" name="Consultar" id="Consultar" class="btn btn-default" value="Realizar Evaluacion" >
			    		Realizar Evaluación <i class="fa fa-arrow-right"></i>
			    	</button>
				</form>
			</div>
		</div>
	</div>

   
    </form></th>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
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
