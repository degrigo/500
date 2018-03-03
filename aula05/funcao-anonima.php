<?php

// Função anônima

// Array filter percorre o array buscando os valores.
// Primeiro parâmetro é uma variável e o segundo é uma função.

echo "<pre>";

$array = [1,2,3,4,5,6];

$pares = array_filter($array, function($valor){
	if ($valor % 2 == 0) {
		return $valor;
	}
});

print_r($pares);

echo "<hr>";

// Use = conseguimos usar uma variável com escopo global e a trazer para dentro de uma função.

$msg = "Olá";

$func = function($a) use ($msg){
	// $msg = "Hello";
	echo $msg.$a;
};

$func("4Linux");

