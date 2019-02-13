<?php

 //Pega o Timestamp de determinada data
 //$ts = strtotime("1994-11-23");
 //Aceita expressões
 $ts = strtotime("+1 week");
 //Converte o timestamp pego em data
 echo date("l, d/m/Y", $ts);

?>