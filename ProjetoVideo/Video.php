<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    // Atributos
    private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;
    // Construtor
    function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }
    // Getters e Setters
    function getTitulo() {
        return $this->titulo;
    }
    function getAvaliacao() {
        return $this->avaliacao;
    }
    function getViews() {
        return $this->views;
    }
    function getCurtidas() {
        return $this->curtidas;
    }
    function getReproduzindo() {
        return $this->reproduzindo;
    }
    function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }
    function setAvaliacao($avaliacao): void {
        $this->avaliacao = $avaliacao;
    }
    function setViews($views): void {
        $this->views = $views;
    }
    function setCurtidas($curtidas): void {
        $this->curtidas = $curtidas;
    }
    function setReproduzindo($reproduzindo): void {
        $this->reproduzindo = $reproduzindo;
    }
    // Metodos Superclasse
    public function play(){
        $this->reproduzindo = true;
    }
    public function pause(){
        $this->reproduzindo = false;
    }
    public function like(){
        $this->curtidas++;
    }
}
