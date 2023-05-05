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
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Preencha os campos abaixo<h1>
        <form>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="funcao">Função:</label>
                <input type="password" class="form-control" id="funcao" placeholder="Digite sua função">
            </div>
            <div class="form-group">
                <label for="salario">Salário:</label>
                <input type="password" class="form-control" id="salario" placeholder="Digite seu salário">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>