<?php
    
    $nome = "teste testando";
    //Letra Maiscula
    $nome = strtoupper($nome);

    echo $nome;
    //Letra Minuscula
    $nome = strtolower($nome);

    echo "<br>";

    echo $nome;

    //Deixa a primeira letra da primeira palavra em Maisculo
    $nome = ucfirst($nome);

    echo "<br>";

    echo $nome;

    //Deixa a primeira letra de cada palavra em Maisculo
    $nome = ucwords($nome);

    echo "<br>";

    echo $nome;
?>