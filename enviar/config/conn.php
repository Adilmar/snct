<?php

$msg[0] = "Conexão com o banco falhou!";
$msg[1] = "Não foi possível selecionar o banco de dados!";


// Fazendo a conexão com o servidor MySQL
$conexao = mysql_pconnect("localhost","root",'') or die($msg[0]);
mysql_select_db("snctapp",$conexao) or die($msg[1]);


?>