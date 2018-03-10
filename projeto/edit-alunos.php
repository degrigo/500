<?php include 'template/topo.php' ?>
<?php include 'model/alunosdb.php' ?>

<?php 
	$aluno = listaAlunoPorId($_GET['id']);
 ?>
<div class="container">
	<div class="page-header">
		<h2>Novo <small>Aluno</small></h2>	
	</div>

	<form action="#" method="POST">
		<input type="hidden" name="id" value="<?php echo $aluno['id']; ?>">
		<div class="form-group">
			<label for="usuario">Aluno</label>
			<input type="text" value="<?php echo $aluno['nome'];?>" name="nome" class="form-control" placeholder="Aluno" required>
		</div>
		<div class="form-group">
			<label for="email">E-mail</label>
			<input type="email" value="<?php echo $aluno['email'];?>" name="email" class="form-control" placeholder="E-mail" required>
		</div>	
		<div class="form-group">
			<label for="senha">Senha</label>
			<input type="password" name="senha" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="cpf">CPF</label>
			<input type="number" value="<?php echo $aluno['cpf'];?>" name="cpf" class="form-control" placeholder="CPF" required>
		</div>
		<div class="form-group">
			<label for="rg">RG</label>
			<input type="number" value="<?php echo $aluno['rg'];?>" name="rg" class="form-control" placeholder="RG" required>
		</div>
		<div class="form-group">
			<label for="Data de Nascimento">Data de Nascimento</label>
			<input type="date" value="<?php echo $aluno['dt_nascimento'];?>" name="dt_nascimento" class="form-control" placeholder="Data de Nascimento" required>
		</div>
		<a href="alunos.php" class="btn btn-warning">Voltar</a>
		<button type="submit" class="btn btn-default">Atualizar</button>
	</form>
</div>
<?php include 'model/editalunosdb.php' ?>
<?php include 'template/rodape.php' ?>
