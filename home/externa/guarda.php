<?php
header("Content-Type: text/html;charset=utf-8");
include("conect.php");

//Obtenemos la IP del cliente con esta funcion
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$postulado = $_REQUEST['postulado'];
$dnivotante = $_REQUEST['dnivotante'];
$ipvotante = get_client_ip();

//Verificamos que el votante no haya votado antes
abrirBase();
  mysql_query("SET NAMES 'utf8'");
  $resulta = mysql_query("SELECT dnivotado FROM externa WHERE dnivotante='$dnivotante'");
cerrarBase();
$row = mysql_fetch_row($resulta);
if ($row != "") {
  header("Location: error.php");
} else { //Si no voto, se carga el voto
  abrirBase();
    mysql_query("SET NAMES 'utf8'");
    $result = mysql_query("INSERT INTO externa (dnivotante, postulado, ipvotante) VALUES ('$dnivotante', '$postulado', '$ipvotante')");
  cerrarBase();
  header("Location: guardado.php");
}

?>
