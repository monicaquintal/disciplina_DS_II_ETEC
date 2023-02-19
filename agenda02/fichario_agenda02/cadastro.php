<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Fichário - Agenda 02 - Mônica Quintal</title>
</head>

<body>
  <div class="w3-container w3-indigo w3-center">
    <h2>Cadastro de Colaboradores</h2>
    <h3>Loja Brincos e Companhia</h3>
  </div>

  <div class="w3-container" style="margin-top: 10px;">
    <form class="w3-container" method="post" action="acao.php">

      <label class="w3-text-indigo"><strong>Nome</strong></label>
      <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text" required>

      <label class="w3-text-indigo"><strong>Sobrenome</strong></label>
      <input class="w3-input w3-border w3-light-grey" name="txtSobrenome" type="text" required>

      <label class="w3-text-indigo"><strong>Email</strong></label>
      <input class="w3-input w3-border w3-light-grey" name="txtEmail" type="text" required>

      <label class="w3-text-indigo"><strong>Formação</strong></label>
      <input class="w3-input w3-border w3-light-grey" name="txtFormacao" type="text" required>

      <label class="w3-text-indigo"><strong>Descrição Último Emprego</strong></label>
      <input class="w3-input w3-border w3-light-grey" name="txtEmprego" type="text" required>

      <br>
      <button class="w3-btn w3-indigo">Enviar</button>

    </form>
  </div>
</body>
</html>