<?php include 'topo.php' ?>
<?php include 'database-usuarios.php' ?>

<div class="container">
	<div class="page-header">
		<h2>Gerenciar <small>Usuários</small></h2>
	</div>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>

		<?php if(listaUsuarios()) : ?>
		<?php foreach (listaUsuarios() as $user) : ?>
			<tr>
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user['usuario']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $user['id'];?>" class="btn btn-info">Editar Usuario</a>
					<form action="delete.php" method="POST" style="display: inline-block;">
						<span>
							<input type="hidden" name="id" value="<?php echo $user['id'];?>">
						</span>
						<span>
							<input type="submit" class="btn btn-danger" value="Deletar" >
						</span>
					</form>
				</td>
			</tr>

		<?php endforeach; ?>
		<?php endif; ?>
		
		</tbody>
	</table>

	<div class="pull-right">
		<a href="new.php" class="btn btn-primary">Novo Usuario</a>
	</div>
</div>

<?php include 'rodape.php' ?>