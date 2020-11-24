<?php
require_once 'Aluno.php';
final class Bolsista extends Aluno {
    private $bolsa;
    
    public final function pagarMensal(){
        echo "Aluno {$this->getNome()} tem bolsa de {$this->getBolsa()}%.\n"
        . "Pagando mensalidade...\n";
    }
    public function renovarBolsa(){
        echo "Renovando bolsa de {$this->getNome()}.\n";
    }
    
    function getBolsa() {
        return $this->bolsa;
    }
    function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }
}
