<?php

namespace App\Utils;

class RomanMap
{
  private static $romanMap = [
    1000 => 'M', 900 => 'CM', 500 => 'D', 400 => 'CD',
    100 => 'C', 90 => 'XC', 50 => 'L', 40 => 'XL',
    10 => 'X', 9 => 'IX', 5 => 'V', 4 => 'IV', 1 => 'I'
  ];

  public static function realToRomanMap()
  {
    return self::$romanMap;
  }

  public static function romanToDecimalMap()
  {
    return array_flip(self::$romanMap);
  }
}