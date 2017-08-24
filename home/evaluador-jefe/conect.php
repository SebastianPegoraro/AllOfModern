<?php
function conectar()
{
	mysql_connect("localhost", "root", "root*root");
	mysql_select_db("empleado_publico2016");
}

function desconectar()
{
	mysql_close();
}
?>
