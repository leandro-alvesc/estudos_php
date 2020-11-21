<?php
class Pessoa {
    // Atributos
    private $nome, $sexo;
    private $idade;
    // Métodos Especiais
    function __construct($nome, $sexo, $idade) {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
    }
    function getNome() {
        return $this->nome;
    }
    function getSexo() {
        return $this->sexo;
    }
    function getIdade() {
        return $this->idade;
    }
    function setNome($nome): void {
        $this->nome = $nome;
    }
    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
    function setIdade($idade): void {
        $this->idade = $idade;
    }
    // Métodos
    function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
        echo "Parabéns, você está com $this->getIdade() anos!";
    }
    function dados(){
        echo "Nome:_______ {$this->getNome()}\n";
        echo "Idade:______ {$this->getIdade()}\n";
        echo "Sexo:_______ {$this->getSexo()}\n";
    }
}
