<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Pagamento - Demonstrativo</title>
</head>
<body>

	<h2>Dados do funcionario:</h2>

	<?php

		$nome = $_POST['nome'];
		$horast = $_POST['horast'];
		$valorhoras = $_POST['valorhoras'];
	{

	if (empty($_POST['nome']) && empty($_POST['horast']) && empty($_POST['valorhoras'])) {
		
		echo "Existem campos em branco. Preencha-os!<br>";
		echo "<p><a href='index.php'>Voltar - Home Calculo de pagamento</a></p>";

	} else {

		// mostar ao usuario as informações recebida do teclado.

		echo "<p> Nome do Funcionário: ", $nome;
		echo "<p> Quantidade de horas trabalhadas: ", $horast," hs";
		echo "<p> Valor da hora de trabalho: R$ ", $valorhoras;

		$salario = $horast * $valorhoras;

		// Calculo para desconto de IR

		if ($salario <= 1372.81) {

				$ir = 0.00;

		} else {
	
			if ($salario > 1372.82 && $salario <= 2743.25) {
		
				$desconto = ($salario * 0.85);
				$ir = ($salario - $desconto);

			} else {
		
				if ($salario > 2743.25)
		
					$desconto = ($salario * 0.725);	
					$ir = ($salario - $desconto);
	            }
        }		

		// Calculo para Desconto do INSS

		if ($salario <= 868.29) {

			$desconto = ($salario * 0.92);
			$inss = ($salario - $desconto);

		} else {

			if ($salario > 868.30 && $salario <= 1447.14) {
		
				$desconto = ($salario * 0.91);
				$inss = ($salario - $desconto);

			} else { 

				if ($salario > 1447.15 && $salario <= 2894.28) {
				
				$desconto = ($salario * 0.89);
				$inss = ($salario - $desconto);

				} else { if ($salario > 2894.28)

					$inss = 318.37;
				}
			}
		}

	// Calculo para desconto fgts

	$desconto = ($salario * 0.92);

	$fgts = ($salario - $desconto);

	// Calculo salario do liquido

	$desconto = ($ir + $inss);

	$salariol = ($salario - $desconto);

	// Demonstrativo dos descontos

	echo "<h3> Desmonstrativo de pagamento</h3>";

	$salario = number_format($salario, 2, ",", ".");
	$ir = number_format($ir, 2, ",", ".");
	$inss = number_format($inss, 2, ",", ".");
	$fgts = number_format($fgts, 2, ",", ".");
	$salariol = number_format($salariol, 2, ",", ".");

	echo "<p> Salário bruto: R$ ", $salario;
	echo "<p> Desconto de IR: R$ ", $ir;
	echo "<p> Desconto de INSS: R$ ", $inss;
	echo "<p> Desconto de FGTS: R$ ", $fgts;
	echo "<p> Salário líquido: R$ ", $salariol;

	echo "<p><a href='index.php'>Voltar - Home Calculo de pagamento</a></p>";

	}
	
	}

	?>

</body>
</html>