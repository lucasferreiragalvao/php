<?php

  $json = '[{"nome":"Pessoa 1","idade":20},{"nome":"Pessoa 2","idade":30}]';
  //O parâmetro true e para que tranforme em Array
  //Sem o parâmetro tranformará em Objetos
  $data = json_decode($json,true);
  var_dump($data);
?>