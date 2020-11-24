<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    private $matricula, $curso;
    
    public function pagarMensal(){
        echo "Pagando mensalidade de {$this->getNome()}\n";
    }
    
    function getMatricula() {
        return $this->matricula;
    }
    function getCurso() {
        return $this->curso;
    }
    function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }
    function setCurso($curso): void {
        $this->curso = $curso;
    }
}
