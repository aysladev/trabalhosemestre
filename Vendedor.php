<?php
require_once "Pessoa.php";
require_once "Data.php";
class Vendedor extends Pessoa {
    private float $salario;
    private float $comissao;
    public function __construct($nome, $cpf, $sexo, $dataNascimento, $salario, $comissao)
    {
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);
        $this->salario = $salario;
        $this->comissao = $comissao;
    }
    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    public function getComissao()
    {
        return $this->comissao;
    }

    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }
    public function imprimir(): void
    {
        parent::imprimir();
        echo "Salario: " . $this->getSalario() . "<br>";
        echo "Comissão: " . $this->getComissao() . "<br>";
    }
}