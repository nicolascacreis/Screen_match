<?php

namespace ScreenMatch\Calculos;

use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;

class ConversorNota
{
       public function converte(Avaliavel $avaliavel): float
       {
           try {
               $nota = $avaliavel->media();

               return round($nota ) / 2;
           } catch ( \Throwable $erro) {
               echo $erro->getMessage();
               return 0;
           }
       }
}