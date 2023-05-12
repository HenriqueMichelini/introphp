<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include("mysql_connection.php");

$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$funcao = $_POST["funcao"];
$salario =  $_POST["salario"];

//echo ($id . " " . $nome . " " . $email . " " . $funcao . " " . $salario);

include("mysql_connection.php");
$sql_code = "UPDATE funcionarios SET nome = '$nome', email = '$email', funcao = '$funcao', salario = '$salario' WHERE id = '$id'";
$sql_query = $conn->query($sql_code) or die("Erro ao executar query: " . $conn->error);

header('Location: index.php');
exit;

?>