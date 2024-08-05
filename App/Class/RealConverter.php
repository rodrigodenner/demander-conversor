<?php

namespace App\Class;

use App\Interfaces\NumberConverterInterface;
use App\Utils\RomanMap;

class RealConverter implements NumberConverterInterface
{
  protected $realToRomanMap;

  public function __construct()
  {
    $this->realToRomanMap = RomanMap::realToRomanMap();
  }

  public function convert($input)
  {
    $result = '';
    foreach ($this->realToRomanMap as $number => $roman) {
      $result .= str_repeat($roman, intdiv($input, $number));
      $input %= $number;
    }
    return $result;
  }
}
