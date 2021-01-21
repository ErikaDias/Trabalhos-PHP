<?php include_once 'func.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Musicas - Musicas</title>
</head>
<body>

    <h1>Cadastro de Musicas - Musicas Cadastradas</h>

    <h4><a href="index.php">Voltar <- Home</a></h4>

    <?php 

        if (isset($_POST['cadastrar']))
        {
            if (!empty($_POST['titulo']) && !empty($_POST['cantor'])  && !empty($_POST['genero']) && !empty($_POST['ano']))
            {
                $musica['titulo'] = $_POST['titulo'];
                $musica['cantor'] = $_POST['cantor'];
                $musica['genero'] = $_POST['genero'];
                $musica['ano']    = $_POST['ano'];

                echo inserir_musica($musica);
            }
            else 
            {
                echo '<h2>Preencha todos os dados para cadastrar sua musica!</h2>';
            }

        }

    listar_musica();

    ?>

 
    
</body>
</html>