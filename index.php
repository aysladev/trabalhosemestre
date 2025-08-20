<?php
require_once "Pessoa.php";
require_once "Data.php";
require_once "Cliente.php";
require_once "Vendedor.php";
require_once "Produto.php";
//pessoa cliente teste
$data1 = new Data(12, 02, 2025);
$data1->imprimirDataBanco();
echo "</br>";
echo $data1;
echo "<hr>";
$pessoa1 = new Pessoa("Aysla", "12345678900", "F", $data1);
$pessoa1->imprimir();
echo "<hr>";
$cliente1 = new Cliente("Aysla", "12345678900", "F", $data1, new DateTime(), "Nenhuma");
$cliente1->imprimir();
//pessoa vendedor teste
echo "</br>";
echo "<hr>";
$data2 = new Data(22, 12, 2000);
$data2->imprimirDataBanco();
echo "</br>";
echo $data1;
echo "<hr>";
$pessoa2 = new Pessoa("Rogério", "09876543211", "M", $data2);
$pessoa2->imprimir();
echo "<hr>";
$vendedor2 = new Vendedor("Rogério", "09876543211", "M", $data2, 123478.99, 230);
$vendedor2->imprimir();
//produto teste
echo "</br>";
echo "<hr>";
$produto1 = new Produto(1234, "Pão", 12.00);
$produto1->imprimir();