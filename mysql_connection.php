<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

// Definir as informações de conexão
$host = "localhost";
$user = "root";
$password = "password";
$database = "intro_mysql";

// Criar a conexão com o MySQL
$conn = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo (mysqli_connect_error());
}

?>