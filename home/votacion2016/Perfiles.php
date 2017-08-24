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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="img/icono.ico" />
<style type="text/css">
body {
	background-color: #999;
}
</style>
<title>Empleado Publico 2015</title>
</head>

<body>
  <p>&nbsp;</p>
  <table width="810" border="0" align="center">
    <tr>
      <td width="397" align="center" bgcolor="#FFFFFF"><img src="img/emp.png" width="303" height="200" /></td>
      <td width="397" align="center" bgcolor="#FFFFFF"><h2 style="color:#06F"><em>VOTA AL EMPLEADO<br />
        <br />
PUBLICO DEL PODER EJECUTIVO<br />
<br />
DEL AÑO 2015</em></h2></td>
    </tr>
  </table>
  <table width="810" border="1" align="center">
    <tr>
      <td colspan="2" align="left" bgcolor="#FFFFFF"><p><br />
        El <strong>Premio Empleado Público del Año</strong> tiene como objetivo motivar a todos los empleados a ser mejores servidores públicos.<br />
Se premia como máximo a un empleado por Jurisdicción que reúna el perfil establecido en el reglamento del premio. <br />
<br />
<strong>Como CIUDADANO tiene la oportunidad de elegir en esta instancia,</strong> entre los ganadores de cada jurisdicción, al <strong>EMPLEADO PÚBLICO DEL PODER EJECUTIVO DEL AÑO 2015</strong>, por ello, a continuación se presentan 10 (diez) perfiles correspondientes a los ganadores de las 10 (diez) jurisdicciones participantes. La identidad se mantiene oculta para garantizar la transparencia  y objetividad del concurso.<br />
<br />

<strong>Explicativo de la información que contiene los perfiles:</strong><br /><br />
<strong>Conceptos a evaluar:</strong> Dedicación, Deseos de Superación, Proactividad, Aprendizaje continuo, Compromiso y Responsabilidad, Respeto a sus personas y a sus pares,  Colaboración y Cooperación,  Ética Laboral y  Puntualidad.<br /><br />

<strong>Antigüedad: </strong>para no develar la antigüedad exacta de los candidatos se utilizaran los siguientes rangos:
- 1 a 5 años   
- 5 a 10 años
- 10 a 15 años
- 15 a 20 años 
- 20 a 25 años
- 25 a 30 años
- 30 a 35 años
- 35 a 40 años
- Más de 40 años
<br /><br />
<strong>Puntuación máxima del jefe en los conceptos:</strong> 90 puntos (100 %)<br />
<br />

<strong>Puntuación  máxima de compañeros en los conceptos: </strong>45 puntos (100%)<br />
        <br />
      </p>
    <FONT COLOR="red">
	Nota: el orden de los perfiles no tiene relación con el número de postulante que los candidatos hayan tenido
	en la instancia anterior. 
	Para preservar el anonimato de los candidatos, se los ordenaron aleatoriamente designándole a cada uno una letra del 
	abecedario.
	</font>
	<br/>
	<br/>
	</td>
	</tr>
    <tr>
      <th width="640" align="center" bgcolor="#FFFFFF">PERFIL DEL EMPLEADO PUBLICO</th>
      <th width="154" bgcolor="#FFFFFF">&nbsp;</th>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><p align="center"><strong>PERFIL A</strong></p>
        <p><strong>Antigüedad entre: </strong>35 a 40 años <strong> </strong><br />
        <br />
          <strong>Evaluación del Jefe: </strong>100% <br />
		El jefe ha fundamentado varios conceptos evaluados. <br />
          <br />
          <strong>Votos recibidos: </strong>29 agentes votaron <br /><br />
<strong>Evaluación de compañeros: </strong>de acuerdo a la opinión de sus compañeros su desempeño equivale a 44 puntos (98 %)
29 (veintinueve) compañeros le atribuyeron 100% “Dedicación”,  100% Deseos de Superación, 96% Pro actividad, 100% “Aprendizaje continuo”, 100% “Compromiso y Responsabilidad”, 100%  “Respeto a sus personas y a sus pares”, 96% “Colaboración y Cooperación”, 100% “Ética Laboral” y 100% “Puntualidad”
          <br />
	  <br />

          <strong>Nivel de Instrucción: </strong>Secundario completo.<br />
          <br />
          <strong>Capacitaciones: </strong><br />
Presentó cerca de 7 (siete) cursos vinculados a las funciones que realiza y asistencias a congresos, desde fines de los años ‘80 hasta la actualidad. Temáticas: computación, entre otros.<br />
<br />
<strong>Trayectoria laboral:</strong><br />
Desde su ingreso a fines de los años 70 realizó en  la jurisdicción tareas administrativas y de atención al público, en distintas oficinas de la jurisdicción. </td>
      <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=A&dni=<?php echo $dni; ?>"><img src="img/voto.jpg"/>Votar Perfil A</a></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#FFFFFF"><p align="center"><strong>PERFIL B</strong></p>
        <p><strong>Antigüedad entre</strong><strong>: </strong>5 a 10 años<strong> </strong><br />
        <br />
        <strong>Evaluación del Jefe: </strong>86%.<br />
        El jefe ha fundamentado varios conceptos evaluados.<br />
        <br />
<strong>Votos recibidos: </strong>8 agentes votaron <br /><br />

<strong>Evaluación de compañeros: </strong>de acuerdo a la opinión de sus compañeros su desempeño equivale a 45 puntos (100 %)
8 compañeros le atribuyeron 100% “Dedicación”,  100% Deseos de Superación, 100% Pro actividad, 100% “Aprendizaje continuo”, 100% “Compromiso y Responsabilidad”, 100%  “Respeto a sus personas y a sus pares”,  100% “Colaboración y Cooperación”,  100% “Ética Laboral” y  100% “Puntualidad”
          <br />
	  <br />


      <strong>Nivel de Instrucción: </strong>Secundario completo.<br />
        <br />
        <strong>Capacitaciones: </strong><br />
Presentó 1 (un) curso vinculado a las funciones que realiza.<br />
<br />
<strong>Trayectoria laboral:</strong><br />Desde principios del año 2010 hasta la actualidad ocupó su puesto dentro de la jurisdicción actual, pasando por cargos administrativos y de atención al público.</p></td>
      <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=B&dni=<?php echo $dni; ?>"><img src="img/voto.jpg"/>Votar Perfil B</a></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#FFFFFF"><p align="center"><strong>PERFIL C</strong></p>
<p><strong> Antigüedad entre</strong><strong>: </strong>30 a 35 años<strong> </strong><br />
        <br />
        <strong>Evaluación del Jefe: </strong>100%.<br /><br />
         <strong>Votos recibidos: </strong>10 agentes votaron <br /><br />
        
	<strong>Evaluación de compañeros: </strong>de acuerdo a la opinión de sus compañeros su desempeño equivale a 45 puntos (100%)
10 compañeros le atribuyeron 100% “Dedicación”,  100% Deseos de Superación, 100% Pro actividad, 100% “Aprendizaje continuo”, 100% “Compromiso y Responsabilidad”, 100%  “Respeto a sus personas y a sus pares”,  100% “Colaboración y Cooperación”,  100% “Ética Laboral” y  100% “Puntualidad”
          <br />
	  <br />       
  
 
  <strong>Nivel de Instrucción: </strong>Secundario completo.<strong></strong><br />
  <br />
  <strong>Capacitaciones: </strong><br />
        Presentó 10 (diez) cursos vinculados a computación, temáticas de la administración pública, normativas y relacionadas a su puesto.<br />
        <br />
  <strong>Trayectoria laboral:</strong><br />Desde principios de los años 80  hasta la actualidad ocupó diferentes puestos dentro de la jurisdicción actual y en otras jurisdicciones, pasando por cargos administrativos y jerárquicos.</p></td>
      <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=C&dni=<?php echo $dni; ?>"><img src="img/voto.jpg"/>Votar Perfil C</a></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#FFFFFF"><p align="center"><strong>PERFIL D</strong></p>
<p><strong> Antigüedad entre</strong><strong>: </strong>15 a 20 años<strong> </strong><br />
        <br />
        <strong>Evaluación del Jefe: </strong>89%.<br />
        <br />
	
	<strong>Votos recibidos: </strong>16 agentes votaron <br /><br />
        
	<strong>Evaluación de compañeros: </strong>de acuerdo a la opinión de sus compañeros su desempeño equivale a 41,4 puntos (92%)
16 compañeros le atribuyeron 94% “Dedicación”,  69% Deseos de Superación, 87,5% “Compromiso y Responsabilidad”, 62,5%  “Respeto a sus personas y a sus pares,  94% “Ética Laboral” y  100% “Puntualidad”; 94% Pro actividad, 69% “Aprendizaje continuo” y 94% “Colaboración y Cooperación”.
          <br />
	  <br />  
        
        <strong>Nivel de Instrucción: </strong>Terciario incompleto.<strong></strong><br />
        <br />
      <strong>Capacitaciones: </strong><br />Presentó 16 (dieciséis) cursos sobre las temáticas de computación, administración pública, normativas y vinculados a las funciones que realiza.  <br />
      <br />
      <strong>Trayectoria laboral: </strong><br />
       Desde fines de la década del 90 ocupó diferentes puestos dentro de su jurisdicción, pasando por cargos administrativos y jerárquicos. </p></td>
      <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=D&dni=<?php echo $dni; ?>"><img src="img/voto.jpg"/>Votar Perfil D</a></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#FFFFFF"><p align="center"><strong>PERFIL E</strong></p>
        <p><strong>Antigüedad entre</strong><strong>: </strong>20 a 25 años <br />
        <br />
        <strong>Evaluación del Jefe: </strong>100%<br />
        El jefe ha fundamentado varios conceptos evaluados.<br />
        <br />
        <strong>Votos recibidos: </strong>26 agentes votaron <br /><br />
        
	<strong>Evaluación de compañeros: </strong>de acuerdo a la opinión de sus compañeros su desempeño equivale a 43 puntos (95%).
26 compañeros le atribuyeron 100% “Dedicación”,  77% “Deseos de Superación”, 96% “Compromiso y Responsabilidad”, 92%  “Respeto a sus personas y a sus pares,  100% “Ética Laboral” y  100% “Puntualidad”; 69% “Pro actividad”, 88% “Aprendizaje continuo” y 100% “Colaboración y Cooperación”.
          <br />
	  <br />  
	
        <strong>Nivel de Instrucción: </strong>Secundario completo.<br />
        <br />
        <strong>Capacitaciones: </strong><br />Presentó 5 (cinco) cursos relacionados a las temáticas de administración pública, normativas y relacionados con las funciones que desarrolla en su puesto laboral.</p>

      <strong>Trayectoria laboral: </strong><br />Comenzó a principios de los años 90 dentro de la misma jurisdicción, realizando actividades de servicios.</td>
      <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=E&dni=<?php echo $dni; ?>"><img src="img/voto.jpg"/>Votar Perfil E</a></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#FFFFFF"><p align="center"><strong>PERFIL F</strong></p>
        <p><strong>Antigüedad entre</strong><strong>: </strong>5 a 10 años<strong> </strong><br />
        <br />
        <strong>Evaluación del Jefe: </strong>100%<br /><br />
       El jefe ha fundamentado varios conceptos evaluados.
       <br />
	<strong>Votos recibidos: </strong>12 agentes votaron <br /><br />
        
	<strong>Evaluación de compañeros: </strong>de acuerdo a la opinión de sus compañeros su desempeño equivale a 43 puntos (96%)
12 compañeros le atribuyeron 92% “Dedicación”,  83% Deseos de Superación, 92% “Compromiso y Responsabilidad”, 83%  “Respeto a sus personas y a sus pares,  92% “Ética Laboral” y  100% “Puntualidad”; 100% Pro actividad, 92% “Aprendizaje continuo” y 92% “Colaboración y Cooperación”.
          <br />
	  <br />  
  <strong>Nivel de Instrucción: </strong>Secundario completo.<br />
  <br />
  <strong>Capacitaciones: </strong><br />PPresentó 25 (veinticinco) cursos vinculados a la temática de la administración pública y sus normativas, de computación y relacionadas a las tareas que desarrolla en su trabajo.<br /><br />

      <strong>Trayectoria laboral: </strong><br />Desde mediados de la década del 2000 ocupó diferentes puestos dentro de su jurisdicción, Realizando actividades técnicas y administrativas.</td>
      <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=F&dni=<?php echo $dni; ?>"><img src="img/voto.jpg"/>Votar Perfil F</a></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#FFFFFF"><p align="center"><strong>PERFIL G</strong></p>
        <p><strong>Antigüedad entre</strong><strong>: </strong>Más de 40 años.<strong> </strong><br />
        <br />
        <strong>Evaluación del Jefe: </strong>78%<br />
	El jefe ha fundamentado varios conceptosde la evaluación.
        <br /><br />
        
        <strong>Votos recibidos: </strong>27 (veintisiete) agentes votaron <br /><br />
        
	<strong>Evaluación de compañeros: </strong>de acuerdo a la opinión de sus compañeros su desempeño equivale a  43.14 puntos (95,8%)
27 compañeros le atribuyeron 92.6% “Dedicación”,  92.6% Deseos de Superación, 100% “Compromiso y Responsabilidad”, 92.6% “Respeto a sus personas y a sus pares, 92.6% “Ética Laboral”, 100% “Puntualidad”; 92.6% Pro actividad, 66.7% “Aprendizaje continuo” y 100% “Colaboración y Cooperación”.
          <br />
	  <br />  

        <strong>Nivel de Instrucción: </strong>Primario completo<br />
        <br />
        <strong>Capacitaciones: </strong><br />Presentó 2 (dos) cursos vinculados a temáticas de computación.</p>
      
<strong>Trayectoria laboral: </strong><br />Trabajó desde la década del  70 hasta la actualidad en la administración pública, desempeñando tareas administrativas.</td>
      <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=G&dni=<?php echo $dni; ?>"><img src="img/voto.jpg"/>Votar Perfil G</a></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#FFFFFF"><p align="center"><strong>PERFIL H</strong></p>
        <p><strong> Antigüedad entre</strong><strong>: </strong>35 a 40 años.<strong> </strong><br />
        <br />
        <strong>Evaluación del Jefe: </strong>83%<br />
        <br />
        <strong>Votos recibidos: </strong>5 (cinco) agentes votaron<br /><br />
        
	<strong>Evaluación de compañeros: </strong>de acuerdo a la opinión de sus compañeros su desempeño equivale a  45 puntos (100%).
5 compañeros le atribuyeron 100% “Dedicación”,  100% Deseos de Superación, 100% “Compromiso y Responsabilidad”, 100% “Respeto a sus personas y a sus pares, 100% “Ética Laboral”, 100% “Puntualidad”; 100% Pro actividad, 100% “Aprendizaje continuo” y 100% “Colaboración y Cooperación”.
          <br />
	  <br />  
        <strong>Nivel de Instrucción: </strong>Secundario Completo<br />
        <br />
        <strong>Capacitaciones: </strong><br />Presentó 3 (tres) cursos vinculados a temáticas de computación.</p>
      <strong>Trayectoria laboral:</strong> <br />Trabajó desde fines de la década del  70 hasta la actualidad en la administración pública, desempeñando tareas administrativas y de atención al público. </td>
      <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=H&dni=<?php echo $dni; ?>"><img src="img/voto.jpg"/>Votar Perfil H</a></td>
    </tr>
    <tr>
      <td align="left" bgcolor="#FFFFFF"><p align="center"><strong>PERFIL I</strong></p>
	<p><strong> Antigüedad entre</strong><strong>: </strong>30 a 35 años<strong> </strong><br />
        <br />
        <strong>Evaluación del Jefe: </strong>100%<br /><br/>
	El jefe ha fundamentado varios conceptos de la evaluación.
	<br/>
        <strong>Votos recibidos: </strong>11 (once) agentes votaron <br /><br />
        
	<strong>Evaluación de compañeros: </strong>de acuerdo a la opinión de sus compañeros su desempeño equivale a 44,5 puntos (99%)
11 compañeros le atribuyeron 100% “Dedicación”,  100% Deseos de Superación, 100% “Compromiso y Responsabilidad”, 90.9%  “Respeto a sus personas y a sus pares,  100% “Ética Laboral” y  100% “Puntualidad”; 100% Pro actividad, 90.9% “Aprendizaje continuo” y 100% “Colaboración y Cooperación”.
          <br />
	  <br />  
  <strong>Nivel de Instrucción: </strong>Secundario completo.<strong></strong><br />
  <br />
  <strong>Capacitaciones: </strong><br />
       Presentó 12 (doce) cursos vinculados a la temática de la administración pública y normativas, computación, asistencias a congresos y relacionadas a su cargo.<strong></strong><br />
        <br />
  <strong>Trayectoria laboral:</strong><br />Desde la década del 70 se desempeñó en distintas  jurisdicciones, realizando tareas administrativas y técnicas. </p></td>
      <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=I&dni=<?php echo $dni; ?>"><img src="img/voto.jpg"/>Votar Perfil I</a></td>
    </tr>
    
<tr>
      <td align="left" bgcolor="#FFFFFF"><p align="center"><strong>PERFIL J</strong></p>
	<p><strong> Antigüedad entre</strong><strong>: </strong>20 a 25 años<strong> </strong><br />
        <br />
        <strong>Evaluación del Jefe: </strong>100%<br /><br/>
	El jefe ha fundamentado varios conceptos de la evaluación.
	<br/>
        <strong>Votos recibidos: </strong>12 (doce) agentes votaron <br /><br />
        
	<strong>Evaluación de compañeros: </strong>de acuerdo a la opinión de sus compañeros su desempeño equivale a 45 puntos (100%)
12 compañeros le atribuyeron 100% “Dedicación”,  100% Deseos de Superación, 100% “Compromiso y Responsabilidad”, 100%  “Respeto a sus personas y a sus pares,  100% “Ética Laboral” y  100% “Puntualidad”; 100% Pro actividad, 100% “Aprendizaje continuo” y 100% “Colaboración y Cooperación”.
          <br />
	  <br />  
  <strong>Nivel de Instrucción: </strong>Secundario Completo.<strong></strong><br />
  <br />
  <strong>Capacitaciones: </strong><br />
       Presentó 2 (dos) cursos vinculados a computación.<strong></strong><br />
        <br />
  <strong>Trayectoria laboral:</strong><br />rabajó desde la década del  90 hasta la actualidad en la administración pública, desempeñando tareas administrativas. </p></td>
      <td align="center" valign="middle" bgcolor="#FFFFFF"><a href="guarda.php?perfil=I&dni=<?php echo $dni; ?>"><img src="img/voto.jpg"/>Votar Perfil J</a></td>
    </tr>



    <tr>
      <td colspan="2" align="left" bgcolor="#FFFFFF"><p><strong>Las características  que se tuvieron en cuenta para postular a los agentes, de acuerdo a lo  establecido en el Artículo 7 del Reglamento del Premio</a>, son las siguientes:</strong><br />
        <br />
        <strong>Dedicación:</strong> ocupación  plena de su tiempo laboral para la consecución de los objetivos y tareas  encomendadas por su superior. <br />
        <br />
        <strong>Deseos de superación:</strong> gran espíritu de superación y una gran necesidad de alcanzar los objetivos  que se fijen. El deseo de superación debe estar presente en todo momento. <br />
        <br />
        <strong>Proactividad:</strong> significa tomar la iniciativa y asumir la responsabilidad de hacer que las  cosas sucedan; decidir en cada momento lo que queremos hacer y cómo lo vamos a  hacer. <br />
        <br />
        <strong>Aprendizaje continuo:</strong> busca y comparte información útil para la resolución de situaciones del  servicio utilizando todo el potencial de la institución. Incluye la capacidad  de capitalizar la experiencia de otros y la propia. <br />
        <br />
        <strong>Compromiso y Responsabilidad:</strong> trabaja a la par de autoridades y colegas, defiende los intereses de la  organización como si fueran propios. <br />
        <br />
        <strong>Respeto a su persona y sus pares:</strong> sabe recibir abiertamente opiniones y críticas, las cuales toma en cuenta.  Es tolerante y comprensivo hacia otras ideologías, cultos y costumbres las  cuales puede aceptar sin compartir. <br />
        <br />
        <strong>Puntualidad:</strong> acude  regularmente en tiempo y forma a su lugar de trabajo. Comunica de su  inasistencia, y procura compensar el trabajo atrasado. <br />
        <br />
      <strong>Colaboración y Cooperación:</strong> ambos conceptos refieren sobre la contribución y trabajo con otra u otras  personas en pos de la realización de una tarea o tareas encomendadas. <br />
      <br />
      <strong>Ética laboral:</strong> garantiza confianza e integridad, llevando a la práctica los cófigos de conducta y ética más elevados, siendo leal a los principios del organismo.</p></td>
    </tr>
	<tr>
	<td colspan ="2" align="center" valign="middle" bgcolor="#FFFFFF"><a href="comentarios_sinvotos.php?dni=<?php echo $dni; ?>"/>Sugerencias y/o Comentarios sobre el Premio</a></td>
	</tr>
  </table>
</body>
</html>
