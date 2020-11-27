<?php
require_once 'Pessoa.php';
class Viewer extends Pessoa {
    // Atributos
    private $login, $totAssistido;
    // Construtor
    function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }
    // Getters e Setters
    function getLogin() {
        return $this->login;
    }
    function getTotAssistido() {
        return $this->totAssistido;
    }
    function setLogin($login): void {
        $this->login = $login;
    }
    function setTotAssistido($totAssistido): void {
        $this->totAssistido = $totAssistido;
    }
    // Metodos
    function viuMaisUm(){
        $this->totAssistido++;
    }
}
