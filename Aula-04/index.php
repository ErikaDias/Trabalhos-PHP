<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Home - Cálculo de Pagamento</title>
</head>
<body>
	<h1>Home - Cálculo de Pagamento</h1>

	<p>Informe os dados para calcular a folha de pagamento:</p>

	<form action="pagamento.php" method="post"> <!-- ação para que os dados sejam enviado a outra pagina. -->

	<p>
		<label for="nome">Informe seu nome completo:</label><br> 
		<input type="text" name="nome" id="nome">
	</p>
	<p>
		<label for="horast">Informe as horas trabalhadas:</label><br>
		<input type="number" name="horast" id="horast" min="1">
	</p>
	<p>
		<label for="valorhoras">Informe o valor da hora de trabalho:</label><br>
		<input type="number" name="valorhoras" id="valorhoras" min="1">

	</p>
	<p>
		<button type="submit">Calcular</button>
		<button type="reset">Limpar</button>
	</p>

	</form>

</body>
</html>