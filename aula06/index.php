<html>
    <head>
        <titles> Aula 06 - PHP </title>
    </head>
    <body>
        <h3> Operadores de atribuição </h3>
        <hr>
        <?php
            $a=2;
            $b=$a+5;
            echo"A é igual a $a e B é igual a $b.";
            echo"<br><br>";
            $a=$a+3;
            echo"Agora A é igual a $a.";
            echo"<br><br>";
            $b+=8;
            echo"Agora B é igual a $b.";
            echo"<br><br>";
            $b-=5;
            echo"Agora B é igual a $b.";

            echo"<hr>";
            $b*=2;
            echo"A multiplicação de B por 2 é igual a $b.";
            echo"<br><br>";
            $b/=10;
            echo"A divisão de B por 10 é igual a $b.";
            echo"<br><br>";
            $b%=3;
            echo"O módulo de B dividido por 3 é igual a $b.";
            echo"<br><br>";
            $b.=10;
            echo"A concatenação de B com 10 fica igual a $b.";

        ?>
    </body>
</html>
