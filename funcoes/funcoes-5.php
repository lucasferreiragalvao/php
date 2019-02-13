<?php

 $a = 10;
 //Passagem de parâmetro por referência
 function trocaValor(&$b){
     $b += 50;

     return $b;
 }
 echo trocaValor($a);
 echo "<br>";
 echo trocaValor($a);
 echo "<br>";
 echo $a;
?>
