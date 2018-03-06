<?php

// Variável global Post envia dados através do formulário
// Para formulário, utilizar parâmetros na tag html

// if(!empty($_POST)) {
// 	print_r($_POST);
// }

// if(!empty($_POST)) {
// 	print_r($_GET);
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>4linux - Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">			
				<form action="form1.php" method="POST">
					<h2>Meu formulário</h2>			
					<div class="form-group">
						<label>Nome: </label>
						<input type="text" name="nome"/>
					</div>
					<div class="form-group">
						<label>E-mail: </label>
						<input type="email" name="email"/>
					</div>
					<div class="form-group">
						<label>Altura: </label>
						<input type="number" name="altura"/>
					</div>
					<div class="form-group">
						<label>Idade: </label>
						<input type="number" name="idade"/>
					</div>
					<div class="form-group">
						<label>Senha: </label>
						<input type="password" name="password"/>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Enviar</button>	
						<button type="submit" class="btn btn-primary">Resetar</button>
					</div>
				</form>
			</div>
			<div class="col-md-4">
			<?php
				// if(!empty($_POST)) {
				// 	print_r($_POST);
				// }

				// if(!empty($_POST)) {
				// 	print_r($_GET);
				// }
			?>
			</div>
		</div>
	</div>
</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>