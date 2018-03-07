<?php

$host = "localhost";
$port = "5432";
$user = "tadeu";
$pass = "123";
$dbname	= "aula08";

// setando conexão com o postgres
$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

echo $con_string;

echo "<hr>";

// pg connect é a função dentro do php no qual se comunica com a conexão do postgres.
$con = pg_connect($con_string);

var_dump($con);