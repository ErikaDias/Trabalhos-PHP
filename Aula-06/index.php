<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro de vendas</title>
</head>
<body>
	<h1>Cadastro de vendas</h1>

	<form action="index.php" method="post">
		
		<label><b>Selecione um setor:</b></label><br>
		<p>
			<select name="op">
				<option value="0" selected disabled> - Nenhum - </option>
				<option value="Eletrônicos">Eletrônicos</option>
				<option value="Vestuário">Vestuário</option>
				<option value="Alimentos">Alimentos</option>
			</select>
		</p>
		<p><button type="submit" name="enviar">Iniciar Venda</button></p>

	</form>

	<?php 

	if(isset($_POST['enviar']))
	{
		$op = $_POST['op'];

		echo "<h3>Sistema de Venda: $op</h3>";

	?>	

	<form action="venda.php" method="post">

		<p>
			<label>Nome do cliente: (obrigatório)</label><br>
			<input type="text" name="nome">
		</p>
		<p>
			<label>CPF: (opcional) </label><br>
			<input type="text" name="cpf" .cpf-mask="000.000.000-00">
		<p>
			<label>Nome do produto: (obrigatório)</label><br>
			<input type="text" name="produto">
		</p>
		<p>
			<label>Valor do Produto: (obrigatório)</label><br>
			<input type="number" name="valor">
		</p>
		<p>
			<label>Quantidade: (obrigatório)</label><br>
			<input type="number" name="quantidade" min="1">
		</p>

		<label><b>Selecione a forma de pagamento:</b></label>
		<p>
			<select name="formapgto">
				<option value="0" selected="" disabled="true"> - Nenhum - ></option>
				<option value="A vista no dinheiro - 5% de desconto">A vista no dinheiro - 5% de desconto</option>
				<option value="A vista no débito – sem desconto">A vista no débito – sem desconto</option>
				<option value="Parcelado em até 3x no cartão – 2% de juros">Parcelado em até 3x no cartão – 2% de juros</option>
				<option value="Parcelado em até 5x no cartão – 5% de juros">Parcelado em até 5x no cartão – 5% de juros</option>
			</select>
		</p>
		<p>
			<button type="submit">Calcular venda</button>
		</p>

	</form>

	
	<?php 




	}

	 ?>

	


</body>
</html>