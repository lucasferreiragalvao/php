<?php

    function trataNome($nome){

        if(!$nome){
            throw new Exception("Nenhum nome foi informado");
        }

        echo ucfirst($nome)."<br>";
    }

    try{
        trataNome("Lucas");
        trataNome("");
    }catch(Exception $e){

        echo $e->getMessage();
    }finally{

        echo "Executou o bloco Try";
    }
?>