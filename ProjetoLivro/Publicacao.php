<?php
interface Publicacao {
    public function abrir();
    public function fechar();
    public function folhear();
    public function avancarPag();
    public function voltarPag();
    public function definirLeitor($p);
}
