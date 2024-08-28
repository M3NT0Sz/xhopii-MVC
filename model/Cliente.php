<?php

class Cliente{

    protected $nome;

    protected $sobrenome;

    protected $cpf;

    protected $dataNascimento;

    protected $tele;

    protected $email;

    protected $senha;

    public function __construct($nome, $sobrenome, $cpf, $dataNascimento, $tele, $email, $senha){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->tele = $tele;
        $this->email = $email;
        $this->senha = $senha;
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

    public function get_tele(){
        return($this->tele);
    }
    
    public function set_tele($tele){
        $this->tele = $tele;
    }

    public function get_email(){
        return($this->email);
    }
    
    public function set_email($email){
        $this->email = $email;
    }

    public function get_senha(){
        return($this->senha);
    }
    
    public function set_senha($senha){
        $this->senha = $senha;
    }


    

}



?>