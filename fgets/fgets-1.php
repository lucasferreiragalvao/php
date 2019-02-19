<?php
    $filename = "usuarios.csv";

    if(file_exists($filename)){
        //Fgets le linha por linha do arquivo

        //Abrindo arquivo no modo leitura
        $file = fopen($filename , "r");

        $headers = explode(",",fgets($file));

        //Se contém algo na linha retorna o contéudo
        //Se não retorna false

        $data = array();
        while($row = fgets($file)){

            $rowData = explode(",",$row);
            $linha = array();

            for($i = 0; $i< count($headers); $i++){

                $linha[$headers[$i]] = $rowData[$i];

            }
            array_push($data,$linha);
        }

        fclose($file);

        echo json_encode($data);
    }
?>