<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
 <title>Cadastro - MYSQLI</title>
</head>
<body>

  <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

  <?php

  $servername = "localhost";
  $username = "root";
  $password = "senha";
  $dbname = "pwii";
  $conexao = new mysqli($servername, $username, $password, $dbname);

  if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
  }

  $sql = "INSERT INTO amigo (nome, apelido, email)
          VALUES ('".$_POST['txtNome']."', '".$_POST['txtApelido']."', '".$_POST['txtEmail']."')";

  if ($conexao->query($sql) === TRUE) {
      echo '
      <a href="index.php">
      <h1 class="w3-button w3-pink w3-round-large">Amigo registrado com sucesso! </h1>
      </a>
      ';
  } else {
      echo '
      <a href="index.php">
      <h1 class="w3-button w3-pink w3-round-large">ERRO! </h1>
      </a>
      ';
    }

  $conexao->close();
  ?>

  </div>
</body>
</html>