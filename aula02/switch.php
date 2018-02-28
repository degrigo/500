<?php

// Caso o valor for correspondente ao esperado, imprimo um valor.

echo "<pre>";

$nome = "Tadeu";

switch ($nome) {
	case 'Jones':
		echo "E ai Tadeu.";
		break;
	
	default:
		echo "Quem é voce?";
		break;
}

// readline é função do php que imprime o valor no terminal.
