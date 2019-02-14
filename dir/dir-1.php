<?php

    $name = "images";

    //is_dir verifica se o diretório existe
    //mkdir cria o diretório
    if(!is_dir($name)){
        mkdir($name);
        echo "Diretório $name criado com sucesso";
    }
    else{
        rmdir($name);
        echo "Diretório $name já existente. O mesmo foi removido";
    }
?>