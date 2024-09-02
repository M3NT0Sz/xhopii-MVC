<?php

class Produto
{

    //Atributos
    protected $nome;
    protected $fabricante;
    protected $descricao;
    protected $valor;

    //Construtor
    public function __construct($nome, $fabricante, $descricao, $valor)
    {
        $this->nome = $nome;
        $this->fabricante = $fabricante;
        $this->descricao = $descricao;
        $this->valor = $valor;
    }

    //Getter e Setter
    public function get_Nome()
    {
        return($this->nome);
    }

    public function set_Nome($nome)
    {
        $this->nome = $nome;
    }

    public function get_Fabricante()
    {
        return($this->fabricante);
    }

    public function set_Fabricante($fabricante)
    {
        $this->fabricante = $fabricante;
    }

    public function get_Descricao()
    {
        return($this->descricao);
    }

    public function set_Descricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function get_Valor()
    {
        return($this->valor);
    }

    public function set_Valor($valor)
    {
        $this->valor = $valor;
    }
    
    //Métodos
    public function aplicarCupom($cupomTaxa)
    {
        $valorDesconto = ($this->valor * $cupomTaxa) / 100;
        $this->valor = $this->valor - $valorDesconto;
    }
}
