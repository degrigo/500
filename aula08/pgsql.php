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

// var_dump($con);

// inserindo dados no banco postgres via php

$sql = "INSERT INTO usuarios(usuario,senha) VALUES ('daniela','123')";

// função do php que passa o insert do php via query ao banco do postgres 

pg_query($sql);

// criando select de dados da tabela usuarios

$sql = "SELECT * FROM usuarios";

// result é a query do SQL
// pg_fetch_all exibe o resultado da query em forma de array

$result = pg_query($con,$sql);
$usuarios = pg_fetch_all($result);

echo "<ul>";

// para cada usuário como usuário, exibo uma lista de dados do meu array, pegando o índice usuário.

foreach ($usuarios as $usuario) {
	echo "<li> {$usuario['usuario']} </li>";
}

echo "</ul>";