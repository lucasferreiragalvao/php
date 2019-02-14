<?php
    //Scaneia todos os arquivos de determinado diretório
    $images = scandir("images");

    $data = array();
    foreach($images as $img){
        //in_array faz uma busca no array
        if(!in_array($img,array(".",".."))){
            $filename = "images".DIRECTORY_SEPARATOR.$img;
            //pathinfo pega informações de determinado arquivo
            $info = pathinfo($filename);
            //filesize pega o tamanho do arquivo em bytes
            $info["size"] = filesize($filename);
            //filemtime pega a data de última modificação do arquivo
            $info["modified"] = date("d/m/Y H:i:s",filemtime($filename));
            $info["url"] = "http://dev.lucasgalvao.com/php/dir/".str_replace("\\","/",$filename);
            array_push($data,$info);
        }
    }

    echo json_encode($data);
?>