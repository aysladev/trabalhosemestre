<?php
class Produto
{
    private int $codigo;
    private string $nome;
    private float $valor;


    public function __construct($codigo, $nome, $valor)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
    }
    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function imprimir(): void {
        echo "Código: " . $this->getCodigo() . "<br>";
        echo "Nome: " . $this->getNome() . "<br>";
        echo "Valor: " . $this->getValor() . "<br>";
    }
}
