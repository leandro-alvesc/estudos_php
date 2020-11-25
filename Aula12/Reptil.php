<?php
require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;
    
    public function alimentar() {
        echo "\nComendo insetos";
    }

    public function emitirSom() {
        echo "\nGrunhindo";
    }

    public function locomover() {
        echo "\nRastejando";
    }

    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
