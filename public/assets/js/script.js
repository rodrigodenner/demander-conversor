document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('conversionForm');

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const inputElement = document.getElementById('input');
    const typeElement = document.getElementById('type');
    const resultDiv = document.getElementById('result');

    const inputValue = inputElement.value.trim();
    const conversionType = typeElement.value;

    if (inputValue === '') {
      resultDiv.innerHTML = "Por favor, insira um número.";
      return;
    }

    fetch('../functions/convert.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: `input=${encodeURIComponent(inputValue)}&type=${encodeURIComponent(conversionType)}`
    })
      .then(response => response.text())
      .then(data => {
        resultDiv.innerHTML = data;
        inputElement.value = '';
      })
      .catch(error => {
        console.error('Erro:', error);
        resultDiv.innerHTML = "Erro na conversão.";
      });
  });
});
