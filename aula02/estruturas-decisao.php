<?php

// Verificação entre valores
// Se for verdadeiro, retorno
// Se for falso, mostro outro valor.
// Dá poder ao software

$idade = 18;
$carteirinha = true;

echo "<pre>";

if ($idade < 18) {
	echo "Você não pode entrar aqui";
} else {
	echo "Você é maior de idade";
}

echo "<hr>";

if ($idade >= 18 && $carteirinha) {
	echo "Bem vindo";
} elseif (!$carteirinha) {
	echo "Fazer carteirinha";
} else {
	echo "Não pode entrar";
}

echo "<hr>";

$a = "Lucas";

if ($a == "Marcos") {
	echo "Olá Marcos";
} elseif ($a == "Lucas") {
	echo "Olá Lucas";
} else {
	echo "Olá estranho";
}

echo "<hr>";

$idade = 18;

// Maior de 18 voto obrigatório
// 16 e < 18 voto opcional
// < 16 não vota


// Verificar se número é para ou impar

echo "<hr>";

// Se o número dividor e resto da divisão = 0
$num = 1;

if ($num % 2 === 0){ 
	echo "Número par";	
} else {
	echo "Número impar";
}