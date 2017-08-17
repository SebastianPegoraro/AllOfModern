<?php
function conectar()
{
	mysql_connect("localhost", "root", "sp463950");
	mysql_select_db("empleado_publico2016");
}

function desconectar()
{
	mysql_close();
}
?>
