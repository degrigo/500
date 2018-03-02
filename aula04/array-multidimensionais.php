<?php

// Multidimensionais permitem associar índices a um novo array.

echo "<pre>";

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

print_r($temp);
echo "<hr>";
print_r($temp["2018"]);
echo "<hr>";
print_r($temp["2018"]["Fevereiro"]);
echo "<hr>";