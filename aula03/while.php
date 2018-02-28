<?php 

// Enquanto a minha condição for false, vou incrementando o valor +1 na variável cont.

echo "<pre>";
$cont = 0;

while ($cont <= 10) {
	echo $cont;
	if ($cont ==1) {
		echo "Legal";
	}
	$cont++;
}

echo "<br>";
echo "Acabou";
