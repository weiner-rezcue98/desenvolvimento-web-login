document.getElementById('login-form').addEventListener('submit', function(event) {
  event.preventDefault();
  const recaptchaResponse = grecaptcha.getResponse();
  if (recaptchaResponse.length === 0) {
    alert('Por favor, complete o reCAPTCHA antes de entrar.');
  } else {
    // Verificar as credenciais do usuário (substitua isso com sua lógica de verificação).
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    // Exemplo de verificação de credenciais. Substitua isso com sua própria lógica.
    if (email === 'usuario@example.com' && password === 'senha123') {
      window.location.href = 'painel.php'; // Redirecionar para a página de painel após o login bem-sucedido.
    } else {
      alert('Credenciais inválidas. Por favor, tente novamente.');
    }
  }
});

grecaptcha.ready(function() {
  document.getElementById('login-button').removeAttribute('disabled');
});


// A Criação do Painel.php ficará disponível no proximo repositório, "DESENVOLVIMENTO-WEB-PAINEL"
// Remova essas observações e use conforme quiser.