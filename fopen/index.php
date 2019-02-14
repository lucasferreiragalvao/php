<?php
    require_once('config.php');

    //Carrega um usuário
    // $root = new Usuario();
    // $root->loadById(3);
    // echo $root;

    //Carrega uma lista de usuário
    // $lista = Usuario::getList();
    // echo json_encode($lista);

    //Carrega uma lista de usuários buscando pelo login
    // $search = Usuario::search("ro");
    // echo json_encode($search);

    //Carrega um usuário usando o login e a senha
    // $usuario = new Usuario();
    // $usuario->login("root","12345");

    // echo $usuario;

    //Criando um novo usuário
    // $aluno = new Usuario("aluno","789");
    // $aluno->insert();
    // echo $aluno;

    //Atualizando Usuário
    // $usuario = new Usuario();
    // $usuario->loadById(10);
    // $usuario->update("professor1","123");
    // echo $usuario;

    $usuario = new Usuario();
    $usuario->loadById(8);
    $usuario->delete();
    echo $usuario;
?>