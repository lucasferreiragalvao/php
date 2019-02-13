<?php
   //Operador diponível na versão PHP 7 ou superior
   $a = NULL;
   $b = 8;
   $c = 10;
   
   //Usado para ignorar os valores NULOS e mostra somente o que tem valor
   echo $a ?? $b ?? $c;
?>