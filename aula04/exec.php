<?php

// Array $pesoa -> Nome, Idade, Email
// Exibir na tela o conteúdo de cada informação seguindo o exemplo
// Meu nome é
// Tenho $x anos
// Meu email é:

// array pessoas onde teremos 3 pessoas
// cada pessoa possui Nome, Idade e Email
// Exibir na tela o conteúdo de cada informação seguindo do exemplo
// Meu nome é
// Tenho $x anos
// Meu email é:

echo "<pre>";

echo "<hr>";

$pessoa = [
	"Nome" => "Tadeu Grigolon",
	"Idade" => 34,
	"Email" => "degrigo@gmail.com"
];

echo "Meu nome é: " . $pessoa["Nome"] . "\n";
echo "Tenho " . $pessoa["Idade"] . " anos." . "\n";
echo "Meu email é: " . $pessoa["Email"] . "\n";

echo "<hr>";

$pessoas = [
	"pessoa1" => [
		"Nome" => "Tadeu Grigolon",
		"Idade" => 34,
		"Email" => "degrigo@gmail.com"
	],
	"pessoa2" => [
		"Nome" => "Daniela Pini",
		"Idade" => 40,
		"Email" => "danipini9@hotmail.com"
	],
	"pessoa3" => [
		"Nome" => "Nivaldo Grigolon",
		"Idade" => 59,
		"Email" => "nivaldogrigolon@gmail.com"
	]
];

foreach ($pessoas as $key => $value) {
	echo "Meu nome é: " . $value["Nome"] . "\n";
	echo "Tenho " . $value["Idade"] . " anos." . "\n";
	echo "Meu email é: " . $value["Email"] . "\n";
	echo "<br />";
}

echo "<hr>";

foreach ($pessoas as $value) {
	echo "Meu nome é: " . $value["Nome"] . "\n";
	echo "Tenho " . $value["Idade"] . " anos." . "\n";
	echo "Meu email é: " . $value["Email"] . "\n";
	echo "<br />";
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

foreach ($temp as $ano => $meses) {
	echo "<strong>Temperaturas de $ano</strong>" . "\n";
	foreach ($meses as $mes => $temp) {
		echo "$mes -> $temp" . "\n";
	}
}