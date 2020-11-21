<?php
require_once 'Publicacao.php';
class Livro implements Publicacao {
    private $titulo, $autor;
    private $totPag, $pagAtual;
    private $aberto;
    private $leitor;
    // Metodos Especiais
    function __construct($titulo, $autor, $totPag) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPag = $totPag;
        $this->aberto = false;
    }
    function getTitulo() {
        return $this->titulo;
    }
    function getAutor() {
        return $this->autor;
    }
    function getTotPag() {
        return $this->totPag;
    }
    function getPagAtual() {
        return $this->pagAtual;
    }
    function getAberto() {
        return $this->aberto;
    }
    function getLeitor() {
        return $this->leitor;
    }
    function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }
    function setAutor($autor): void {
        $this->autor = $autor;
    }
    function setTotPag($totPag): void {
        $this->totPag = $totPag;
    }
    function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }
    function setAberto($aberto): void {
        $this->aberto = $aberto;
    }
    function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }
    // Metodos Abstratos
    public function abrir() {
        if ($this->getLeitor()->getIdade() > 0){
            if ($this->getAberto()){
                echo "Livro já aberto.\n";
            } elseif ($this->getTotPag() > 5) {
                $this->setAberto(true);
                $this->setPagAtual(1);
                echo "Abrindo livro...\n";
        }
        } else {
            echo "Impossível abrir.\n";
        }
    }
    public function avancarPag() {
        if ($this->getLeitor()->getIdade() > 0 
                && $this->getPagAtual() < $this->getTotPag() 
                && $this->getAberto()){
            $this->setPagAtual($this->getPagAtual() + 1);
            echo "Avançando uma página...\n";
            echo "Está na página: {$this->getPagAtual()}\n";
        } else {
            echo "Impossível avançar.\n";
        }
    }
    public function definirLeitor($p) {
        $this->setLeitor($p);
    }
    public function fechar() {
        if ($this->getLeitor()->getIdade() > 0 && $this->getAberto()){
            $this->setAberto(false);
            $this->setPagAtual(0);
            echo "Fechando livro...\n";
        } else {
            echo "Livro já fechado.\n";
        }
    }
    public function folhear() {
        if ($this->getLeitor()->getIdade() > 0 && $this->getAberto()){
            $this->setPagAtual(rand(1, $this->getTotPag()));
            echo "Folheando... \n";
            echo "Está na página: {$this->getPagAtual()}\n";
        } else {
            echo "Impossível folhear... \n";
        }
    }
    public function voltarPag() {
        if ($this->getLeitor()->getIdade() > 0 && $this->getPagAtual() > 1){
            $this->setPagAtual($this->getPagAtual() - 1);
            echo "Voltando uma página...\n";
            echo "Está na página: {$this->getPagAtual()}\n";
        }
    }
    // Metodos
    public function detalhes(){
        $aberto = $this->getAberto()?"SIM":"NÃO";
        echo "---------------- DETALHES DO LIVRO ----------------\n";
        echo "Título:_____________ {$this->getTitulo()}\n";
        echo "Autor:______________ {$this->getAutor()}\n";
        echo "Páginas:____________ {$this->getTotPag()}\n";
        echo "Aberto:_____________ $aberto\n";
        echo "Leitor:_____________ {$this->getLeitor()->getNome()}\n";
        echo "Página Atual:_______ {$this->getPagAtual()}\n";
        echo "---------------------------------------------------\n";
    }
}
