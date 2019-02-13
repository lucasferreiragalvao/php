<?php

    $nome = "Teste";

    function teste(){
        //Utilizada para dizer utilizar a váriavel $nome que está fora do escopo
        global $nome;
        echo $nome."</br>";
    }

    function teste2(){
        $nome = "Teste 2";
        echo $nome ." agora no teste2";
    }

    teste();

    teste2();
?>