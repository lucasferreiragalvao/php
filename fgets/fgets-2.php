<?php

    $filename = "gamer.jpg";

    //Ler o contéudo de um arquivo inteiro
    $base64 = base64_encode(file_get_contents($filename));

    $fileinfo = new finfo(FILEINFO_MIME_TYPE);

    //Pegando o formato do arquivo
    $mimetype = $fileinfo->file($filename);

    $base64encode = "data:". $mimetype.";base64,". $base64;

?>

<a href="<?=$base64encode?>" target="_blank">Link Para Imagem</a>
<img src="<?=$base64encode?>"/>