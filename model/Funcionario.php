<?php

class Funcinario{

    protected $nome;
    
    protected $sobrenome;

    protected $cpf;

    protected $dataNascimento;

    protected $telefone;

    protected $email;

    protected $salario;


    public function __construct($nome, $sobrenome, $cpf, $dataNascimento, $telefone, $email, $salario){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->telefone = $telefone;
        $this->salario = $salario;
    }

    public function get_nome(){
        return($this->nome);
    }
    
    public function set_nome($nome){
        $this->nome = $nome;
    }

    public function get_sobrenome(){
        return($this->sobrenome);
    }
    
    public function set_sobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    public function get_cpf(){
        return($this->cpf);
    }
    
    public function set_cpf($cpf){
        $this->cpf = $cpf;
    }

    public function get_dataNascimento(){
        return($this->dataNascimento);
    }
    
    public function set_dataNascimento($dataNascimento){
        $this->dataNascimento = $dataNascimento;
    }

    public function get_telefone(){
        return($this->telefone);
    }
    
    public function set_telefone($telefone){
        $this->telefone = $telefone;
    }

    public function get_email(){
        return($this->email);
    }
    
    public function set_email($email){
        $this->email = $email;
    }

    public function get_salario(){
        return($this->salario);
    }
    
    public function set_salario($salario){
        $this->salario = $salario;
    }
    
}

?>