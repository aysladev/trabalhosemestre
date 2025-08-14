<?php
require_once "Data.php";
class Pessoa
{
    private string $nome;
    private string $cpf;
    private string $sexo;
    private Data $dataNascimento;
    public function __construct($nome, $cpf, $sexo, $dataNascimento)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->dataNascimento = $dataNascimento;
    }
public function getNome(){
    return $this->nome;
}

public function setNome($nome){
    $this->nome = $nome;
}

public function setCpf(){
    return $this->cpf;
}

public function getCpf($cpf){
    $this->cpf = $cpf;
}

public function getSexo(){
    return $this->sexo;
}

public function setSexo($sexo){
    $this->sexo = $sexo;
}
public function getDataNascimento(){
    return $this->dataNascimento;
}

public function setDataNascimento($dataNascimento){
    $this->dataNascimento = $dataNascimento;
}
}