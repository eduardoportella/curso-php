<?php

require_once 'sistema/configuracao.php';
include_once 'sistema/Nucleo/Helpers.php';
include 'sistema/Nucleo/Mensagem.php';
include 'sistema/Nucleo/Controlador.php';

use sistema\Nucleo\Controlador;

$controlador2 = new Controlador;
$controlador = new Controlador('admin');
echo '<hr>';
var_dump($controlador);

?>