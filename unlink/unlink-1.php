<?php

    $file = fopen("teste.txt","w+");
    fclose($file);

    //Removendo arquivo
    unlink("teste.txt");
    echo "Arquivo removido com sucesso!";
?>