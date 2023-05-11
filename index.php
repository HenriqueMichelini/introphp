<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <title>Índice</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Cadastros <?php echo "\u{1F5C2}"?></h1>
        <a href="cadastro.php"><h3 class="mb-3">Cadastrar funcionário</h3></a>
        <table class="table">
        <thead>
            <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Função</th>
            <th>Salário</th>
            <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('select_funcionarios.php');

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["nome"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["funcao"] . "</td>";
                    echo "<td>R$ " . $row["salario"] . "</td>";
                    echo "<td><a href='excluir.php?ID=" . $row["id"] ."'>\u{274C}</a> <a href='editar.php?id=" . $row["id"] . "'>✏️</a>";
                    echo "</tr>";
                }
            }
            
            mysqli_close($conn);
            ?>
            <tr>
            <td>João</td>
            <td>joao@example.com</td>
            <td>Programador</td>
            <td>R$ 1000,00</td>
            <td><?php echo "\u{274C} ✏️"?></td>
            </tr>
            <tr>
            <td>Maria</td>
            <td>maria@example.com</td>
            <td>Programador</td>
            <td>R$ 1000,00</td>
            <td><?php echo "\u{274C} ✏️"?></td>
            </tr>
            <tr>
            <td>Paulo</td>
            <td>paulo@example.com</td>
            <td>Programador</td>
            <td>R$ 1000,00</td>
            <td><?php echo "\u{274C} ✏️"?></td>
            </tr>
        </tbody>
        </table>    
    </div>
</body>
</html>