<?php
class Pessoa {
    // Atributos
    protected $nome, $idade, $sexo, $exp;
    // Constructor
    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->exp = 0;
    }
    // Getters e Setters
    function getNome() {
        return $this->nome;
    }
    function getIdade() {
        return $this->idade;
    }
    function getSexo() {
        return $this->sexo;
    }
    function getExp() {
        return $this->exp;
    }
    function setNome($nome): void {
        $this->nome = $nome;
    }
    function setIdade($idade): void {
        $this->idade = $idade;
    }
    function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
    function setExp($exp): void {
        $this->exp = $exp;
    }
    // Metodos
    protected function ganharExp($n){
        $this->exp += $n;
    }

}
