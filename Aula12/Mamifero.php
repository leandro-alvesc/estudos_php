<?php
require_once 'Animal.php';
class Mamifero extends Animal {
    private $corPelo;
    
    public function alimentar() {
        echo "\nMamando";
    }

    public function emitirSom() {
        echo "\nRosnando";
    }

    public function locomover() {
        echo "\nCorrendo";
    }
    
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }

}
