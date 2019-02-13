<?php
    require_once("config.php");
    use Cliente\Cadastro;

    $cad = new Cadastro();
    $cad->setNome("Teste");
    $cad->setEmail("teste@gmail.com");
    $cad->setSenha("123456");

    echo $cad->registrarVenda();
?>