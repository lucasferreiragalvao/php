<?php
    header("Content-Type: image/png");
    
    //Tamanho da imagem
    $image = imagecreate(256,256);

    //Paleta de cores
    $black = imagecolorallocate($image,0,0,0);
    $red = imagecolorallocate($image,255,0,0);

    //Escrevendo texto
    imagestring($image,5,60,120,"Curso PHP 7", $red);
    
    //Gerando Imagem PNG
    imagepng($image);

    imagedestroy($image);


?>