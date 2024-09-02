<?php

require_once "../model/BancoDeDados.php";
require_once "../model/Produto.php";
require_once "../model/Cliente.php";
require_once "../model/Funcionario.php";


class Controlador
{
    //Atributos
    private $bancoDeDados;

    public function __construct()
    {
        $this->bancoDeDados = new BancoDeDados("localhost", "root", "", "xhopii");
    }

    // public function __construct($host, $login, $senha, $dataBase){
    //     $this->bancoDeDados = new BancoDeDados("$host","$login", "$senha", "$dataBase");
    // }

    public function cadastrarProduto($nome, $fabricante, $descricao, $valor)
    {
        $produto = new Produto($nome, $fabricante, $descricao, $valor);
        $this->bancoDeDados->inserirProduto($produto);
    }
    public function cadastrarCliente($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $senha)
    {
        $cliente = new Cliente($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $senha);
        $this->bancoDeDados->inserirCliente($cliente);
    }
    public function cadastrarFuncionario($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $salario, $email)
    {
        $funcionario = new Funcionario($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $salario, $email);
        $this->bancoDeDados->inserirFuncionario($funcionario);
    }

    public function visualizarProduto()
    {
        $produtos = '';
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while ($produto = mysqli_fetch_assoc($listaProdutos)) {
            $produtos .= "<section class=\"conteudo-bloco\">" .
                "<h2>" . $produto["nome"] . "</h2>" .
                "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                "<p>Descrição: " . $produto["descricao"] . "</p>" .
                "<p>Valor: " . $produto["valor"] . "</p>" .
                "</section>";
        }
        return $produtos;
    }
    public function visualizarCliente()
    {
        $clientes = '';
        $listaClientes = $this->bancoDeDados->retornarClientes();
        while ($cliente = mysqli_fetch_assoc($listaClientes)) {
            $clientes .= "<section class=\"conteudo-bloco\">" .
                "<h2>" . $cliente["nome"] . " " . $cliente['sobrenome'] . "</h2>" .
                "<p>CPF: " . $cliente["cpf"] . "</p>" .
                "<p>Data de Nascimento: " . $cliente["dataNascimento"] . "</p>" .
                "<p>Telefone: " . $cliente["telefone"] . "</p>" .
                "<p>Email: " . $cliente["email"] . "</p>" .
                "</section>";
        }
        return $clientes;
    }

    public function visualizarFuncionario()
    {
        $funcionarios = '';
        $listaFuncionarios = $this->bancoDeDados->retornarFuncionarios();
        while ($funcionario = mysqli_fetch_assoc($listaFuncionarios)) {
            $funcionarios .= "<section class=\"conteudo-bloco\">" .
                "<h2>" . $funcionario["nome"] . " " . $funcionario['sobrenome'] . "</h2>" .
                "<p>CPF: " . $funcionario["cpf"] . "</p>" .
                "<p>Data de Nascimento: " . $funcionario["dataNascimento"] . "</p>" .
                "<p>Telefone: " . $funcionario["telefone"] . "</p>" .
                "<p>Salario: " . $funcionario["salario"] . "</p>" .
                "<p>Email: " . $funcionario["email"] . "</p>" .
                "</section>";
        }
        return $funcionarios;
    }
    
}
