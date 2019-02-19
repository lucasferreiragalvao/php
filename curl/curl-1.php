<?php
    $cep = "01310100";
    $link = "https://viacep.com.br/ws/$cep/json/";

    $ch = curl_init($link);
    //Opção para determinar se você quer um resposta da solicitação
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    //Opção para desativar a verificação do SSL
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($response, true);

    print_r($data);
?>