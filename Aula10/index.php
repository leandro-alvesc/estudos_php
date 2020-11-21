<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            $p1 = new Pessoa();
            $p2 = new Aluno();
            $p3 = new Professor();
            $p4 = new Funcionario();
            
            $p1->setNome("João");
            $p1->setSexo("M");
            $p1->setIdade(15);
            
            $p2->setNome("Carlos");
            $p2->setIdade(18);
            $p2->setSexo("M");
            $p2->setMatr(1102);
            $p2->setCurso("Arquitetura e Urbanismo");
            $p2->fazerAniv();
            $p2->cancelarMatr();
            
            $p3->setNome("Maria");
            $p3->setIdade(35);
            $p3->setSexo("F");
            $p3->setEspecialidade("Conforto Ambiental");
            $p3->setSalario(3500.30);
            $p3->receberAum(500);
            
            $p4->setNome("Joana");
            $p4->setIdade(60);
            $p4->setSexo("F");
            $p4->setSetor("Diretoria");
            $p4->mudarTrabalho();
            
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
        ?>
        </pre>
    </body>
</html>
