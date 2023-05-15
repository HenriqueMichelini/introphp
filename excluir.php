<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include("mysql_connection.php");

$id = $_GET["ID"];

$sql_code = "DELETE FROM funcionarios WHERE id = '$id'";
$sql_query = $conn->query($sql_code) or die("Erro ao executar query: " . $conn->error);

header('Location: index.php');
exit;

?>