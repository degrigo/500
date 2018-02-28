<?php

// Nota
// Frequencia
// Se aprovado - Nota >= 7 e Frequencia >= 8
// Recuperação - Nota >= 5 ou < 7 e Frequencia >= 8
// Se reprovado - Nota < 5 ou Frequencia < 8

// Para Switch passo o valor booleano de true ou false. Poder varivável ou qualquer condição que queira checar dentro do switch
// Para o case, passo a condição estabelecida que deve exibir de acordo com resultado.

$nota = 4;
$frequencia = 7;

switch (true) {
	case ($nota >= 7 && $frequencia >= 8):
		echo "Você foi aprovado";
		break;

	case ($nota >= 5 || $nota <= 7 && $frequencia >= 8):
		echo "Você está de recuperação";
		break;				

	case ($nota < 5 || $frequencia < 8):
		echo "Você está reprovado";
		break;

	default:
		break;
}