<?php
    $conn = new mysqli("localhost","root","password","dbphp7");

    if($conn->connect_error){
        echo "ERROR :". $conn->connect_error;
    }

    $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

    $data = array();
    //Fetch Array retorna as informações se caso tiver
    //do Select feito
    //CONSTANTE MYSQLI_ASSOC utilizado para trazer apenas o mome da Coluna
    //Sem os indices das colunas
    while($row = $result->fetch_assoc()){
        array_push($data,$row);
    }

    echo json_encode($data);
?>