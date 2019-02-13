<?php

    function ola(){
        //Retorna todos os argumentos passados na função
        $argumentos = func_get_args();
        return $argumentos;
    }

    var_dump(ola("Bom dia", 10));
?>