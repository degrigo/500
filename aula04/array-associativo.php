<?php

// Array associativo cria um nome para o índice, conseguindo imprimir o valor através do mesmo
// print_r mostra o conteúdo do array
// var_dump mostra o conteúdo e a tipagem

echo "<pre>";

echo "<hr>";

$conta = 4;

$pessoa = [
	"nome" => "Tadeu Grigolon",
	"idade" => 34,
	"altura" => 1.78,
	"time" => "Palmeiras",
	"cidade" => "São Bernardo do Campo"
];

print_r($pessoa);
var_dump($pessoa);

echo "<hr>";

echo $pessoa['time'];