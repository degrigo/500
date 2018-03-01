<?php

$nota = 10;
$frequencia = 6;

if ($nota >= 7 && $frequencia >= 8) {
	echo "Aprovado";
} elseif ($nota >= 5 || $nota <= 7 && $frequencia >= 8) {
	echo "Recuperação";
} elseif ($nota < 5 || $frequencia < 8) {
	echo "Reprovado";
}