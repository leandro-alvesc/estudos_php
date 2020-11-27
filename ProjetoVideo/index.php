<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'Viewer.php';
            $v[0] = new Video("Tutorial 1");
            $v[1] = new Video("Aula 01");
            $v[2] = new Video("Gatinhos brincando");
            
            $vw[0] = new Viewer("José", 22, "M", "ze132");
            $vw[1] = new Viewer("Natalia", 27, "F", "natz55");
            
            print_r($v);
            print_r($vw);
        ?>
        </pre>
    </body>
</html>
