<?php
    //Manipulação de números

    $valor = 4 * 2.5;
    $valor_convertido = (int) $valor; //convertendo o valor da variável para int
    var_dump($valor_convertido);
    print "<br>";


    $n1 = 100;
    $n2 = 5.75;
    $n3 = "teste";
    var_dump(is_int($n1)); //is_numeric()
?>