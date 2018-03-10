<?php

if(!empty($_POST)) {
	var_dump($_POST);
	die('teste');
	$aluno = [
		'nome' => $_POST['nome'],
		'email' => $_POST['email'],
		'senha' => $_POST['senha'],
		'cpf' => $_POST['cpf'],
		'rg' => $_POST['rg'],
		'dt_nascimento' => $_POST['dt_nascimento']
	];

	var_dump($aluno);
	die('teste');

	atualizaAluno($aluno);

	header("Location:alunos.php");
}