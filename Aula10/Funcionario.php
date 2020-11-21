<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
    // Atributos
    private $setor, $trabalhando;
    // Metodos Especiais
    function getSetor() {
        return $this->setor;
    }
    function getTrabalhando() {
        return $this->trabalhando;
    }
    function setSetor($setor): void {
        $this->setor = $setor;
    }
    function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }
    // Metodos
    function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }
}
