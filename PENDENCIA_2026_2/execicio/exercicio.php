<?php

require_once 'Pessoa.php';  //pra poder usar o arquivo pessoa e pegar os dados (o mesmo vai pro de baixo)
require_once 'db.class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //depois de clicar em salvar, o formulário é enviado com post

    $pessoa = new Pessoa( //pega os dados que foram digitados no formulário
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['email']
    );

    $usuario = new db('usuario');

    $usuario->store([ //usa p método store pra salvar os dados na tabela
        'nome' => $pessoa->nome,
        'cpf' => $pessoa->cpf,
        'email' => $pessoa->email
    ]);

    echo "Usuário salvo com sucesso.";
}

?>

<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

    <h1>Cadastro de Usuário</h1>

    <form method="POST">

        <div class="mb-3">

            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome">

        </div>

        <div class="mb-3">

            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email">

        </div>

        <div class="mb-3">

            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf">

        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYJwRwcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>
