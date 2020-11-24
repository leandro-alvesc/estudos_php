<?php
abstract class Pessoa {
    private $nome, $idade, $sexo;
    
    public function fazerAniv(){
        $this->idade ++;
    }
    
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
}
