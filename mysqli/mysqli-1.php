<?php
    $conn = new mysqli("localhost","root","password","dbphp7");

    if($conn->connect_error){
        echo "ERROR :". $conn->connect_error;
    }

    //Preparando a query a se executada no banco de dados
    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha)
    VALUES (?,?)");

    $stmt->bind_param("ss",$login,$pass);
    //Não importa as variáveis estarem depois do bind_param
    //Pois so iŕa procurá-las assim que executar o comando
    $login = "user";
    $pass = "123456";

    $stmt->execute();

    $login = "root";
    $pass ="456789";
    $stmt->execute();

?>