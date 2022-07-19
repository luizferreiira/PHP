<?php
    //MANIPULAÇÃO DE STRING


    //strlen()
    $palavra = "um, dois, tres indiozinhos...";
    echo strlen($palavra); //exibe a quantidade de caracteres
    print "<br>";

    //str_word_count()
    echo str_word_count($palavra); //exibe a quantidade de palavras numa frase
    print "<br>";

    //strrev()
    echo strrev('luiz');
    print "<br>";

    //strpos()
    echo strpos("Oi, tudo bem?", "tudo"); //retorna a posição da palavra "tudo";
    print "<br>";

    //str_replace()
    echo str_replace("indiozinhos","luizinhos", $palavra);
?>