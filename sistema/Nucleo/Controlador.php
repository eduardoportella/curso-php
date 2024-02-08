<?php

namespace sistema\Nucleo;

use sistema\Suporte\Template;

class Controlador
{
   protected Template $template;

   public function __construct(string $diretorio = null)
   {
      $this->template = new Template($diretorio);
   }
}
