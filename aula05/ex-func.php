<?php

// função para retornar se número é par ou impar
//  função que recebar dois npumeros e retone o maior
//  função que receba uma idade e retorne se é maior de idade
// função que receba um array com informações de uma pessoa e diga se ela pode dirigir.
// pessoa = ['nome', 'idade', 'temHabilitacao']

echo "<pre>";

function parImpar($value){

	if ($value % 2 == 0) {
		return "Par";
	} else {
		return "Impar";
	}
}

echo parImpar(9);

echo "<hr>";

function maior($num1, $num2){
	if ($num1 > $num2) {
		return "O primeiro número é maior";
	} elseif ($num1 == $num2) {
		return "Os números são iguais";
	} elseif ($num1 < $num2) {
		return "O segundo número é menor";
	}
}

echo maior(30,30);

echo "<hr>";

function maiorIdade($idade) {
	if($idade >= 18) {
		return "Você é maior de idade";
	} elseif ($idade < 18) {
		return "Você é menor de idade";
	} 
}

echo maiorIdade(17);

echo "<hr>";

// Não precisa passar parâmetro se não defini pessoa dentro da função.

function habilitado() {

	$pessoa = [
		"nome" => "Tadeu Grigolon",
		"idade" => 19,
		"habilitacao" => false
	];

	if ($pessoa["idade"] >= 18 && $pessoa["habilitacao"] == true) {
		return "Você pode dirigir";
	} elseif ($pessoa["idade"] >= 18 && $pessoa["habilitacao"] == false) {
		return "Você não pode dirigir";
	} elseif ($pessoa["idade"] < 18 || $pessoa["habilitacao"] == false) {
		return "Você não pode dirigir";
	}

}

echo habilitado();

echo "<hr>";

$pessoa = [
	"nome" => "Tadeu Grigolon",
	"idade" => 19,
	"habilitacao" => true
];

function habilitado2($pessoa) {

	if ($pessoa["idade"] >= 18 && $pessoa["habilitacao"] == true) {
		return "Você pode dirigir";
	} elseif ($pessoa["idade"] >= 18 && $pessoa["habilitacao"] == false) {
		return "Você não pode dirigir";
	} elseif ($pessoa["idade"] < 18 || $pessoa["habilitacao"] == false) {
		return "Você não pode dirigir";
	}

}

echo habilitado2($pessoa);

echo "<hr>";

function habilitado3($idade, $temHabilitacao) {
	if ($idade >= 18 && $temHabilitacao) {
		return "Pode Dirigir";
	} else {
		return "Não pode dirigir";
	}
}

echo habilitado3($pessoa['idade'], $pessoa['habilitacao']);

echo "<hr>";

// podemos tipar a variável caso seja necessário
// array, int, bool

function habilitado4(array $pessoa) {

	if ($pessoa["idade"] >= 18 && $pessoa["habilitacao"] == true) {
		return "Você pode dirigir";
	} elseif ($pessoa["idade"] >= 18 && $pessoa["habilitacao"] == false) {
		return "Você não pode dirigir";
	} elseif ($pessoa["idade"] < 18 || $pessoa["habilitacao"] == false) {
		return "Você não pode dirigir";
	}

}

echo habilitado4($pessoa);