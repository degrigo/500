<?php

// Operadores Lógicos

echo "<pre>";

$a = 3;
$b = 5;

// And === &&
var_dump(true and true);
var_dump(true and false);
var_dump(true && true);
var_dump(true && false);
echo "<hr>";


// Ou === ||
var_dump(true or true);
var_dump(true or false);
var_dump(true || true);
var_dump(true || false);
echo "<hr>";

// Um ou outro forem verdadeiros. Nunca os dois.
var_dump(true xor true);
var_dump(true xor false);
var_dump(true xor true);
echo "<hr>";

// Negando o resultado do operador lógico.
var_dump(!true);
var_dump(!false);
echo "<hr>";