<?php
  
  $total =150;
  $desconto = 0.9;
  //O do while mesmo sendo uma condição false e executada pelo menos uma vez
  do{
      $total *= $desconto;
  }while($total > 100);

  echo $total;
?>