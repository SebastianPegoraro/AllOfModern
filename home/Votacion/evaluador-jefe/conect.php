<?php
function conectar()
{
	mysql_connect("localhost", "root", "root*root");
	mysql_select_db("empleado_publico");
}

function desconectar()
{
	mysql_close();
}
?>
