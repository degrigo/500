<?php

// Print_R no Post exibe uma lista de variáveis, que são dados no qual o foram inpudados através do formulário e exibe em forma de array de acordo com o parâmetro name da tag html.

echo "<pre>";

// print_r($_POST); 

if(!empty($_POST)) {
	$msg = "Olá, eu sou o " . $_POST['nome'];
	echo $msg;
}