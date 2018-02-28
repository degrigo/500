<?php

// Comando include linka dois arquivos php.
// Valores foram setados dentro do arquivo valores.php

// Include continua executando o arquivo php mesmo se ele não existir, exibindo erros, dando warning e seguindo em frente.

// include_once ('valores.php'); Inclui o arquivo uma única vez.

include 'valores.php';
include ('valores.php');
include ("valores.php");

echo "<pre>";

var_dump($a);
var_dump($b);
var_dump($c);
