<?php

class Mensagem {
   private $texto = 'texto default';
   private $css;

   public function renderizar(){
      return $this->texto = $this->filtrar('msg default');
   }

   private function filtrar($msg){
      return filter_var($msg, FILTER_SANITIZE_SPECIAL_CHARS);
   }
}