<?php
function abrirBase()
{
	mysql_connect("localhost", "root", "root*root");
	mysql_select_db("empleado_publico2016");
}

function cerrarBase()
{
	mysql_close();
}
?>
