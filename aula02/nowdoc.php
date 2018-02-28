<?php

// String grande com aspas simples
// Permite leitura de variável
// Não pode ter espaço depois da primeira e antes da tag TXT
// Seto aspas simples na primeira tag TXT para utilizar
// Interpreta como texto somente (aspas simples)

echo "<pre>";
$nome = "Tadeu";

$texto = <<< 'TXT'
sdasdasdasd
	asadasdas
	sdasds
	$nome
	sdassas
TXT;

echo $texto;