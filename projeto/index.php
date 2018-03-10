<?php include 'template/topo.php' ?>
<?php include 'model/alunosdb.php' ?>

<div class="container">
	<div class="page-header">
		<h2>Gerenciar alunos</h2>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome do Aluno</th>
				<th>E-mail</th>
				<th>CPF</th>
				<th>RG</th>
				<th>Data de Nascimento</th>
				<th>Painel de Edição</th>
			</tr>
		</thead>
		<tbody>			
			<?php if(listaAlunos()) : ?>
				<?php foreach (listaAlunos() as $aluno) : ?>
					<tr>
						<td><?php echo $aluno['id'] ?></td>
						<td><?php echo $aluno['nome'] ?></td>
						<td><?php echo $aluno['email'] ?></td>
						<td><?php echo $aluno['cpf'] ?></td>
						<td><?php echo $aluno['rg'] ?></td>
						<td><?php echo $aluno['dt_nascimento'] ?></td>
						<td>
							<a href="edit.php?id=<?php echo $aluno['id'];?>" class="btn btn-info">Editar Aluno</a>
							<form action="model/deletealunos.php" method="POST" style="display: inline-block;">
								<span>
									<input type="hidden" name="id" value="<?php echo $aluno['id'];?>">
								</span>
								<span>
									<input type="submit" class="btn btn-danger" value="Deletar" >
								</span>
							</form>
						</td>
					</tr>
				<?php endforeach ?>
			<?php endif ?>	
		</tbody>
	</table>
	<div class="pull-right button-aluno">
		<a href="new.php" class="btn btn-primary">Novo Aluno</a>
	</div>
</div>

<?php include 'template/rodape.php' ?>