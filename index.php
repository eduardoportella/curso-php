<?php

require_once 'sistema/configuracao.php';
include_once 'Helpers.php';
include 'sistema/Nucleo/Mensagem.php';

$msg = new Mensagem();
// var_dump($msg);

echo $msg->renderizar();

?>