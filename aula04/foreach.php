<?php

// Foreach percorre os índices e mostra o valor relacionado
// As - apelido

echo "<pre>";

echo "<hr>";

$array = ['Tadeu', '4linux', 'João'];

$i = 0;
foreach ($array as $valor) {
	echo $i++ . " " . $valor . "\n";
}

echo "<hr>";

$pessoa = [
	"nome" => "Tadeu Grigolon",
	"idade" => 34,
	"altura" => 1.78,
	"time" => "Palmeiras",
	"cidade" => "São Bernardo do Campo"
];

// Para Array pessoa como chave e valor
// Se a chave for importante para exibição.

foreach ($pessoa as $chave => $valor) {
	echo "$chave -> $valor" . "\n";
	// Não recomendado a verificação abaixo, pois irá fazer o loop até encontrar o valor necessário a ser printado.
	if ($chave == "idade") {
		echo $valor . "\n";
	}
}	

echo "<hr>";

$temp = [
	"2016" => array(
		"Janeiro" => 34,
		"Fevereiro" => 30,
		"Março" => 30
		),
	"2017" => array(
		"Janeiro" => 36,
		"Fevereiro" => 38,
		"Março" => 40
		),
	"2018" => array(
		"Janeiro" => 26,
		"Fevereiro" => 18,
		"Março" => 31
		)
];

echo "<hr>";

foreach ($temp as $ano => $meses) {
	echo "<strong>Temperaturas em $ano</strong><br />";
	foreach ($meses as $mes => $temp) {
		echo "$mes: $temp graus<br />";
	}
}