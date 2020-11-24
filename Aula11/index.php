<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Bolsista.php';
            
            $visitante = new Visitante();
            $visitante->setNome("João");
            $visitante->setIdade(25);
            $visitante->setSexo("M");
            $visitante->fazerAniv();
            print_r($visitante);
            
            $aluno = new Aluno();
            $aluno->setNome("Joaquim");
            $aluno->setIdade(26);
            $aluno->setSexo("M");
            $aluno->setMatricula(1515);
            $aluno->setCurso("ADS");
            $aluno->pagarMensal();
            print_r($aluno);
            
            $aluno2 = new Bolsista();
            $aluno2->setNome("Catarina");
            $aluno2->setIdade(27);
            $aluno2->setSexo("F");
            $aluno2->setCurso("CdC");
            $aluno2->setMatricula(5024);
            $aluno2->setBolsa(70);
            $aluno2->pagarMensal();
            $aluno2->renovarBolsa();
            print_r($aluno2);
            
            $professor = new Professor();
            $professor->setNome("Joana");
            $professor->setIdade(30);
            $professor->setSexo("F");
            $professor->setEspecialidade("Segurança da Informação");
            $professor->setSalario(3500);
            $professor->receberAum();
            print_r($professor);
        ?>
        </pre>
    </body>
</html>
