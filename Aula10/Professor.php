<?php
require_once 'Pessoa.php';
class Professor extends Pessoa {
    // Atributos
    private $especialidade, $salario;
    // Metodos Especiais
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
    // Metodos
    function receberAum($aum) {
        $this->salario += $aum;
    }
}
