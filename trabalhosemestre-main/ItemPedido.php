<?php
require_once "Produto.php";
class ItemPedido {
    private Produto $item;
    private int $quantidade;
    private float $valor;

    public function __construct( Produto $item, int $quantidade){
        $this->item = $item;
        $this->quantidade = $quantidade;
        $this->valor = $item->getValor() * $quantidade; //calcula o valor total, pegando o valor la em baixo direto de uma vez aq
    }

    public function getItem(): Produto{
        return $this->item;
    }
    public function setItem(Produto $item){
        $this->item = $item;
    }
    public function getQuantidade(): int {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    public function getValor(): float {
        return $this->valor;
    }
    public function setValor($valor){
        $this->valor = $valor;
    }

    public function imprimir(){
        echo "Produto: " . $this->item->getNome() . "<br>";
        echo "Quantidade: " . $this->quantidade . "<br>";
        echo "Valor total: " . $this->valor . "<br>";
    }   
}