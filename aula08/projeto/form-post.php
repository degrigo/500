<?php


if(!empty($_POST)) {
	
	$usuario = [
		'usuario' => $_POST['usuario'],
		'senha' => $_POST['senha']
	];

	insereUsuario($usuario);

	header("Location:index.php");
}