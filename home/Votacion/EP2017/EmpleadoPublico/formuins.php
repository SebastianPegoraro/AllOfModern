<?php 
//controlar seguridad
$dnipost=$_REQUEST['postul'];
$votante=$_REQUEST['votante'];
if($dnipost==""){
	header("Location: index.html");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario-insssep</title>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-color: #006;
}
</style>
<script type="text/javascript">
function ocultar($nombre){
		if ($nombre.style.display=='none'){
		$nombre.style.display='block'; 
		$nombre.required="required";
		}
		else {
		$nombre.style.display='none'; 
		$nombre.required=false;
		}
	}
/*function validar(){
	conta=0;
	for(i=0;i<9;i++){
		elemento = document.getElementById("caracteristicas_"+i);
		if( elemento.checked ) {
		  conta++;
		}
	}
	if( conta==0 ){
	alert("Al menos 1(una) característica deberá seleccionar y agregar una breve descripción");
	return false;
	}
}*/
</script>
</head>

<body>
<?php 
error_reporting(0);
?>
<table width="1033" height="446" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th width="716" height="167" bgcolor="#FFFFFF" scope="row"><h1>Formulario Premio Empleado Publico<br />
      <br />
    2014</h1></th>
    <th width="295" bgcolor="#FFFFFF" scope="row"><img src="emp.png" width="100%" height="200" /></th>
  </tr>
  <tr>
    <th colspan="2" align="left" valign="top" bgcolor="#FFFFFF" scope="row"><form id="form1" name="form1" method="post" action="guarda.php">
<p style="color:rgb(248,67,67)">Nota: Recuerde que podrá votar una (1) sóla vez y a un (1) compañero.</p>	
      <table width="1013" border="0" cellspacing="4">
        <tr>
          <th width="558" bgcolor="#FFFFFF" scope="row"><h2>1. Datos del Empleado a quien quiere votar</h2>
          </th>
        </tr>
        <tr>
          <th scope="row"><table width="100%" border="0" cellspacing="4">
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Apellido Y Nombre*</th>
              <th align="left" bgcolor="#FFFFFF" scope="row"><span id="apeynom">
                <input name="apeynom" type="text" id="apeynom" size="40" />
                <span class="textfieldRequiredMsg"><br />
                Se necesita un valor.</span></span></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Dirección Laboral<br /></td>
              <td align="left" bgcolor="#FFFFFF"><input name="direc" type="text" id="direc" size="40" /></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Jurisdicción</th>
              <th align="left" bgcolor="#FFFFFF" scope="row"><input name="jur" type="text" id="jur" value="INSSSEP" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Teléfono Personal/Laboral*</td>
              <td align="left" bgcolor="#FFFFFF"><span id="telef">
                <input name="telef" type="text" id="telef" size="40" />
                <br />
                <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldMinCharsMsg"><br />
                  No se cumple el mínimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres(12).</span></span></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Oficina*</th>
              <th align="left" bgcolor="#FFFFFF" scope="row"><span id="oficina">
                <input name="oficina" type="text" id="oficina" size="40" />
                <br />
                <span class="textfieldRequiredMsg">Se necesita un valor.</span></span></th>
		      <td align="center" valign="middle" bgcolor="#FFFFFF">Localidad</td>
		      <td align="left" bgcolor="#FFFFFF"><input name="local" type="text" id="local" size="40" /></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">DNI</th>
              <th align="left" bgcolor="#FFFFFF" scope="row"><input name="dni" type="text" id="dni" value="<?php echo $dnipost?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Tipo de Atención</td>
	      	<th colspan="2" align="left" valign="middle" scope="row">
		    <select name="depen" id="depen">
		      <option value="1">On Line</option>
		      <option value="2">Telefónico</option>
		      <option value="3">Presencial</option>
		    </select>
          	</th>
            </tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
            </tr>
            <tr>
              <th width="147%" colspan="4" bgcolor="#FFFFFF" scope="row"><p>&nbsp;</p>
                <h2>Seleccione los Rasgos que Caracterizan al Postulante</h2>

<!--Empieza tabla con formulario que agregamos-->
<table width="100%" border="1">
        <tr><a name="arriba"></a>
          <td align="left">1) Dedicación.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Cumple con los objetivos y tareas encomendadas, con rendimiento adecuado durante toda la jornada.</p></td>
          <td colspan="4"><div id="spryradio1">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="dedicacion1" value="1" id="RadioGroup1_0" />
                </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="dedicacion1" value="2" id="RadioGroup1_1" />
                </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="dedicacion1" value="3" id="RadioGroup1_2" />
                </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="dedicacion1" value="4" id="RadioGroup1_3" />
                </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
        </tr>

          <td colspan="5" bgcolor="#999999">&nbsp;</td>
          </tr>
    </table>
      <table width="100%" border="1">
        <tr>
          <td align="left">2) Deseo de superación.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Trata de adoptar nuevas formas de pensamiento y adquirir cualidades que mejorarán la calidad de su trabajo.</p></td>
          <td colspan="4"><div id="spryradio3">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="supera1" value="1" id="RadioGroup1_8" />
                </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="supera1" value="2" id="RadioGroup1_9" />
                </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="supera1" value="3" id="RadioGroup1_10" />
                </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="supera1" value="4" id="RadioGroup1_11" />
                </label></td>
              </tr>
            </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
        </tr>
        
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
          </tr>
        <tr>
          <td align="left">3) Proactividad.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Actúa rápida y decididamente ante situaciones problemáticas, sin esperar que los problemas se solucionen solos o los 			solucionen otros.</p></td>
          <td colspan="4"><div id="spryradio5">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="proact1" value="1" id="RadioGroup1_16" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="proact1" value="2" id="RadioGroup1_17" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="proact1" value="3" id="RadioGroup1_18" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="proact1" value="4" id="RadioGroup1_19" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        
        </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">4) Aprendizaje continuo.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Se capacita en temas relacionados a su cargo, en pos de aplicar y compartir sus conocimientos.</p></td>
          <td colspan="4"><div id="spryradio7">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="aprend1" value="1" id="RadioGroup1_24" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="aprend1" value="2" id="RadioGroup1_25" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="aprend1" value="3" id="RadioGroup1_26" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="aprend1" value="4" id="RadioGroup1_27" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">5) Compromiso y responsabilidad.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Se compromete con los objetivos establecidos, defendiendo los intereses del organismo como si fueran propios.</p></td>
          <td colspan="4"><div id="spryradio9">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="comyresp1" value="1" id="RadioGroup1_32" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="comyresp1" value="2" id="RadioGroup1_33" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="comyresp1" value="3" id="RadioGroup1_34" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="comyresp1" value="4" id="RadioGroup1_35" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">6) Respeto a su persona y sus pares.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Recibe abiertamente opiniones y críticas, las cuales toma en cuenta.</p></td>
          <td colspan="4"><div id="spryradio11">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="resppyp1" value="1" id="RadioGroup1_40" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="resppyp1" value="2" id="RadioGroup1_41" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="resppyp1" value="3" id="RadioGroup1_42" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="resppyp1" value="4" id="RadioGroup1_43" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">7) Putualidad.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Acude en tiempo y forma a su lugar de trabajo.</p></td>
          <td colspan="4"><div id="spryradio13">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="punt1" value="1" id="RadioGroup1_48" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="punt1" value="2" id="RadioGroup1_49" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="punt1" value="3" id="RadioGroup1_50" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="punt1" value="4" id="RadioGroup1_51" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">8) Colaboración y Cooperación.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Colabora y coopera con sus pares en la realización de las tareas encomendadas.</p></td>
          <td colspan="4"><div id="spryradio15">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="colycop1" value="1" id="RadioGroup1_56" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="colycop1" value="2" id="RadioGroup1_57" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="colycop1" value="3" id="RadioGroup1_58" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="colycop1" value="4" id="RadioGroup1_59" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
</tr>
        
      </table>
      <table width="100%" border="1">
        <tr>
          <td colspan="5" bgcolor="#999999">&nbsp;</td>
        </tr>
        <tr>
          <td align="left">9) Ética laboral.</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375" align="left"><p>Cuida los bienes del Estado y sus recursos, velando por la economía del material y la información que le fueron 			confiados.</p></td>
          <td colspan="4"><div id="spryradio17">
            <table width="517" border="0">
              <tr>
                <td width="115" align="center"><label>
                  <input type="radio" name="honest1" value="1" id="RadioGroup1_64" />
                  </label></td>
                <td width="180" align="center"><label>
                  <input type="radio" name="honest1" value="2" id="RadioGroup1_65" />
                  </label></td>
                <td width="107" align="center"><label>
                  <input type="radio" name="honest1" value="3" id="RadioGroup1_66" />
                  </label></td>
                <td width="97" align="center"><label>
                  <input type="radio" name="honest1" value="4" id="RadioGroup1_67" />
                  </label></td>
                </tr>
              </table>
            <span class="radioRequiredMsg">Realice una selección.</span></div></td>
	</tr>
	
	
</th>
</tr>
</table>
<!--Termina tabla con formulario-->   
<!--Empiezan las preguntas abiertas -->
<p>&nbsp;</p>
<table>
	<tr>	
		<td align="left" valign="top"><span id="obser1">
			<label align="left"> 10) Explique y justifique por qué vota a esta persona como candidato al Mejor Empleado Público del año 2014, de su 				jurisdicción. </label>
                        <textarea name="obser1" id="obser1" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">No se cumple el mínimo de caracteres 				requerido(150).</span></span>
		</td>
			
	</tr>
	<tr>
		<td align="left" valign="top"><span id="obser2">
			<label align="left"> 11) Cuente una anécdota o situación de este postulante que haya ocurrido en el ámbito laboral, en la que se 
				se expresen cualidades que lo hagan candidato al Mejor Empleado Público del año 2014.
				Recuerde que se vota al mejor empleado, no al mejor compañero. </label>
                        <textarea name="obser2" id="obser2" cols="120" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">No se cumple el mínimo de caracteres 				requerido(150).</span></span>
		</td>
		
	</tr>
</table>
<!-- Terminan las preguntas abiertas -->      
        
                      <p>&nbsp;</p>
                      <table width="100%" height="186" border="0,5" cellspacing="4">
                        <tr>
                          <th colspan="6" scope="row"><h2>Complete sus Datos Personales Faltantes</h2></th>
                          </tr>
                        <tr>
                          <th width="18%" height="26" align="left" scope="row">Nombre y Apellido*</th>
                          <th width="25%" align="left" scope="row"><span id="apynomvot">
                            <input name="apynomvot" type="text" id="apynomvot" size="40" />
                            <span class="textfieldRequiredMsg">Se necesita un valor.</span></span></th>
                          <th width="13%" scope="row"><label for="apynomvot"></label></th>
                          <td width="10%">DNI</td>
                          <td width="28%" align="left"><input name="dnivot" type="text" id="textfield6" value="<?php echo $votante;?>" size="40" readonly="readonly"/></td>
                          <td width="6%"><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">Jurisdicción</th>
                          <th height="26" align="left" scope="row"><input name="jurvot" type="text" id="textfield3" value="INSSSEP" size="40" readonly="readonly"/></th>
                          <th scope="row"><label for="apynomvot"></label></th>
                          <td>Teléfono*</td>
                          <td align="left"><span id="telvot">
                            <input name="telvot" type="text" id="telvot" size="40" />
                            <br />
                            <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldMinCharsMsg">No se cumple el mínimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres(12).</span></span></td>
                          <td><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">Correo Electrónico*</th>
                          <th height="26" align="left" scope="row"><span id="sprytextfield6">
                          <label for="emailvot"></label>
                          <input name="emailvot" type="text" id="emailvot" size="40" />
                          <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span></span></th>
			  
                          <th scope="row"><label for="apynomvot"></label></th>
                           <th><label>Medio</label></th>
			      	<th colspan="2" align="left" valign="middle" scope="row">
				    <select name="medio" id="medio">
				      <option value="1">Diario</option>
				      <option value="2">Internet</option>
				      <option value="3">Radio</option>
				      <option value="4">Compañeros de trabajo</option>
				      <option value="5">Otros</option>	
				    </select>
				(Medio por el cual se enteró del premio)
			  </th>
                          <td><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">&nbsp;</th>
                          <th height="26" align="left" scope="row">&nbsp;</th>
                          <th scope="row"><a href="index.php">Volver a Ingresar Datos</a></th>
                          <td colspan="2" align="center"><input type="submit" name="button2" id="button2" value="Confirmar la Votacion" /></td>
                          <td>&nbsp;</td>
                          </tr>
                        <tr> </tr>
                        </table></th>
                    </tr>
                  </table><p>*Campos obligatorios</p>
                </th>
            </tr>
          </table></th>
        </tr>
      </table>
    </form></th>
  </tr>
</table>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("telvot", "none", {minChars:7, maxChars:12});
var sprytextfield2 = new Spry.Widget.ValidationTextField("telef", "none", {minChars:7, maxChars:12, hint:"362-4411111"});
var sprytextfield3 = new Spry.Widget.ValidationTextField("apeynom", "none");
var sprytextfield4 = new Spry.Widget.ValidationTextField("oficina", "none");
var sprytextfield5 = new Spry.Widget.ValidationTextField("apynomvot", "none");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "email");
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
var spryradio3 = new Spry.Widget.ValidationRadio("spryradio3");
var spryradio5 = new Spry.Widget.ValidationRadio("spryradio5");
var spryradio7 = new Spry.Widget.ValidationRadio("spryradio7");
var spryradio9 = new Spry.Widget.ValidationRadio("spryradio9");
var spryradio11 = new Spry.Widget.ValidationRadio("spryradio11");
var spryradio13 = new Spry.Widget.ValidationRadio("spryradio13");
var spryradio15 = new Spry.Widget.ValidationRadio("spryradio15");
var spryradio17 = new Spry.Widget.ValidationRadio("spryradio17");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("obser1", {minChars:150, hint:"Ingrese Como Minimo 150 Caracteres", validateOn:["blur"]});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("obser2", {minChars:150, hint:"Ingrese Como Minimo 150 Caracteres", validateOn:["blur"]});
</script>
</body>
</html>
