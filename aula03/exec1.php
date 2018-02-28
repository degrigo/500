<?php

// Nota
// Frequencia
// Se aprovado - Nota >= 7 e Frequencia >= 8
// Recuperação - Nota >= 5 ou < 7 e Frequencia >= 8
// Se reprovado - Nota < 5 ou Frequencia < 8

$nota = 9;
$frequencia = 9;

if ($nota >= 7 && $frequencia >= 8) {
	echo "Você foi aprovado";
} elseif ($nota >= 5 || $nota <= 7 && $frequencia >= 8) {
	echo "Você está de recuperação";
} elseif ($nota < 5 || $frequencia < 8) {
	echo "Você foi reprovado";
} 