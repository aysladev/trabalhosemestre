<?php
require_once "Produto.php";
class ItemPedido extends Produto {
    private Produto $item;
    private int $quantidade;
    private float $valor;
    public function __construct($codigo, $nome, $valor, $item, $quantidade)
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