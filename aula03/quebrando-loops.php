<?php

// No primeiro caso se o valo for igual a 5, pulo valor correspondente e continuo executando até a verificação acabar.

// No segundo, eu interrompo a execução de o valor de cont for igual a 5

echo "<pre>";
for ($cont = 0; $cont <= 10; $cont ++) { 
	if ($cont == 5) {
		continue;
	}
	echo $cont . "\n";
}

for ($cont = 10; $cont >= 0; $cont --) { 
	if ($cont == 5) {
		break;
	}
	echo $cont . "\n";
}