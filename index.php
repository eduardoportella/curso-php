<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php

require_once 'sistema/configuracao.php';
include_once 'Helpers.php';
include 'sistema/Nucleo/Mensagem.php';

$msg = new Mensagem();
// var_dump($msg);

echo $msg->sucesso('msg sucesso')->renderizar();
echo $msg->erro('msg erro')->renderizar();

?>