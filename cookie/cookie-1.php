<?php
    $data = array(
        "empresa" => "Teste 1"
    );

    setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

    echo "OK";
?>