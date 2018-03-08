<?php

$host = "localhost";
$port = "5432";
$user = "tadeu";
$pass = "123";
$dbname	= "aula08";

$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

$con = pg_connect($con_string);

// criando dunção para conectar o banco de dados.

function conecta(){
	global $con_string;
	return pg_connect($con_string);
}

// função para desconectar o banco

function desconecta($con) {
	pg_close($con);
}