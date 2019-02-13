<?php
  //E considerado uma sub-rotina pois não há retorno
  //E considerado função o que tem retorno 
  function ola(){

    return  "Olá Mundo!<br>";
  }
  echo ola();
  $frase = ola();

  echo  strlen($frase);
?>