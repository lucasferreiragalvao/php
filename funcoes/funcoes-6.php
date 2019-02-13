<?php
  $pessoas = array(
    'nome' => 'Lucas',
    'idade' => 24
  );
  //Passagem de por referência em um foreach
  foreach($pessoas as &$value){

    if(gettype($value) === 'integer') $value += 10;
    echo $value."<br>";
  }

  print_r($pessoas);
?>