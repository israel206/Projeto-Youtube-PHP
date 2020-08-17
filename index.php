<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Video.php';
            require_once 'AcoesVideo.php';
            require_once 'Cliente.php';
            require_once 'Visualizacao.php';
            
            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");
            
            $g[0] = new Cliente("Jubileu", 22, "M", "Juda");
            $g[1] = new Cliente("Creusa", 12, "F", "Creuzita");
            
            //agregação
            $vis[0] = new Visualizacao($g[0], $v[2]); //Jubileu assiste HTML5
            $vis[1] = new Visualizacao($g[0], $v[1]); //Jubileu assiste PHP
            
            $vis[0]->avaliar();
            $vis[1]->avaliarPorc(85);
            
            print_r($vis);
            //print_r($g);
        ?>
        </pre>>
    </body>
</html>
