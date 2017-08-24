<?php
function abrirBase()
{
	mysql_connect("localhost", "root", "sp463950");
	mysql_select_db("empleado_publico2017");
}

function cerrarBase()
{
	mysql_close();
}
?>
