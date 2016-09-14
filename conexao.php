<?php

$con = @mysql_connect("localhost","root","tpiasl2k10*");
if (!$con) {
	echo "Erro: Não foi possível conectar com o banco de dados!";
	exit;
}
$db = @mysql_select_db("glpi",$con);
if (!$db) {
	echo "Erro: Conexão feita, mas a base de dados não foi encontrada...";
	exit;
}

// if($con && $db) echo "Tudo certo!";

mysql_query("SET NAMES 'utf8'");
mysql_query('SET character_set_connection=utf8');
mysql_query('SET character_set_client=utf8');
mysql_query('SET character_set_results=utf8');
