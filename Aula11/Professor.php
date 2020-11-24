<?php
require_once 'Pessoa.php';
class Professor extends Pessoa {
    private $especialidade, $salario;
    
    public function receberAum(){
        echo "{$this->getNome()} recebeu aumento.\n";
    }
    
    function getEspecialidade() {
        return $this->especialidade;
    }
    function getSalario() {
        return $this->salario;
    }
    function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }
    function setSalario($salario): void {
        $this->salario = $salario;
    }
}
