<html>
    <head>
            <title> Aula 04 </title>
    </head>
    <body>
        <?php
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];

            echo "a soma dos números $n1 e $n2 é:  ".($n1 + $n2);
            echo "<br>a subtração dos números $n1 e $n2 é:  ".($n1 - $n2);
            echo "<br>a multiplicação dos números $n1 e $n2 é:  ".($n1 * $n2);
            echo "<br>a divisão dos números $n1 e $n2 é:  ".($n1 / $n2);
            echo "<br>o resto da divisão dos números $n1 e $n2 é:  ".($n1 % $n2);

        ?>
    </body>
</html>
