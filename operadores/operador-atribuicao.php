<?php

    //////// OPERADORES DE STRING

    //Operador de atribuição
    $hello = "Hello World!!!";

    ///Operador de concatenação
    $concatenacao = $hello . " mais alguma coisa";
    $hello .= " Curso!!!";
    ///

    //echo $hello;

    /////////////////////////////////

    $valorTotal = 0;

    $valorTotal +=100;
    $valorTotal +=25;

    //Desconto por porcentagem
    //Nesse caso e informado que se deseja apenas 90% do valor
    $valorTotal *=.9;

    echo $valorTotal;


?>