<?php // include("mysql_connection.php"); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>Cadastro</title>
</head>
<body>

    <?php 
        include("mysql_connection.php");
        $sql_code = "SELECT * FROM funcionarios WHERE ID = '" . $_GET["id"] . "'";
        $sql_query = $conn->query($sql_code) or die("Erro ao executar query: " . $conn->error);
        $result = mysqli_query($conn, $sql_code);
        $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <h1 class="text-center mt-5 mb-5">Preencha os campos abaixo</h1>
        <form action="update.php" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" value="<?php echo $row['nome']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="funcao">Função:</label>
                <input type="text" class="form-control" id="funcao" name="funcao" placeholder="Digite sua função" value="<?php echo $row['funcao']; ?>">
            </div>
            <div class="form-group">
                <label for="salario">Salário:</label>
                <input type="text" class="form-control" id="salario" name="salario" placeholder="Digite seu salário" value="<?php echo $row['salario']; ?>">
            </div>
            <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>