<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('mysql_connection.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$funcao = $_POST['funcao'];
$salario = $_POST['salario'];

$sql_code = "INSERT INTO funcionarios (nome, email, salario, funcao) VALUES ('$nome', '$email', '$salario', '$funcao')";
$sql_query = $conn->query($sql_code) or die("Erro ao executar query: " . $conn->error);

header('Location: index.php');
exit;

?>