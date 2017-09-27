<?php
function conectar()
{
	mysql_connect("localhost", "root", "root*root");
	mysql_select_db("empleado_publico2017");
}

function desconectar()
{
	mysql_close();
}
?>
