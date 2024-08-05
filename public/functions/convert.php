<?php

require "../../vendor/autoload.php";

use App\Factories\ConverterFactory;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  echo "Método inválido";
  return;
}

$input = strip_tags($_POST['input']);
$type = strip_tags($_POST['type']);

if ($type !== 'realToRoman' && $type !== 'romanToReal') {
  echo "Tipo inválido. Por favor, forneça um tipo válido.";
  return;
}

if ($type === 'realToRoman') {
  if (!ctype_digit($input) || (int)$input <= 0) {
    echo "Entrada inválida. Por favor, forneça um número inteiro positivo.";
    return;
  }
}

if ($type === 'romanToReal') {
  if (!preg_match('/^[IVXLCDM]+$/i', $input)) {
    echo "Entrada inválida. Por favor, forneça um número romano válido.";
    return;
  }
}

try {
  $converter = ConverterFactory::createConverter($type);
  $result = $converter->convert($input);
  echo "Resultado: " . $result;
} catch (Exception $e) {
  echo "Erro: " . $e->getMessage();
}
