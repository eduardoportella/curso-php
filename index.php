<?php

require 'vendor/autoload.php';

// Não importa se já vem formatado ou não
$document = new \Bissolli\ValidadorCpfCnpj\CPF('123.456.789-09');

// Verifica se é um número válido de CPF
// Retorna true/false
var_dump($document->isValid());

// Retorna o número de CPF formatado (###.###.###-##)
// ou false caso não seja um número válido
$document->format();

// Retorna o número de sem formatação alguma
// ou false caso não seja um número válido
$document->getValue();

?>