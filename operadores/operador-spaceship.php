<?php
    //Operador diponível na versão PHP 7 ou superior

    $a = 35;
    $b = 60;
    
    //Utilizado para verificar qual o número maior ou se são iguais:
    //Caso o 1° número seja maior retornará 1
    //Caso sejam iguais retornará 0
    //Caso o 2º número seja maior retornará -1     
    var_dump($a <=> $b);
?>