<?php

session_start();
require "../controller/Controlador.php";

$controlador = new Controlador();

//Login
if (isset($_POST['inputEmailLog']) && isset($_POST['inputSenhaLog'])) {
    $email = $_POST['inputEmailLog'];
    $senha = $_POST['inputSenhaLog'];

    if ($controlador->clienteLogado($email, $senha)) {
        $_SESSION['estaLogado'] = TRUE;
        header('Location:../view/home.php');
    } else {
        header('Location:../view/login.php');
    }

    die();
}

//Cadastro de Cliente
if (
    isset($_POST['inputNome']) && isset($_POST['inputSobrenome']) &&
    isset($_POST['inputCPF']) && isset($_POST['inputDataNasc']) &&
    isset($_POST['inputTelefone']) && isset($_POST['inputEmail']) &&
    isset($_POST['inputSenha'])
) {

    $nome = $_POST['inputNome'];
    $sobrenome = $_POST['inputSobrenome'];
    $cpf = $_POST['inputCPF'];
    $dataNascimento = $_POST['inputDataNasc'];
    $telefone = $_POST['inputTelefone'];
    $email = $_POST['inputEmail'];
    $senha = $_POST['inputSenha'];

    #MODIFICAR PARA MVC CONTROLADOR
    $controlador->cadastrarCliente($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $senha);

    header('Location:../view/cadastroCliente.php');
    die();
}

//Cadastro de Funcionário
if (
    isset($_POST['inputNomeFunc']) && isset($_POST['inputSobrenomeFunc']) &&
    isset($_POST['inputCPFFunc']) && isset($_POST['inputDataNascFunc']) &&
    isset($_POST['inputTelefoneFunc']) && isset($_POST['inputEmailFunc']) &&
    isset($_POST['inputSalarioFunc'])
) {

    $nome = $_POST['inputNomeFunc'];
    $sobrenome = $_POST['inputSobrenomeFunc'];
    $cpf = $_POST['inputCPFFunc'];
    $dataNascimento = $_POST['inputDataNascFunc'];
    $telefone = $_POST['inputTelefoneFunc'];
    $email = $_POST['inputEmailFunc'];
    $salario = $_POST['inputSalarioFunc'];

    #MODIFICAR PARA MVC CONTROLADOR
    $controlador->cadastrarFuncionario($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $salario, $email);

    header('Location:../view/cadastroFuncionario.php');
    die();
}

//Cadastro de Produto
if (
    !empty($_POST['inputNomeProd']) && !empty($_POST['inputFabricanteProd']) &&
    !empty($_POST['inputDescricaoProd']) && !empty($_POST['inputValorProd'])
) {

    $nome = $_POST['inputNomeProd'];
    $fabricante = $_POST['inputFabricanteProd'];
    $descricao = $_POST['inputDescricaoProd'];
    $valor = $_POST['inputValorProd'];

    $controlador->cadastrarProduto($nome, $fabricante, $descricao, $valor);

    header('Location:../view/cadastroProduto.php');
    die();
}
