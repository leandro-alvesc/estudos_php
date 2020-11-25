<?php
require_once 'Lobo.php';
class Cachorro extends Lobo {
    public function emitirSom() {
        echo "\nAu! Au!";
    }
    
    function reagirFrase($frase){
        if ($frase == "Cheguei" || $frase == "Olá") {
            echo "\nFrase: $frase";
            echo "\nReação: Abanar e Latir\n";
        } else {
            echo "\nFrase: $frase";
            echo "\nReação: Rosnar\n";
        }
    }
    function reagirHora($hora, $min){
        if ($hora < 12) {
            echo "\nHora: $hora:$min";
            echo "\nReação: Abanar\n";
        } elseif ($hora >= 18){
            echo "\nHora: $hora:$min";
            echo "\nReação: Ignorar\n";
        } else {
            echo "\nHora: $hora:$min";
            echo "\nReação: Abanar e Latir\n";
        }
    }
    function reagirDono($dono){
        if ($dono) {
            echo "\nÉ dono? SIM";
            echo "\nReação: Abanar\n";
        } else {
            echo "\nÉ dono? NÃO";
            echo "\nReação: Rosnar e Latir\n";
        }
    }
    function reagirIdPeso($idade, $peso){
        if ($idade < 5) {
            if ($peso < 10) {
                echo "\n$idade anos e $peso Kg";
                echo "\nReação: Abanar\n";
            } else {
                echo "\n$idade anos e $peso Kg";
                echo "\nReação: Latir\n";
            }
        } else {
            if ($peso < 10) {
                echo "\n$idade anos e $peso Kg";
                echo "\nReação: Rosnar\n";
            } else {
                echo "\n$idade anos e $peso Kg";
                echo "\nReação: Ignorar\n";
            }
        }
    }
}
