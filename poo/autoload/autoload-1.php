<?php
    //Função mágica que é chamada toda vez que da um new em determinada Classe
    function __autoload($nomeClass){
        require_once("$nomeClass.php");
    }
    $carro = new DelRey();
    $carro->acelerar(80);
?>