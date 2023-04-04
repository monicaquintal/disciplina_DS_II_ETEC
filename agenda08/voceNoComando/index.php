<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <title>Professores</title>
</head>
<body>
  <div class="w3-container w3-round-xxlarge w3-display-middle w3-third w3-border w3-padding">
    <div class="w3-center">
      <br>
      <img src="../lista-de-amigos/imagens/usuario.jpg" alt="user" style="width:40%" class="w3-circle w3-margin-top">
    </div>
    <form class="w3-container " action="loginAction.php" method="post">
      <div class="w3-section">
        <label style="font-weight: bold;">Usuário</label>
        <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Digite o nome" name="txtNome" required>
        <label style="font-weight: bold;">Senha</label>
        <input class="w3-input w3-border" type="text" placeholder="Digite a Senha" name="txtSenha" required>
        <button class="w3-button w3-block w3-indigo w3-section w3-padding w3-round-large" type="submit">Entrar</button>
      </div>
    </form>
    <br>
  </div>
</body>
</html>