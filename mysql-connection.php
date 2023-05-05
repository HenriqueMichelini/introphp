<?php

// Definir as informações de conexão
$host = 'localhost';
$user = 'henrique';
$password = 'password';
$database = 'intro_mysql';

// Criar a conexão com o MySQL
$conn = mysqli_connect($host, $user, $password, $database);

// Verificar se a conexão foi bem-sucedida
if (!$conn) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}

?>