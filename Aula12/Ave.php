<?php
require_once 'Animal.php';
class Ave extends Animal {
    private $corPena;
    
    function fazerNinho(){
        echo "\nFazendo ninho";
    }
    
    public function alimentar() {
        echo "\nComendo minhocas";
    }

    public function emitirSom() {
        echo "\nCantando";
    }

    public function locomover() {
        echo "\nVoando";
    }
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }
}
