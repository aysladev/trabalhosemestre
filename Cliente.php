<?php
require_once "Pessoa.php";
require_once "Data.php";
class Cliente extends Pessoa {
    private DateTime $dataCadastro;
    private string $preferencias;
    public function __construct($nome, $cpf, $sexo, $dataNascimento, DateTime $dataCadastro, $preferencias)
    {
        parent::__construct($nome, $cpf, $sexo, $dataNascimento);
        $this->dataCadastro = $dataCadastro;
        $this->preferencias = $preferencias;
    }
    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
    }

    public function getPreferencias()
    {
        return $this->preferencias;
    }

    public function setPreferencias($preferencias)
    {
        $this->preferencias = $preferencias;
    }
    public function imprimir(): void
    {
        parent::imprimir();
        echo "Data de Cadastro: " . $this->dataCadastro->format("d/m/Y") . "<br>";
        echo "Preferências: " . $this->getPreferencias() . "<br>";
    }
}