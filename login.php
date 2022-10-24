<?php
  include_once("utils/session.php");
  checkLogin('./index.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- styles -->
  <link rel="stylesheet" href="./assets/css/form.css">
  <!-- scripts -->
  <script src="./assets/js/login.js" defer></script>
</head>
<body>
  <div class="container sign-in">
    <!-- <h2>Dicas da Vóvó</h2> -->
    <form action="controllers/validar-login.php" method="POST" id="login">
      <h2 class="title">Acesse sua conta</h2>
      <div class="field">
        <label for="usuario">Usuário</label>
        <input type="text" placeholder="Digite seu usuário" name="usuario" id="usuario" required tabindex="1">
        <span id="feedback-user" class="message"></span>
      </div>

      <div class="field">
        <div class="group">
          <label for="senha">Senha</label>
          <div id="show-password">Mostrar</div>
        </div>
        <input type="password" placeholder="Digite sua senha" name="senha" id="senha" required tabindex="2">
        <span id="feedback-password" class="message"></span>
      </div>

      <div class="support-items">
        <div class="hold">
          <input type="checkbox" name="remember-me" id="remember-me" tabindex="3">
          <label for="remember-me">Lembrar de mim</label>
        </div>
        <div>
          <a class="recover-password" href="/fodaseKKKKKKKKKKKKKKK" tabindex="4">Esqueceu sua senha?</a>
        </div>
      </div>

      <button type="submit" id="sign-in">Entrar</button>
      <div>
        <a class="recover-password" href="/fodaseKKKKKKKKKKKKKKK" tabindex="5">Esqueceu sua senha?</a>
      </div>
      <div class="go-to-somewhere">
        <div class="separator"></div>
        <div>Não possui uma conta?</div>
        <div class="separator"></div>
      </div>
      <a class="link-button" href="./sign-up.php" tabindex="6">Criar conta</a>
    </form>
  </div>
</body>
</html>