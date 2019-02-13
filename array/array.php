<?php
  
  //Vetores
  $frutas = array("laranja","abacaxi","melancia");
  echo "<h1>Vetores</h1>";
  echo "<br>";
  print_r($frutas);
  echo "<br>";

  //Array Bidimensionais
  $carros[0][0] = "GM";
  $carros[0][1] = "Cobalt";
  $carros[0][2] = "Onix";
  $carros[0][3] = "Camaro";

  $carros[1][0] = "Ford";
  $carros[1][1] = "Fiesta";
  $carros[1][2] = "Fusion";
  $carros[1][3] = "Eco Sport";
  
  echo "<h1>Arrays Bidimensonais</h1>";
  echo "<br>";
  echo "<b>Exemplo 1</b>";
  echo "<br>";
  print_r($carros);
  echo "<br>";
  echo $carros[0][3];
  echo "<br>";
  //Retorna a ultima posição do array informado
  echo end($carros[1]);

  $pessoas = array();

    array_push($pessoas,array(
        'nome' => 'Pessoa 1',
        'idade' => 20
    ));

    array_push($pessoas,array(
        'nome' => 'Pessoa 2',
        'idade' => 30
    ));

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<b> Exemplo 2</b>";
    echo "<br>";
    print_r($pessoas[0]['nome']);

  ///////////////////////////////////////////////////

  

?>