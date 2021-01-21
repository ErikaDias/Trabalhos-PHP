<?php  

    include_once 'conn.php';

    function inserir_musica($musica)
    {
        
        global $conn;

        $values = "'".$musica['titulo']."', " .
                  "'".$musica['cantor']."', " .
                  "'".$musica['genero']."', " .
                      $musica['ano'];
        

        $sql = "INSERT INTO musicas_tb (titulo, cantor, genero, ano) VALUES ($values)";

        mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0)
        {
            return '<h3> Musica cadastrada!';
        }

        return '<h3>Erro ao cadastrar sua musica</h3>';
        

    }

    function listar_musica()
    {
        global $conn;

        $sql = "SELECT * FROM musicas_tb";

        $result = mysqli_query($conn, $sql);

        if(mysqli_affected_rows($conn) > 0)
        {
            while($musica = mysqli_fetch_assoc($result))
            {
                echo'<p>';

                foreach($musica as $indice => $valor)
                {

                echo "<b>" . ucfirst($indice) . "</b>: " . $valor . "<br>";

                }
                echo'<p>';


            }
            
        }
        else
        {
            echo '<h3> Não há musicas cadastradas..</h3>'; 
        }
    }


?>