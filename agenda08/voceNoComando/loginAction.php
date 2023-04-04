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
  <div class="w3-padding w3-content w3-text-grey w3-display-middle">
    <?php
    session_start();

    $nome = $_POST['txtNome'];
    $senha = $_POST['txtSenha'];

    require_once 'conexaoBD.php';

    $sql = "SELECT * FROM professor WHERE nome = '".$nome."';";

    $resultado = $conexao->query($sql);
    //echo $sql;

    $linha = mysqli_fetch_array($resultado);
    if($linha != null) {
      if($linha['senha'] == $senha ) {
        echo '
        <a href="professor.php">
        <h1 class="w3-button w3-indigo w3-round-large">Login Realizado com Sucesso! </h1>
        </a>
        ';
      $_SESSION['logado'] = $nome;

      } else {
        echo '
        <a href="index.php">
        <h1 class="w3-button w3-indigo w3-round-large">Login Inválido! </h1>
        </a>
        ';
      }

    } else {
      echo '
      <a href="index.php">
      <h1 class="w3-button w3-indigo w3-round-large">Login Inválido! </h1>
      </a>
      ';
    }

    $conexao->close();

    ?>
  </div>
</body>
</html>