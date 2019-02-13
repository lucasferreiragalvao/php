<?php
    //Diponível a partir da versão 7 do PHP 
    //Conversão do tipo no retorno
    function soma(float ...$valores):float{
        
        return array_sum($valores);
    }

    echo var_dump(soma(2,2));
    echo "<br>";
    echo soma(25,33);
    echo "<br>";
    echo soma(1.5,3.2);
    echo "<br>";

?>