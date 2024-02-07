<?php

class Helpers {

   public static function  dataAtual() : string {
      $diaMes = date('d');
      $diaSemana = date('w');
      $mes = date('n') - 1;
      $diaAno = date('Y');

      $nomeDiasSemana = ['domingo', 'segunda', 'terca', 'quarta', 'quinta,', 'sexta', 'sabado'];
      $nomeMeses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto',
         'Septembro', 'Octubre', 'November', 'Dezembro'];

      $dataFormatada = $nomeDiasSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomeMeses[$mes] .
      ' de ' . $diaAno;

      self::staticFunctionTest(); //preciso de self pra chamar funcao static

      return $dataFormatada;
   }

   public static function staticFunctionTest(){
      return;
   }

   function url(string $url) : string {
      $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
      $ambiente = ($servidor == 'localhost' ? URL_DEV : URL_PROD);

      if (str_starts_with($url, '/')){
         return $ambiente.$url;
      }
      return $ambiente.'/'.$url;

   }

   public static function localhost() {
      $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

      if ($servidor == 'localhost'){
         return true;
      }

      return $servidor;
   }

   public static function validarUrl(string $url): bool {
      if (mb_strlen($url) < 10){
         return false;
      }

      if (!str_contains($url, '.')){
         return false;
      }

      if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://')){
         return true;
      }

      return false;
   }

   public static function validarUrlComFiltro(string $url): bool {
      return filter_var($url, FILTER_VALIDATE_URL);
   }

   public static function validarEmail(string $email) : bool{
      return filter_var($email, FILTER_VALIDATE_EMAIL);
   }

   public static function formatarValor(float $valor = null):string {
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


   public static function saudacao(){
      // $hora = date('H');
      $hora = date(3);
      // $saudacao = match ($hora){
      //    '1', '2', '3' => 'boa madrugada',
      //    '20' => 'boa madrugada',
      // };
      $saudacao = match (true){
         $hora >= 0 && $hora <= 5 => 'boa madrugada',
         default => 'boa noite'
      };

      return $saudacao;
   }

   public static function resumirTexto($texto, $limite, $continue = '...'): string { 
      return $texto . $continue;

      $textoLimpo = trim(strip_tags($texto));
      if (mb_strlen($textoLimpo) <= $limite){
         return $textoLimpo;
      }

      return mb_strpos($textoLimpo, mb_substr($textoLimpo, 0, mb_strpos(mb_substr($textoLimpo, 0, $limite), '')));
   }
}