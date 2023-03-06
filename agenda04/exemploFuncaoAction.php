<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Funções: void e com retorno.</title>
</head>

<body>
  <h2 class="w3-container w3-pink">

  <?php
  function parOuImparRetorno($valor) {
    $resto = $valor % 2;
    if ($resto == 0) 
      return "PAR";
    else 
      return "IMPAR";
  }
  function parOuImparVoid($valor) {
    $resto = $valor % 2;
    if($resto == 0)
      echo "PAR";
    else
      echo "IMPAR";
  }
  
  $numero_inserido = $_POST['txtValor'];
  // Chamada ou Invocação da Função
  echo parOuImparRetorno($numero_inserido);
  /* todas as instruções resultaram em uma string, que é retornada direto para um comando echo */

  echo "<br>";

  parOuImparVoid($numero_inserido);
  /* desenvolvida sem retorno, utilizando o comando echo de forma direta dentro da própria função */
  ?>
  
  </h2>
</body>
</html>