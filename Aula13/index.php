<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            // Como o PHP não possui suporte a Sobrecarga, é mais fácil criar
            // métodos diferentes
            // Programa principal
            require_once 'Cachorro.php';
            require_once 'Lobo.php';
            require_once 'Mamifero.php';
            $c = new Cachorro();
            $c->emitirSom();
            $c->reagirFrase("Olá");
            $c->reagirFrase("Feio!");
            $c->reagirHora(11, 45);
            $c->reagirHora(21, 00);
            $c->reagirDono(true);
            $c->reagirDono(false);
            $c->reagirIdPeso(2, 12.5);
            $c->reagirIdPeso(17, 4.5);
            
        ?>
        </pre>
    </body>
</html>
