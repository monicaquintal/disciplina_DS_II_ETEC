<?php require_once ('cabecalho.php'); ?>

  <div class="w3-padding w3-text-pink w3-half w3-display-middle w3-center">
    <h1 class="w3-center w3-pink w3-round-large">Projeto Lista de Amigos</h1>
    <div class="w3-row">
      <div class="w3-col w3-button w3-deep-purple w3-cell w3-round-large" style="width:48%;">
        <a href="cadastro.php" style="text-decoration: none;">
          <i class=" fa fa-user-plus" style="font-size: 2em;">
          <p style="display: inline;">Adicionar </p></i>
        </a>
      </div>
      <div class="w3-col w3-button w3-deep-purple w3-cell w3-round-large w3-right" style="width:48%;">
        <a href="./listar.php" style="text-decoration: none;">
          <i class="fa fa-address-card" style="font-size: 2em">
          <p style="display: inline;">Listar</p></i>
        </a>
      </div>
    </div>
  </div>

<?php require_once ('rodape.php'); ?>