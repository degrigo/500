<?php

// Função são trechos de código que consigo ser reaproveitados ao longo do código.

echo "<pre>";

function negrito($value){
	echo "<strong>" . $value . "</strong>";
}

function italico($value){
	echo "<il>" . $value . "</il>";
}

function quebra($value) {
	echo "<br />" . $value;
}

function lista($value) {
	$array = [
		"Item1" => "Computador",
		"Item2" => "Carro",
		"Item3" => "Chave"
	];

	foreach ($array as $objects) {
		echo $objects . "\n";
	}
}

negrito("Olá Tadeu");

echo "<hr>";

function espaco($value){
	echo "<br />" . $value;
	echo "<hr>";
}

espaco("Teste1");
espaco("Teste2"); 

$lista = true;

lista($lista);

// return para de executar caso encontre O RESULTADO.

// echo "<hr>";

// function isMaiorIdade($idade){
// 	if($idade >= 18) {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }

// $idade = 14;



// var_dump(isMaiorIdade($idade);
