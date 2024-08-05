<?php

namespace App\Factories;

use App\Class\RealConverter;
use App\Class\RomanConverter;
use Exception;

class ConverterFactory
{
  public static function createConverter($type)
  {
    if ($type === 'realToRoman') {
      return new RealConverter();
    }
    if ($type === 'romanToReal') {
      return new RomanConverter();
    }
    throw new Exception("Tipo de conversor desconhecido");
  }
}

