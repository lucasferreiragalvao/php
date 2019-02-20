<?php
    //Configurando quais erros devem ser exibidos
    //Mostrando todos os Erros e não os Notice
    error_reporting(E_ALL & ~E_NOTICE);

    $nome = $_GET["nome"];
    echo $nome;
?>