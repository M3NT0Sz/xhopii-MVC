<?php

class Cliente
{

    protected $nome;

    protected $sobrenome;

    protected $cpf;

    protected $dataNascimento;

    protected $telefone;

    protected $email;

    protected $senha;

    public function __construct($cpf, $nome, $sobrenome, $dataNascimento, $telefone, $email, $senha)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function get_Nome()
    {
        return ($this->nome);
    }

    public function set_Nome($nome)
    {
        $this->nome = $nome;
    }

    public function get_Sobrenome()
    {
        return ($this->sobrenome);
    }

    public function set_Sobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }

    public function get_Cpf()
    {
        return ($this->cpf);
    }

    public function set_Cpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function get_DataNascimento()
    {
        return ($this->dataNascimento);
    }

    public function set_DataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function get_Telefone()
    {
        return ($this->telefone);
    }

    public function set_Telefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function get_Email()
    {
        return ($this->email);
    }

    public function set_Email($email)
    {
        $this->email = $email;
    }

    public function get_Senha()
    {
        return ($this->senha);
    }

    public function set_Senha($senha)
    {
        $this->senha = $senha;
    }
}
