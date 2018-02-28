<?php

// String grande com aspas duplas
// Permite leitura de variável
// Não pode ter espaço depois da primeira e antes da tag TXT

echo "<pre>";
$nome = "Tadeu";

$texto = <<< TXT
sdasdasdasd
	asadasdas
	sdasds
	$nome
	sdassas
TXT;

echo $texto;