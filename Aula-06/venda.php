<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Dados da compra</title>
</head>
<body>

	<h2>Dados da compra</h2>

	<?php 

	$nome    = $_POST['nome'];
	$cpf     = $_POST['cpf'];
	$produto = $_POST['produto'];
	$valor   = $_POST['valor'];
	$quant   = $_POST['quantidade'];
	

	if (empty($_POST['nome']) && empty($_POST['produto']) && empty($_POST['valor']) && empty($_POST['quantidade']) && empty($_POST['formapgto'])) {

		echo "Existem campos em branco. Preencha-os!<br>";
		echo "<p><a href='index.php'>Voltar - Cadastro de vendas</a></p>";

	} else {

		echo "<p> Nome: ", $nome;
		echo "<p> Cpf: ", $cpf;
		echo "<p> Produto: ", $produto;
		echo "<p> Valor: ", $valor;
		echo "<p> Quantidade: ", $quant," unidade";

		$formapgto = $_POST['formapgto'];

		switch ($formapgto) {
			case 'A vista no dinheiro - 5% de desconto':
				$desconto = ($valor * 5) / 100;
				$total = ($valor - $desconto);
				$total = ($total * $quant); 
				$total = number_format($total, 2, ",", ".");
				echo "<p>Pagamento: A vista no dinheiro tem 5% de desconto";
				echo "<p>Total da compra R$ ", $total;
				break;
			case 'A vista no débito – sem desconto':
				$valor = ($valor * $quant);
				$valor = number_format($valorn, 2, ",", ".");
				echo "<p>Pagamento: A vista no débito, sem desconto";
				echo "<p>Total da compra R$ ", $valor;
				break;
			case 'Parcelado em até 3x no cartão – 2% de juros':
				$aumento = ($valor * 2) / 100;
				$total = ($valor + $aumento);
				$total = ($total * $quant);
				$parcelas = $total / 3;
				$total = number_format($total, 2, ",", ".");
				$parcelas = number_format($parcelas, 2, ",", ".");
				echo "<p>Pagamento: Parcelado em até 3x no cartão – 2% de juros";
				echo "<p>Total da compra R$ ", $total;
				echo "<p>O valor das parcelas R$ ", $parcelas;			
				break;
			case 'Parcelado em até 5x no cartão – 5% de juros':
				$aumento = ($valor * 5) / 100;
				$total = ($valor + $aumento);
				$total = ($total * $quant);
				$parcelas = $total / 5;
				$total = number_format($total, 2, ",", ".");
				$parcelas = number_format($parcelas, 2, ",", ".");
				echo "<p>Pagamento: Parcelado em até 5x no cartão – 5% de juros";
				echo "<p>Total da compra R$ ", $total;
				echo "<p>O valor das parcelas R$ ", $parcelas;						
				break;
			}
	}	

	?>

</body>
</html>