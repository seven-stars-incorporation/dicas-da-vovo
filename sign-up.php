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
  <title>Cadastro</title>
  <!-- fonts -->
  <!-- <link href="https://api.fontshare.com/v2/css?f[]=outfit@400,900,800,300,500,600,200,100,700&amp;display=swap" rel="stylesheet"> -->
  <!-- styles -->
  <link rel="stylesheet" href="./assets/css/form.css">
  <!-- scripts -->
  <script src="./assets/js/sign-up.js" defer></script>
</head>
<body>
  <div class="container sign-up">
    <!-- <h2>LOGO Dicas da Vóvó</h2> -->
    <form action="controllers/cadastrar-user.php" method="POST" id="sign-up">
      <h2 class="title">Cadastrar-se</h2>
      <div class="field">
        <label for="nome">Nome</label>
        <input type="text" placeholder="John Doe" name="nome" id="nome" required tabindex="1">
        <span id="feedback-name" class="message"></span>
      </div>
      <div class="field">
        <label for="usuario">Usuário</label>
        <input type="text" placeholder="johndoe" name="usuario" id="usuario" required tabindex="2">
        <span id="feedback-user" class="message"></span>
      </div>
      <div class="field">
        <label for="email">E-mail</label>
        <input type="email" placeholder="johndoe@email.com" name="email" id="email" required tabindex="3">
        <span id="feedback-email" class="message"></span>
      </div>
      <div class="field">
        <div class="group">
          <label for="senha">Senha</label>
          <div id="show-password">Mostrar</div>
        </div>
        <input type="password" placeholder="Crie uma senha (mín. 8 caracteres)" name="senha" id="senha" required tabindex="4">
        <span id="feedback-password" class="message"></span>
      </div>
      <div class="field">
        <div class="group">
          <label for="confirmar-senha">Confirmar senha</label>
          <div id="show-confirm-password">Mostrar</div>
        </div>
        <!--Confirmação de senha apenas por JS-->
        <input type="password" placeholder="Confirme a senha" name="confirmar-senha" id="confirmar-senha" required tabindex="5">
        <span id="feedback-confirm-password" class="message"></span>
      </div>
      <button type="submit" id="create-account" tabindex="6">Criar conta</button>

      <div class="go-to-somewhere">
        <div class="separator"></div>
        <div>Ja possui conta?</div>
        <div class="separator"></div>
      </div>
      <a class="link-button" href="./login.php" tabindex="7">Fazer Login</a>
    </form>
  </div>
</body>
</html>