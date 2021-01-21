<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 03 - Ex 01</title>
</head>
<body>

	<h1>Aula 03 - Exercício 01</h1>

	<p><a href="index.php">Voltar para Home</a></p>

	<h2>Problema:</h2>
	<p>
		Escreva um programa o que efetue o cálculo do salário de um instrutor horista. O programa deve ler o nome do instrutor, a quantidade de horas trabalhadas e o valor da hora. Com base na quantidade de horas trabalhadas e no valor da hora, deve ser feito o cálculo do salário. O programa deve mostrar na tela o nome do funcionário e o seu salário
	</p>

	<form action="ex01.php" method="post">
		
		<p>
			<label for="nome">Nome do funcionário:</label><br>
			<input type="text" name="nome" id="nome">
		</p>

		<p>
			<label for="valorh">Valor da hora de trabalho:</label><br>
			<input type="number" name="valorh" id="valorh" min="0.10" step="0.01">
		</p>

		<p>
			<label for="horast">Horas trabalhadas:</label><br>
			<input type="number" name="horast" id="horast" min="1" max="100">
		</p>

		<p>
			<button type="submit">Enviar</button> 
			<button type="reset">Apagar</button>
		</p>

	</form>

	<?php  

	// verificar SE os campos de formulário foram preenchidos
	if (!empty($_POST['nome']) && 
		!empty($_POST['valorh']) && 
		!empty($_POST['horast']))
	{// inicio do codigo se a condição acima for verdadeira

		// recebendo dados do formulário
		$nome 	= $_POST['nome'];
		$valorh = $_POST['valorh'];
		$horast = $_POST['horast'];

		// calcular salário:
		$salario  = $valorh * $horast;

		echo "<p>O salário do mês do funcionário $nome é R$ $salario</p>";

	}// fim do codigo

	?>


</body>
</html>