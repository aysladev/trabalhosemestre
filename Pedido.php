<?php
require_once "Data.php";
require_once "ItemPedido.php";

class Pedido
{   
    private Data $data;
    private array $listaItens;
    private Cliente $cliente;
    private Vendedor $vendedor;
    private float $valorTotal;
    private float $valorComissao;
    
    public function __construct(Data $data, array $listaItens, Cliente $cliente, float $valorTotal, float $valorComissao)
    {
        $this->data = $data;
        $this->listaItens = $listaItens;
        $this->cliente = $cliente;
        $this->valorTotal = $valorTotal;
        $this->valorComissao = $valorComissao;
    }

    public function getData(): Data
    {
        return $this->data;
    }

    public function setData(Data $data): void
    {
        $this->data = $data;
    }

    public function getListaItens(): array
    {
        return $this->listaItens;
    }

    public function setListaItens(array $listaItens): void
    {
        $this->listaItens = $listaItens;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function getVendedor(): Vendedor
    {
        return $this->vendedor;
    }

    public function setVendedor(Vendedor $vendedor): void
    {
        $this->vendedor = $vendedor;
    }

    public function getValorTotal(): float
    {
        return $this->valorTotal;
    }

    public function setValorTotal(float $valorTotal): void
    {
        $this->valorTotal = $valorTotal;
    }

    public function getValorComissao(): float
    {
        return $this->valorComissao;
    }

    public function setValorComissao(float $valorComissao): void
    {
        $this->valorComissao = $valorComissao;
    }

    public function imprimirPedidoCompleto(): void
    {
        echo "Data: " . $this->data . "\n";
        $this->cliente->imprimir();
        $this->vendedor->imprimir();
        echo "Valor total: " . $this->valorTotal . "\n";
        echo "Valor comissão: " . $this->valorComissao . "\n";

        foreach ($this->listaItens as $itempedido) {
            echo "Item pedido: \n";
            echo "Quantidade: " . $itempedido->getQuantidade() . "\n";
            echo "Valor item pedido: " . $itempedido->getValor() . "\n";
            $itempedido->getItem()->imprimir();
        }
    }
}
