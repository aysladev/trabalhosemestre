<?php
require_once "Data.php";
class Pessoa
{   
    private Data $data;
    private ItemPedido $listaItens;
    private Cliente $cliente;
    private Vendedor $vendedor;
    private float $valorTotal;
    private float $valorComissao;
    
    public function __construct($nome, $cpf, $sexo, $dataNascimento)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->dataNascimento = $dataNascimento;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
    public function imprimir(): void
    {
        echo "CPF: {$this->cpf}<br>";
        echo "Nome: {$this->nome}<br>";
        echo "Sexo: {$this->sexo}<br>";
        echo "Data de Nascimento: {$this->dataNascimento}<br>";
    }
}
