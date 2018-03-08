<?php include 'topo.php' ?>
<?php include 'databases-usuarios.php' ?>
<?php include 'form-post.php' ?>

<div class="container">
	<div class="page-header">
		<h2>Novo Usuário</h2>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form action="#" method="POST">
				<div class="form-group">
					<label>Nome: </label>
					<input type="text" name="usuario"/>
				</div>
				<div class="form-group">
					<label>Senha: </label>
					<input type="password" name="senha"/>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Enviar</button>	
					<button type="reset" class="btn btn-primary">Limpar Campos</button>
					<a href="index.php" class="btn btn-warning">Voltar</a>
				</div>			
			</form>
		</div>
	</div>
</div>

<?php include 'rodape.php' ?>