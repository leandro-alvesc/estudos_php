<?php
require_once 'Animal.php';
class Peixe extends Animal {
    private $corEscama;
    
    function soltarBolha(){
        echo "\nGlub glub";
    }
    
    public function alimentar() {
        echo "\nComendo coisas";
    }

    public function emitirSom() {
        echo "\n...";
    }

    public function locomover() {
        echo "\nNadando";
    }

    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
