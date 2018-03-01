<?php

echo "<pre>";

$num1 = 57;

if ($num1 % 2 == 0) {
	echo "Número é par";
} else {
	echo "Número é impar";
}

echo "<hr>";

$salario = 2.500;
$tempoServico = 13;
$temReclamacoes = false;

if ($salario >= 1.000 && $tempoServico >= 12 && $temReclamacoes == false) {
	echo "Parabéns, você foi promovido";
} else {
	echo "Você não merece a promoção";
}

echo "<hr>";