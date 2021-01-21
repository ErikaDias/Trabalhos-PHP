<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 02 - Página 02</title>
</head>
<body>

	<h1>Página Pessoal - Página 02</h1>

	<a href="index.php">Voltar para home</a>

	<h2>Dados do autor:</h2>
	<p>
		
	<?php  

	// comentario de linha simples
	/* comentario de 
	multiplas
	linhas */

	// declaração de variáveis
	$nome = "Jason Sobreiro"; // valor string
	// variável 'nome' recebe a string 'Jason Sobreiro'
	$idade = 33; // inteiro (int)
	$altura = 1.76; // real (float)

	// comando para verificar o tipo e o valor de uma variável
	// var_dump($altura); // comando apenas para fins de teste

	// saída de dados (comando echo)
	//echo $nome; // mostrar valor contido na variável '$nome'

	echo "Nome: $nome <br>"; // interpolação de variável
	echo "Idade: " . $idade . "<br>"; // concatenação de variável
	echo "Altura: " . $altura . " m";



	?>

	</p>

</body>
</html>