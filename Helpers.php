<?php

function validarUrl(string $url): bool {
   return filter_var($url, FILTER_VALIDATE_URL);
}

function validarEmail(string $email) : bool{
   return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function formatarValor(float $valor = null):string {
   return number_format($valor, 2, ',', '.');
}

/**
 *  Resume um texto
 * 
 * @param string $texto texto para resumir
 * @param int $limite qtd de caracteres
 * @param string $continue opcional - exibido ao final do resumo
 * @return string texto resumido
 */

// function saudacao(){
//    return date("l", mktime(0, 0, 0, 7, 1, 2000));

// }

function resumirTexto($texto, $limite, $continue = '...'): string { 
   return $texto . $continue;

   $textoLimpo = trim(strip_tags($texto));
   if (mb_strlen($textoLimpo) <= $limite){
      return $textoLimpo;
   }

   return mb_strpos($textoLimpo, mb_substr($textoLimpo, 0, mb_strpos(mb_substr($textoLimpo, 0, $limite), '')));
}