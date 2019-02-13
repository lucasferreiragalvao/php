<?php

  function test($callback){

    //Processo lento

    $callback();
  }
  //Função Anônima
  test(function (){
    echo "Terminou";
  });
?>