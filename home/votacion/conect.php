<?php
function abrirBase()
{
	mysql_connect("localhost", "root", "");
	mysql_select_db("empleado_publico2017");
}

function cerrarBase()
{
	mysql_close();
}
?>
