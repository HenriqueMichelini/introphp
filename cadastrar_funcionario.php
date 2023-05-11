<?php

ini_set('display_errors', true);
error_reporting(E_ALL);

include('mysql_connection.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$funcao = $_POST['funcao'];
$salario = $_POST['salario'];

$sql = "INSERT INTO funcionarios (nome, email, funcao, salario) VALUES (?, ?, ?, ?)";

//  Preparar declaração SQL
$stmt = mysqli_prepare($conn, $sql);

//  Verificar se houve erro na preparação
if(!$stmt) {
    die("Erro ao preparar a declaração SQL: " . mysqli_error($conn));
}

//  Associa as variáveis aos parâmetros da declaração SQL
mysqli_stmt_bind_param($stmt, "sssd", $nome, $email, $funcao, $salario);

//  Executar declaração SQL
if(!mysqli_stmt_execute($stmt)) {
    die("Erro ao inserir os dados: " . mysqli_error($conn));
}

//  Fecha a declaração SQL
mysqli_stmt_close($stmt);

//  Fecha a conexão com o banco de dados
mysqli_close($conn);

header('Location: index.php');
exit;

?>