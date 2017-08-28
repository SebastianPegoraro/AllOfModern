<?php include("seguridad.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario</title>
<style type="text/css">
body {
	background-color: #006;
}
</style>
<script src="../SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>
<?php session_start();
error_reporting(0);
?>
<body>
<table width="1033" height="446" border="1" align="center" cellspacing="4" bgcolor="#CCCCCC">
  <tr>
    <th width="710" height="167" bgcolor="#FFFFFF" scope="row"><h1>Formulario Empleado Publico<br />
      <br />
      2012</h1></th>
    <th width="301" bgcolor="#FFFFFF" scope="row"><img src="emp.png" width="100%" height="200" /></th>
  </tr>
  <tr>
    <th colspan="2" align="left" valign="top" bgcolor="#FFFFFF" scope="row">
    <form id="form1" name="form1" method="post" action="guarda.php">
      <table width="1013" border="0" cellspacing="4">
        <tr>
          <th width="558" bgcolor="#FFFFFF" scope="row"><h2>Por Favor Complete los Datos del Postulante</h2>
          </th>
        </tr>
        <tr>
          <th scope="row"><table width="100%" border="0" cellspacing="4">
            <tr>
              <th width="22%" align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Apellido Y Nombre</th>
              <th width="28%" bgcolor="#FFFFFF" scope="row"><label for="dni">
                <input name="apeynom" type="text" disabled="disabled" id="apeynom" value="<?php echo $_SESSION['ApyNom'];?>" size="40" readonly="readonly"/>
              </label></th>
              <td width="22%" align="center" valign="middle" bgcolor="#FFFFFF">Direccion Laboral<br /></td>
              <td width="28%" align="left" bgcolor="#FFFFFF"><input name="direc" type="text" id="direc" size="40" /></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Jurisdicción</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="jur" type="text" disabled="disabled" id="jur" value="<?php echo $_SESSION['jur'];?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Telefono Laboral*</td>
              <td align="left" bgcolor="#FFFFFF"><span id="telef">
              <input name="telef" type="text" id="telef" size="40" />
              <br />
              <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span><span class="textfieldMinCharsMsg"><br />
              No se cumple el mínimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres(12).</span></span></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">Oficina</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="oficina" type="text" disabled="disabled" id="oficina" value="<?php echo $_SESSION['Ofi'];?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Dependencia</td>
              <td align="left" bgcolor="#FFFFFF"><input name="depen" type="text" id="depen" size="40" /></td>
            </tr>
            <tr>
              <th align="center" valign="middle" bgcolor="#FFFFFF" scope="row">DNI</th>
              <th bgcolor="#FFFFFF" scope="row"><input name="dni" type="text" disabled="disabled" id="dni" value="<?php echo $_SESSION['Dni'];?>" size="40" readonly="readonly"/></th>
              <td align="center" valign="middle" bgcolor="#FFFFFF">Localidad</td>
              <td align="left" bgcolor="#FFFFFF"><input name="local" type="text" id="local" size="40" /></td>
            </tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row">&nbsp;</th>
              </tr>
            <tr>
              <th colspan="4" bgcolor="#FFFFFF" scope="row"><p>&nbsp;</p>
                <h2>Seleccione los Rasgos que Caracterizan al Postulante</h2>
                <table width="100%" height="466" border="1" cellspacing="4">
                  <tr>
                    <th width="100%" height="456" align="left" valign="top" bgcolor="#FFFFFF" scope="row"><table width="100%" height="280">
                      <tr>
                        <td width="29%" height="45" align="left" valign="middle">Al menos 1 Caracteristica debera Seleccionar*</td>
                        <td width="3%" align="left" valign="middle">&nbsp;</td>
                        <td width="34%" align="left" valign="middle"><input type="checkbox" name="caracteristicas4" value="Compromiso"  id="caracteristicas_4" />
Compromiso y Responsabilidad</td>
                        <td width="34%" align="left" valign="middle">Observaciones*</td>
                        </tr>
                      <tr>
                        <td height="45" align="left" valign="middle"><input type="checkbox" name="caracteristicas0" value="Dedicacion" id="caracteristicas_0" />
Dedicacion</td>
                        <td height="45" align="left" valign="middle">&nbsp;</td>
                        <td align="left" valign="middle"><input type="checkbox" name="caracteristicas5" value="Respeto" id="caracteristicas_5" />
Respeto a su persona y a sus pares</td>
                        <td rowspan="4" align="left" valign="top"><span id="obser">
                        <textarea name="obser" id="obser" cols="50" rows="11"></textarea>
                        <span class="textareaRequiredMsg">Se necesita un valor.</span><span class="textareaMinCharsMsg">No se cumple el mínimo de caracteres requerido(15).</span></span></td>
                        </tr>
                      <tr>
                        <td height="60" align="left" valign="middle"><input type="checkbox" name="caracteristicas1" value="Superacion" id="caracteristicas_1" />
Deseos de Superacion</td>
                        <td height="60" align="left" valign="middle">&nbsp;</td>
                        <td align="left" valign="middle"><input type="checkbox" name="caracteristicas6" value="Puntualidad" id="caracteristicas_6" />
Puntualidad</td>
                        </tr>
                      <tr>
                        <td height="60" align="left" valign="middle"><input type="checkbox" name="caracteristicas2" value="Proactividad" id="caracteristicas_2" />
Proactividad</td>
                        <td height="60" align="left" valign="middle">&nbsp;</td>
                        <td align="left" valign="middle"><input type="checkbox" name="caracteristicas7" value="Colaboracion" id="caracteristicas_7" />
Colaboracion y Cooperacion</td>
                        </tr>
                      <tr>
                        <td height="56" align="left" valign="middle"><input type="checkbox" name="caracteristicas3" value="Aprendizaje"  id="caracteristicas_3" />
Aprendizaje Continuo</td>
                        <td height="56" align="left" valign="middle">&nbsp;</td>
                        <td align="left" valign="middle"><input type="checkbox" name="caracteristicas8" value="Honestidad"  id="caracteristicas_8" />
Honestidad</td>
                        </tr>
                      </table>
                      <p>&nbsp;</p>
                      <table width="100%" height="186" border="0,5" cellspacing="4">
                        <tr>
                          <th colspan="6" scope="row"><h2>Complete sus Datos Personales Faltantes</h2></th>
                          </tr>
                        <tr>
                          <th width="18%" height="26" align="left" scope="row">Nombre y Apellido</th>
                          <th width="25%" scope="row"><input name="apynomvot" type="text" disabled="disabled" id="textfield2" value="<?php echo $_SESSION['ApyNomVot'];?>" size="40" readonly="readonly"/></th>
                          <th width="13%" scope="row"><label for="apynomvot"></label></th>
                          <td width="10%">Dni</td>
                          <td width="28%"><input name="dnivot" type="text" disabled="disabled" id="textfield6" value="<?php echo $_SESSION['DniVot'];?>" size="40" readonly="readonly"/></td>
                          <td width="6%"><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">Jurisdicción</th>
                          <th height="26" scope="row"><input name="jurvot" type="text" disabled="disabled" id="textfield3" value="<?php echo $_SESSION['jur'];?>" size="40" readonly="readonly"/></th>
                          <th scope="row"><label for="apynomvot"></label></th>
                          <td>Telefono*</td>
                          <td><span id="telvot">
                          <input name="telvot" type="text" id="telvot" size="40" />
                          <br />
                          <span class="textfieldRequiredMsg">Se necesita un valor.</span><span class="textfieldInvalidFormatMsg">Formato no válido.</span><span class="textfieldMinCharsMsg">No se cumple el mínimo de caracteres requerido(7).</span><span class="textfieldMaxCharsMsg">Se ha superado el número máximo de caracteres(12).</span></span></td>
                          <td><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">Correo Electronico</th>
                          <th height="26" scope="row"><input name="emailvot" type="text" id="textfield4" size="40" /></th>
                          <th scope="row"><label for="apynomvot"></label></th>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td><label for="apynomvot"></label></td>
                          </tr>
                        <tr>
                          <th height="26" align="left" scope="row">&nbsp;</th>
                          <th height="26" scope="row">&nbsp;</th>
                          <th scope="row"><a href="Postulante.php">Volver a Ingresar Datos</a></th>
                          <!--<td colspan="2" align="center"><input type="submit" name="button2" id="button2" value="Confirmar la Votacion" /></td>-->
                          <td>&nbsp;</td>
                          </tr>
                        </table>
                      </th>
                  </tr>
                </table>
              </th>
            </tr>
          </table></th>
        </tr>
      </table>
<!--Empieza tabla con formulario que agregamos-->

<table width="100%" border="1">
        <tr><a name="arriba"></a>
          <td>Concepto 1
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375">Dedicación.</td>
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
          <td>Concepto 2</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Deseo de superación.</p></td>
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
          <td>Concepto 3 </td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Proactividad.</p></td>
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
          <td>Concepto 4</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Aprendizaje continuo.</p></td>
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
          <td>Concepto 5</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Compromiso y responsabilidad.</p></td>
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
          <td>Concepto 6</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Respeto a su persona y sus pares.</p></td>
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
          <td>Concepto 7</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Puntualidad.</p></td>
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
          <td>Concepto 8</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Colaboración y Cooperación.</p></td>
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
          <td>Concepto 9</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Ética en el trabajo</p></td>
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
<input type="submit" name="button2" id="button2" value="Confirmar la Votacion" />
    </form></th>
  </tr>
</table>
<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("obser", {minChars:15, hint:"Ingrese Como Minimo 15 Caracteres", validateOn:["blur"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("telvot", "integer", {minChars:7, maxChars:12, validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("telef", "integer", {minChars:7, maxChars:12, validateOn:["blur"]});
</script>
</body>
</html>
<!--Empieza tabla con formulario que agregamos-->
<!--
<table width="100%" border="1">
        <tr><a name="arriba"></a>
          <td>Concepto 1
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375">Dedicación.</td>
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
          <td>Concepto 2</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Deseo de superación.</p></td>
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
          <td>Concepto 3 </td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Proactividad.</p></td>
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
          <td>Concepto 4</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Aprendizaje continuo.</p></td>
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
          <td>Concepto 5</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Compromiso y responsabilidad.</p></td>
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
          <td>Concepto 6</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Respeto a su persona y sus pares.</p></td>
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
          <td>Concepto 7</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Puntualidad.</p></td>
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
          <td>Concepto 8</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Colaboración y Cooperación.</p></td>
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
          <td>Concepto 9</td>
          <td width="115" align="center">Siempre</td>
          <td width="180" align="center">Regularmente</td>
          <td width="107" align="center">Nunca</td>
          <td width="99" align="center">NS/NC</td>
        </tr>
        <tr>
          <td width="375"><p>Ética en el trabajo</p></td>
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

-->
<!--Termina tabla con formulario--> 
