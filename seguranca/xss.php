<form method="POST">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>

<?php

    $_POST['busca'] =  '<a href="#"><strong>Oi</strong></a><script>alert("ok")</script>';
    if(isset($_POST['busca'])){

        //Remove as Tags
        //echo strip_tags($_POST['busca'], "<strong><a>");
        //Converte para texto
        echo htmlentities($_POST["busca"]);
    }
?>