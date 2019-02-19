<?php

    if(isset($_COOKIE["NOME_DO_COOKIE"])){

        $cookie = json_decode($_COOKIE["NOME_DO_COOKIE"],true);
        echo $cookie["empresa"];
    }
?>