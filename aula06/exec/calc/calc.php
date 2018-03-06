<?php

// Montar um formulário que receba dois números
// Adição
// Subtração
// Multiplicação
// Divisão

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculadores</title>
</head>
<body>
	<form action="" method="POST">
		<div>
			<input type="number" name="num1">
			<select name="op">
				<option value="add">Add</option>
				<option value="sub">Sub</option>
				<option value="mul">Mul</option>
				<option value="div">Div</option>
			</select>
			<input type="number" name="num2">
			<span>=</span>
			<?php
				if(!empty($_POST)) {
					switch ($_POST['op']) {
						case 'add':
							$result = $_POST['num1'] + $_POST['num2'];
							break;						
						case 'sub':
							$result = $_POST['num1'] - $_POST['num2'];
							break;
						case 'mul':
							$result = $_POST['num1'] * $_POST['num2'];
							break;
						case 'div':
							$result = $_POST['num1'] / $_POST['num2'];
							break;
						
						default:
							$result = "Inválido";
							break;
					}

					echo $result;
				}
			?>
			<div>
				<input type="submit" value="Calcular">
			</div>			
		</div>
	</form>
</body>
</html>