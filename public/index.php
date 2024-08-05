<!doctype html>
<html lang="pt_BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conversor de Números</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
  <h1>Conversor de Números</h1>
  <form id="conversionForm">
    <label for="input">Número:</label>
    <input type="text" name="input" id="input" required>
    <label for="type">Tipo de Conversão:</label>
    <select name="type" id="type">
      <option value="realToRoman">Decimal para Romano</option>
      <option value="romanToReal">Romano para Decimal</option>
    </select>

    <button type="submit">Converter</button>
  </form>
  <div id="result"></div>
</div>

<script src="assets/js/script.js"></script>
</body>
</html>