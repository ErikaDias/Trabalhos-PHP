<h3>
	1.	Faça um algoritmo que leia o nome de uma pessoa e a sua altura. Leve em consideração que a altura será lida em centímetros, por exemplo 177 e não 1,77. Com base na altura deve ser dada uma mensagem dizendo se a pessoa é de estatura “Baixa” (até 159), “Média” (de 160 até 172) ou “Alta” (acima de 172). 
</h3>

<form action="respostas.php" method="post">
	
	<p>
		<label>Nome:</label><br>
		<input type="text" name="nome">
	</p>

	<p>
		<label>Altura (em cm):</label><br>
		<input type="number" name="altura" min="50" max="250">
	</p>

	<p>
		<button type="submit" name="ex1">Verificar</button>
	</p>

</form>