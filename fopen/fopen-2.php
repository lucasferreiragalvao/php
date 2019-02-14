<?php
    require_once("config.php");

    $usuarios = Usuario::getList();

    $headers = array();

    foreach($usuarios[0] as $key => $value){
        array_push($headers,ucfirst($key));
    }

    $file = fopen("usuarios.csv","w+");
    fwrite($file,implode(",",$headers) ."\r\n");

    foreach($usuarios as $row){
        $data = array();

        foreach($row as $key => $value){
            array_push($data,$value);
        }
        fwrite($file,implode(",",$data). "\r\n");
    }
    fclose($file);

?>