<?php
require_once './Viewer.php';
require_once './Video.php';
class Visualizacao {
    private $espec;
    private $filme;
    
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarPorc($porc){
        $nova = 0;
        if ($porc <= 10) {
            $nova = 1;
        } elseif ($porc <= 20) {
            $nova = 3;
        } elseif ($porc <= 50) {
            $nova = 5;
        } elseif ($porc <= 80) {
            $nova = 8;
        } else {
            $nova = 10;
        }
        $this->filme->setAvaliacao($nova);
    }
    
    function __construct($espec, $filme) {
        $this->espec = $espec;
        $this->filme = $filme;
        $this->espec->setTotAssistido($this->espec->getTotAssistido() + 1);
        $this->filme->setViews($this->filme->getViews() + 1);
    }
    function getEspec() {
        return $this->espec;
    }

    function getFilme() {
        return $this->filme;
    }

    function setEspec($espec): void {
        $this->espec = $espec;
    }

    function setFilme($filme): void {
        $this->filme = $filme;
    }


}
