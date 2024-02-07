<?php

class Mensagem {
   private $texto = 'texto default';
   private $css;

   public function __toString(){
      return $this->renderizar();
   }

   public function sucesso($msg){
      $this->css = 'alert alert-success';
      $this->texto = $this->filtrar($msg);
      return $this;
   }

   public function erro($msg){
      $this->css = 'alert alert-danger';
      $this->texto = $this->filtrar($msg);
      return $this;
   }

   public function renderizar(){
      return "<div class='{$this->css}'>{$this->texto}</div>";
   }

   private function filtrar($msg){
      return filter_var($msg, FILTER_SANITIZE_SPECIAL_CHARS);
   }
}