<?php
   
   for($i=0; $i < 1000; $i +=5){
     //Se o contador atender ao if os números serão pulados
     if($i >= 200 && $i <= 800) continue;
     //Sai do comando de repetição e continua executando o script
     if($i === 900) break;

     echo $i . "<br>";
   }

?>