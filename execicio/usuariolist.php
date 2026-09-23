<?php

require_once 'Pessoa.php';  //pra poder usar o arquivo pessoa e pegar os dados (o mesmo vai pro de baixo)
require_once 'db.class.php';
    $usuario = new db('usuario');

if ($_SERVER['REQUEST_METHOD'] == 'POST') { //depois de clicar em salvar, o formulário é enviado com post

    $pessoa = new Pessoa( //pega os dados que foram digitados no formulário
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['email']
    );



    $usuario->store([ //usa p método store pra salvar os dados na tabela
        'nome' => $pessoa->nome,
        'cpf' => $pessoa->cpf,
        'email' => $pessoa->email
    ]);

    echo "Usuário salvo com sucesso.";
}

// listar os dados do banco de dados da tabela usuário, ajustar a tabela para carregar os atributos do usuário, usar a função all do db class para listar e search para pesquisar
// criar um formulário para pesquisar por algum campo do banco de dados

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

    <table class="table table-striped">
  <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    
</body>

</html>
