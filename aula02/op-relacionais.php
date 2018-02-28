<?php

// Operadores Relacionais

echo "<pre>";

// Igual

var_dump(2 == 2);
var_dump(2 == "2");
var_dump(2 == 3);
echo "<hr>";

// Idêntico
var_dump(2 === 2);
var_dump(2 === "2");
echo "<hr>";

// Diferente
var_dump(2 != 2);
var_dump(3 != 2);
echo "<hr>";

// Menor que
var_dump(2 < 5);
var_dump(5 < 2);
var_dump(2 < 2);
echo "<hr>";

// Maior que
var_dump(2 > 5);
var_dump(5 > 2);
var_dump(2 > 2);
echo "<hr>";

// Menor ou igual
var_dump(2 <= 5);
var_dump(5 <= 2);
var_dump(2 <= 2);
echo "<hr>";

// Maior ou igual
var_dump(2 >= 5);
var_dump(5 >= 2);
var_dump(2 >= 2);
echo "<hr>";