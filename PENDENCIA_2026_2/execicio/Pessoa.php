<?php

class Pessoa
{
    public $nome;
    public $cpf;
    public $email;

    function __construct($nome, $cpf, $email)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    function get_details()
    {
        echo "Nome: " . $this->nome . ". CPF: " . $this->cpf . "Email: " . $this->email . ".<br>";
    }

    $pessoa1 = new Pessoa("Ginevra", "123.456.789-00", "ginevra_snleop@gmail.com");
}
