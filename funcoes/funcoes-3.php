<?php
   //Os parametros obrigatórios da função sempre tem que estar a esquerda
   function ola($texto, $periodo = "Bom dia"){
       return "Olá $texto! $periodo !<br>";
   }

   echo ola("Mundo");
   echo ola("", "Boa noite");
   echo ola("Teste", "Boa tarde");
   echo ola("Lucas", "");
?>