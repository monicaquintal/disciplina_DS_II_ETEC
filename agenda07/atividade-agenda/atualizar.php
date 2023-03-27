<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <title>Atualizar - PDO</title>
</head>
<body class="">
  <a href="index.php" class="w3-display-top-left">
  <i class="fa fa-arrow-circle-left w3-large w3-margin w3-deep-purple w3-button w3-xxlarge w3-round-large"></i></a>

  <div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
  <h1 class="w3-center w3-deep-purple w3-round-large w3-margin">Atualizar - ID: <?php echo " ".$_GET['id']?> </h1>
  <form action="atualizarAction.php" class="w3-container" method='post'>
  <input name="txtID" class="w3-input w3-grey w3-border" type="hidden" value="<?php echo $_GET['id']?>">
  <br>
  <label class="w3-text-deep-purple" style="font-weight: bold;">Nome</label>
  <input name="txtNome" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['nome']?>">
  <br>
  <label class="w3-text-deep-purple " style="font-weight: bold;">Preço</label>
  <input name="txtPreco" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['preco']?>">
  <br>
  <label class="w3-text-deep-purple " style="font-weight: bold;">Quantidade</label>
  <input name="txtQtd" class="w3-input w3-light-grey w3-border" value="<?php echo $_GET['quantidade']?>">
  <br>
  <button name="btnAtualizar" class="w3-button w3-deep-purple w3-cell w3-round-large w3-right">
  <i class="w3-xlarge fa fa-spinner"> Atualizar</i> 
  </button>
  </form>
  </div>
</body>
</html>