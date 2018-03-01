<?php

// Array é conjunto de variáveis que pode apresentar diversos valores diferentes.
// Ex Armário -> gavetas (índice) -> conteúdo (Strings, Int, float)
// echo não funciona para imprimir array inteiro, ao menos que o índice esteja setado para ser exibido.

echo "<pre>";

$array = [];

$pessoas = array('João', 'Maria', 'José');
print_r($pessoas);
var_dump($pessoas);

echo "<hr>";
echo $pessoas[2];

echo "<hr>";
$linux = ['Tadeu', 34, 1.78];
var_dump($linux);
echo "<hr>";
echo $linux[1];

echo "<hr>";
for ($i = 0; $i < 3 ; $i++) { 
	echo $pessoas[$i] . "\n";
}

echo "<hr>";
for ($i = 0; $i < 3 ; $i++) {
	if ($i == 1) {
	continue;
	}
	echo $pessoas[$i] . "\n";
}
