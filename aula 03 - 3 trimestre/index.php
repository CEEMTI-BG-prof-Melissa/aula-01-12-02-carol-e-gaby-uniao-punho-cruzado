<html>
    <head>
        <title>  Aula 03 - PHP </title>
    </head>

    <body>
        <?php
            $nome1="gabrielly";
            $nome2="carolina";

            $n1=10;
            $n2=2;

            $soma=$n1+$n2;

            echo "meu nome é ".$nome1 ." e minha dupla é " .$nome2;
            echo "<br>meu nome é $nome1 e minha dupla é $nome2";

            echo "<br><br>a soma de $n1 com $n2 é igual a: $soma.";

            echo"<br><br>a subtração dos número $n1 e $n2 é igual a: " .($n1-$n2) .".";

            echo"<br><br>a multiplicação dos números $n1 e $n2 é igual a: " .($n1*$n2) .".";

            echo"<br><br>a divisão dos números $n1 e $n2 é igual a: " .($n1/$n2) .".";

            echo"<br><br>o resto da divião dos números $n1 e $n2 é igual a: " .($n1%$n2) .".";


        ?>
    </body>
</html>
