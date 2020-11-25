<?php
abstract class Animal {
    protected $peso, $idade, $membros;
    
    abstract function locomover();
    abstract function alimentar();
    abstract function emitirSom();
    
    function getPeso() {
        return $this->peso;
    }

    function getIdade() {
        return $this->idade;
    }

    function getMembros() {
        return $this->membros;
    }

    function setPeso($peso): void {
        $this->peso = $peso;
    }

    function setIdade($idade): void {
        $this->idade = $idade;
    }

    function setMembros($membros): void {
        $this->membros = $membros;
    }

}
