<?php
class Pessoa {
    // Atributos
    private $nome, $idade, $sexo;
    // Metodos Especiais
    function getNome() {
        return $this->nome;
    }
    function getIdade() {
        return $this->idade;
    }
    function getSexo() {
        return $this->sexo;
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
    // Metodos
    function fazerAniv(){
        $this->idade++;
    }
}
