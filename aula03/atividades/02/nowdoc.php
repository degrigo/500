<?php

echo "<pre>";

$nome = "Tadeu";
$idade = 34;
$peso = 84;
$altura = 1.84;

$msg = <<< 'TXT'

Meu nome é $nome, tenho $idade anos, $peso kg e $altura

TXT;

echo $msg;