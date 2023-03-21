<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <title>Tabela Jogos - MYSQLI</title>
</head>
<body>
  <div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
    <h1 class="w3-center w3-indigo w3-round-large">Listagem de Jogos</h1>
    <table class="w3-table-all w3-centered w3-text-black">
      <thead>
        <tr class="w3-center w3-indigo">
          <th>Código</th>
          <th>Nome</th>
          <th>Fabricante</th>
        </tr>
      <thead>

      <?php

      $servername = "localhost";
      $username = "root";
      $password = "senha";
      $dbname = "pwii";
      $conexao = new mysqli($servername, $username, $password, $dbname);

      if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);
      }

      $sql = "SELECT * FROM jogo" ;

      $resultado = $conexao->query($sql);

      if($resultado != null)
        foreach($resultado as $linha) {
          echo '<tr>';
          echo '<td>'.$linha['idjogo'].'</td>';
          echo '<td>'.$linha['nome'].'</td>';
          echo '<td>'.$linha['fabricante'].'</td>';
          echo '</tr>';
      }

      $conexao->close();

      ?>

    </table>
  </div>
</body>
</html>