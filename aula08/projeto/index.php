<?php include 'topo.php' ?>
<?php include 'databases-usuarios.php' ?>

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
		<?php if(listaUsuarios()) :	?>
			<?php foreach(listaUsuarios() as $usuario) : ?>
				<tr>
					<td><?php echo $usuario['id']; ?></td>
					<td><?php echo $usuario['usuario']; ?></td>
					<td></td>
				</tr>
			<?php endforeach; ?>
		<?php endif;?>
		
		</tbody>
	</table>

	<div class="pull-right">
		<a href="new.php" class="btn btn-primary">Novo Usuario</a>
	</div>
</div>

<?php include 'rodape.php' ?>