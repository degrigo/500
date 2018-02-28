<?php

// Comando include linka dois arquivos php.
// Valores foram setados dentro do arquivo valores.php

// Require só executa se o arquivo existir de fato.
// Caso contrário, printa o erro na tela e não continua a execução.

// require_once ('valores.php'); Inclui o arquivo uma única vez.

require 'valores.php';
require ('valores.php');
require ("valores.php");

echo "<pre>";

var_dump($a);
var_dump($b);
var_dump($c);

