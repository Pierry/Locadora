<?php

  $hostname = "mysql7.000webhost.com";
  $database = "a6111485_locador";
  $username = "a6111485_locador";
  $password = "p131288b";
         
    $conexao = mysql_connect($hostname, $username, $password) or die('Erro Conect...' . mysql_error());
    $bd = mysql_selectdb($database, $conexao) or die('Erro BD...' . mysql_error());

?>
