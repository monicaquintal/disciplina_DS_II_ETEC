<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <title>Cadastro - PDO</title>
</head>
<body class="">
  <a href="index.php" class="w3-display-top-left">
  <i class="fa fa-arrow-circle-left w3-large w3-margin w3-blue w3-button w3-xxlarge w3-round-large"></i></a>
  <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
    <h1 class="w3-center w3-blue w3-round-large w3-margin">Cadastro de Produtos</h1>
    <form action="cadastroAction.php" class="w3-container" method='post'>
      <label class="w3-text-blue" style="font-weight: bold;">Código</label>
      <input name="txtID" class="w3-input w3-grey w3-border" disabled><br>
      <label class="w3-text-blue" style="font-weight: bold;">Nome</label>
      <input name="txtNome" class="w3-input w3-light-grey w3-border"><br>
      <label class="w3-text-blue" style="font-weight: bold;">Preço</label>
      <input name="txtPreco" class="w3-input w3-light-grey w3-border"><br>
      <label class="w3-text-blue" style="font-weight: bold;">Quantidade</label>
      <input name="txtQtd" class="w3-input w3-light-grey w3-border"><br>
      <button name="btnAdd" class="w3-button w3-blue w3-cell w3-round-large w3-right">
      <i class="w3-xxlarge fa fa-plus-square"> Adicionar </i>
      </button>
    </form>
  </div>
</body>
</html>