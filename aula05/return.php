<?php

// return faz o cálculo do que precisa ser feito dentro da função.

echo "<pre>";

function tax($value) {
	$value = $value * 1.09;
	return $value;
}

$price = 30;
$grandTotal = tax($price);

echo "O preço é de: " . $grandTotal;

echo "<hr>";

function discount($value) {
	$value = $value - 0.50;
	return $value;
}

$price = 12;
$ammount = discount($price);

echo "De R$ 12.00 por R$: " . $ammount;

echo "<hr>";

function displayCoupon($value) {
	$value = [
		"coupon01" => "ABC",
		"coupon02" => "EFG",
		"coupon03" => "HIJ"
	];

	foreach ($value as $coupon => $code) {
		if ($coupon == "coupon03") {
			return $code;
		}
	}
}

$couponCode = displayCoupon("");


echo $couponCode;

echo "<hr>";

// usamos global para usar a variavel em escopo global do arquivo.

$taxa = 1.09;

function taxar($valor) {
	global $taxa;
	return $valor + $taxa;
}

echo taxar(10);

echo "<hr>";

function adicionar($fruta) {
	return ++$fruta;
}

$laranjas = 5;
$laranjas = adicionar($laranjas);
echo $laranjas;

// Adicionado por variável por referência, pegando valor e espaço de memória no qual a laranja está sendo setada.

echo "<hr>";

function adicionar2(&$fruta) {
	return ++$fruta;
}

$laranjas = 5;
adicionar2($laranjas);
echo $laranjas;