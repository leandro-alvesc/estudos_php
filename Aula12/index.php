<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            
            $m = new Mamifero();
            $r = new Reptil();
            $p = new Peixe();
            $a = new Ave();
            
            $m->setCorPelo("Marrom");
            $m->setIdade(2);
            $m->setPeso(5.54);
            $m->setMembros(4);
            
            print_r($m);
            
            $m->locomover();
            $r->locomover();
            $p->locomover();
            $a->locomover();
        ?>
        </pre>
    </body>
</html>
