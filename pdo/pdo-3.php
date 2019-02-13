<?php
     $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","password");

     $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin=:LOGIN,
     dessenha=:PASSWORD WHERE idusuario= :ID");

     $login = "Lucas";
     $password = "123456";
     $id = "2";

     $stmt->bindParam(":LOGIN",$login);
     $stmt->bindParam(":PASSWORD",$password);
     $stmt->bindParam(":ID", $id);

     $stmt->execute();

     echo "Dados alterados com Sucesso!";


?>