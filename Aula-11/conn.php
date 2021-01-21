<?php 
// declaração das constantes de conexão
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'musicas_bd');

// conexao com o banco de dados 
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

?>