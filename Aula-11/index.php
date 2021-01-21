<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Musicas - Home</title>
</head>
<body>

    <h1>Cadastro de Musicas - Home</h1>

    <h4><a href="musicas.php">Musicas cadastradas</a></h4>

    <form action="musicas.php" method="post">
        <p>
            <label>Título:</label><br>
            <input type="text" name="titulo" maxlength="80">
        </p>
        <p>
            <label>Cantor:</label><br>
            <input type="text" name="cantor" maxlength="50">
        </p>
        <p> 
            <label>Gênero:</label><br>
            <input type="text" name="genero" maxlength="50">
        </p>
        <p>
            <label>Ano:</label><br>
            <input type="number" name="ano" min="1860 " max="2021">
        </p>
        <p>
            <button type="submit" name="cadastrar">Cadastrar</button>
        </p>
    </form>
    
</body>
</html>