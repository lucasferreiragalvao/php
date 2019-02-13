<?php

  require_once('config.php');

  //sesison_destroy apaga as variáveis de sessão e deslogará o usuário
  unset($_SESSION['nome']);

  echo $_SESSION['nome'];
?>