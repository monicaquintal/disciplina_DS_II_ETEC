<?php

/*
Imagine um site para o professor lançar o nome de um aluno e suas três notas bimestrais, e que ao pressionar um botão gere dois possíveis resultados:
  “Aprovado”, para a média maoir ou igual a 7, ou
  “Reprovado”, para média inferior a 7.
*/

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Desvio Condicional Composto</title>
</head>

<body>
  <div class="w3-container w3-teal">
    <h2>Calculo de Média e Resultado Final</h2>
  </div>
  <form class="w3container" method="post" action="desvioCompostoAction.php">
  <label class="w3-text-teal"><b>Nome do Aluno</b></label>
  <input class="w3-input w3-border w3-lightgrey" name="txtNome" type="text">
  <label class="w3-text-teal"><b>Nota 1</b></label>
  <input class="w3-input w3-border w3-lightgrey" name="txtN1" type="number">
  <label class="w3-text-teal"><b>Nota 2</b></label>
  <input class="w3-input w3-border w3-lightgrey" name="txtN2" type="number">
  <label class="w3-text-teal"><b>Nota 3</b></label>
  <input class="w3-input w3-border w3-lightgrey" name="txtN3" type="number">
  <br>
  <button class="w3-btn w3-blue-grey">Calcular Média</button>
  </form>
</body>
</html>