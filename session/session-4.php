<?php

  //session_id('ei8n2lffkuiv0trnbqdc4onvmk');
  require_once("config.php");

  session_regenerate_id();

  echo session_id();

  var_dump($_SESSION);
?>