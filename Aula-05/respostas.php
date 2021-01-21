<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 05 - Respostas</title>
</head>
<body>

	<h1>Aula 05 - Página de Respostas</h1>

	<p><a href="index.php">Voltar para Home</a></p>

	<?php  

	// verificar se o form do ex1 foi enviado
	if(isset($_POST['ex1'])) 
	{

		// verificar se algum campo do form está vazio
		if (empty($_POST['nome']) || empty($_POST['altura']))
		{
			// mensagem de erro
			echo "<h3>Atenção: preencha todos os campos do Form do Ex1</h3>";
		}
		else // senão (se nenhum campo está em branco)
		{
			// armazenar em variáveis locais os dados do form
			$nome   = $_POST['nome'];
			$altura = $_POST['altura'];

			if($altura <= 159)
			{
				echo "<h3>$nome, você mede $altura cm (estatura baixa)</h3>";
			}
			else if ($altura <= 172) 
			{
				echo "<h3>$nome, você mede $altura cm (estatura média)</h3>";
			}
			else 
			{
				echo "<h3>$nome, você mede $altura cm (estatura alta)</h3>";
			}

		}// fim do if/else do teste empty
	}// fim do if do 'ex1'
	else if(isset($_POST['ex2']))
	{
		// verificar se o salário está em branco
		if(empty($_POST['salario']))
		{
			// msg de erro
			echo "<h3>ATENÇÃO: Preencha o valor do salário no form do Exercício 02</h3>";
		}
		else // senão (se o salário foi informado)
		{
			// receber dado do form
			$salario = $_POST['salario'];

			// verifica o valor do salário
			if ($salario <= 750)
			{
				$inss = $salario * 0.07;
			}
			else if ($salario <= 900)
			{
				$inss = $salario * 0.08;
			}
			else if ($salario <= 1200)
			{
				$inss = $salario * 0.09;
			}
			else
			{
				$inss = $salario * 0.10;
			}

			$salario = number_format($salario, 2, ',', '.');
			$inss 	 = number_format($inss, 2, ',', '.');

			echo "<h3>Salário: R$ $salario<br>";
			echo "INSS: R$ $inss</h3>";
		}
	}


	?>

</body>
</html>