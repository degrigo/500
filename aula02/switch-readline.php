<?php

// readline é função do php que imprime o valor no terminal.

echo "<pre>";

$nomeCompleto = readline("Digite o seu nome: ");

switch ($nomeCompleto) {
	case 'Jones':
		echo "E ai Jones.";
		break;
	case 'Junior':
		echo "E ai Junior.";
		break;
	case 'Tadeu':
		echo "E ai Tadeu.";
		break;

	default:
		echo "Quem é voce?";
		break;
}
echo "\n";