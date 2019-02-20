<?php


    //Função para tratar os erros das aplicações
    function error_handler($code, $message, $file, $line){
        
        echo json_encode(array(
            "code" => $code,
            "message" => $message,
            "file" => $file,
            "line" => $line
        ));
    }
    //Setando quanl a função que trata os erros da aplicação
    set_error_handler("error_handler");

    $total = 100/0;
?>