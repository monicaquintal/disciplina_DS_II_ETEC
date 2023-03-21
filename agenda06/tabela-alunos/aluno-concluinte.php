<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <title>Tabela Alunos - MYSQLI</title>
</head>
<body>
  <div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
    <h1 class="w3-center w3-indigo w3-round-large">Alunos Concluintes</h1>
    <table class="w3-table-all w3-centered w3-text-black">
      <thead>
        <tr class="w3-center w3-indigo">
          <th>Código</th>
          <th>Nome</th>
          <th>Nota 1</th>
          <th>Nota 2</th>
          <th>Nota 3</th>
          <th>Nota 4</th>
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

      $sql = "SELECT * FROM alunoconcluinte" ;

      $resultado = $conexao->query($sql);

      if($resultado != null)
        foreach($resultado as $linha) {
          echo '<tr>';
          echo '<td>'.$linha['idalunoconcluinte'].'</td>';
          echo '<td>'.$linha['nome'].'</td>';
          echo '<td>'.$linha['nota1'].'</td>';
          echo '<td>'.$linha['nota2'].'</td>';
          echo '<td>'.$linha['nota3'].'</td>';
          echo '<td>'.$linha['nota4'].'</td>';
          echo '</tr>';
      }

      $conexao->close();

      ?>

    </table>
  </div>
</body>
</html>