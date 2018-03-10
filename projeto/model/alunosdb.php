<?php

require_once 'conexao.php';

function listaAlunos(){

	$con = conecta();

	$sql = "SELECT * FROM tb_alunos ORDER BY id";

	$result = mysqli_query($con, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		$alunos[] = [
			"id" => $row['id'],
			"nome" => $row['nome'],
			"email" => $row['email'],
			"senha" => $row['senha'],
			"cpf" => $row['cpf'],
			"rg" => $row['rg'],
			"dt_nascimento" => $row['dt_nascimento']
		];
	}

	desconecta($con);
	return $alunos;

}

function listaAlunoPorId($id){

	$con = conecta();

	$sql = "SELECT * FROM tb_alunos WHERE id = {$id}";
	$result = mysqli_query($con, $sql);
	$alunos = mysqli_fetch_assoc($result);

	desconecta($con);
	return $alunos;
}

function atualizaAluno(array $aluno){

	$con = conecta();

	$sql = "UPDATE tb_alunos SET nome = '{$aluno['nome']}', 
			email = '{$aluno['email']}', 
			senha ='{$aluno['senha']}', 
			cpf = '{$aluno['cpf']}', 
			rg = '{$aluno['rg']}', 
			dt_nascimento = '{$aluno['dt_nascimento']}' 
			WHERE id = {$aluno['id']}";


	mysqli_query($con,$sql);

	desconecta($con);

}

function deletarAluno($id){

	$con = conecta();

	$sql = "DELETE FROM tb_alunos WHERE id = {$id}";

	mysqli_query($con, $sql);

	desconecta($con);
}