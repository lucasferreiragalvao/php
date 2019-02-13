<?php

    $pessoas = array();

    array_push($pessoas,array(
        'nome' => 'Pessoa 1',
        'idade' => 20
    ));

    array_push($pessoas,array(
        'nome' => 'Pessoa 2',
        'idade' => 30
    ));

    echo json_encode($pessoas);
?>