<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projeto Livro</title>
    </head>
    <body>
        <h1>Projeto Livro</h1>
        <pre>
        <?php
            require_once 'Livro.php';
            require_once 'Pessoa.php';
            require_once 'Publicacao.php';
            
            // Instanciar Pessoa
            $pessoa[0] = new Pessoa("Ikeda", "M", 24);
            
            // Instanciar Livro
            $livro[0] = new Livro("Sandman", "Neil Gaiman", 550);
            
            // @todo formatar texto
            echo "<p>";
            $pessoa[0]->dados();
            $livro[0]->definirLeitor($pessoa[0]);
            $livro[0]->abrir();
            $livro[0]->fechar();
            $livro[0]->folhear();
            $livro[0]->avancarPag();
            $livro[0]->voltarPag();
            $livro[0]->detalhes();
            echo "</p>";
        ?>
        </pre>
    </body>
</html>
