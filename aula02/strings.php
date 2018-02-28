<?php

echo "<pre>";

// Não existe diferença de performance entre aspas simples ou aspas duplas.
// Aspas duplas permitem uso de caracteres de escape.

// Aspas duplas permite variável dentro da string.
// Aspas simples interpreta somente como texto.

$a = "1,2,3";

echo "Testando $a";
echo "<br>";
echo 'Testando $a';
echo "<hr>";

// Concatenando Strings
echo "<br>";
echo "Testando " . $a . " !!";
echo "<hr>";

// Escape
echo "\" \" \n";
echo "<br>";
echo '\'';
echo "<hr>";

$carro = "Palio";
$meuCarro = "Meu carro é: ";
echo $meuCarro . $carro; 