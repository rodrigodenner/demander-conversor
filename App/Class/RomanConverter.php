<?php

namespace App\Class;

use App\Interfaces\NumberConverterInterface;
use App\Utils\RomanMap;

class RomanConverter implements NumberConverterInterface
{
  protected $romanToDecimalMap;

  public function __construct()
  {
    $this->romanToDecimalMap = RomanMap::romanToDecimalMap();
  }

  public function convert($input)
  {
    $result = 0;
    $length = strlen($input);

    for ($i = 0; $i < $length; $i++) {
      if ($i + 1 < $length && isset($this->romanToDecimalMap[$input[$i] . $input[$i + 1]])) {
        $result += $this->romanToDecimalMap[$input[$i] . $input[$i + 1]];
        $i++;
      }
      $result += $this->romanToDecimalMap[$input[$i]];
    }
    return $result;
  }

}
