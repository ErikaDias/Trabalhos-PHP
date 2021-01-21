<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Ex 02</title>
</head>
<body>

	<h1>Aula 03 - Exercício 02</h1>

	<p><a href="index.php">Voltar para Home</a></p>

	<h2>Problema:</h2>

	<p>
		Elaborar um programa que efetue a leitura de três valores (A, B e C) e apresente como resultado final o quadrado da soma dos três valores lidos.
	</p>

	<form action="ex02.php" method="get">
		
		<p>
			<label for="v1"></label>Valor 1:<br>
			<input type="number" name="v1" id="v1">
		</p>

		<p>
			<label for="v2"></label>Valor 2:<br>
			<input type="number" name="v2" id="v2">
		</p>

		<p>
			<label for="v3"></label>Valor 3:<br>
			<input type="number" name="v3" id="v3">
		</p>

		<p>
			<button type="submit">Calcular</button> 
			<button type="reset">Apagar</button>
		</p>

	</form>

	<?php  

	if(!empty($_GET['v1']) && !empty($_GET['v2']) && !empty($_GET['v3']))
	{
		$v1 = $_GET['v1'];
		$v2 = $_GET['v2'];
		$v3 = $_GET['v3'];

		// somar os valores
		$soma = $v1 + $v2 + $v3;

		// quadrado da soma:
		$quadrado = $soma * $soma;

		echo "<p>O quadrado da soma entre $v1, $v2 e $v3 = $quadrado</p>";

	}


	?>

</body>
</html>