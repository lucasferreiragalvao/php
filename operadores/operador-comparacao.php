<?php

    $a = 55.0;
    $b = 55;

    //Comparar se é maior
    var_dump($a > $b);

    echo "<br>";
    //Comparar se é menor
    var_dump($a < $b);

    echo "<br>";
    //Compara apenas se os valores são iguais, e não o tipo
    var_dump($a == $b);

    echo "<br>";
    //Compara os valores de identidades(valores e tipos)
    var_dump($a === $b);


    echo "<br>";
    //Compara se é diferente
    var_dump($a != $b);

    echo "<br>";
    //Compara se é diferente as identidades(valores e tipos)
    var_dump($a !== $b);
?>