<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa {
    // Atributos
    private $matr, $curso;
    // Metodos Especiais
    function getMatr() {
        return $this->matr;
    }
    function getCurso() {
        return $this->curso;
    }
    function setMatr($matr): void {
        $this->matr = $matr;
    }
    function setCurso($curso): void {
        $this->curso = $curso;
    }
    // Metodos
    function cancelarMatr() {
        echo "\nCancelando matrícula... ";
    }
}
