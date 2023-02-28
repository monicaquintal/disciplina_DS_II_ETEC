<?php

/*

Imagine que o usuário de um site envie o seu pedido e, ao clicar em “enviar o pedido“, o site informa o nome do usuário e o valor total da compra; porém, neste site de compras há uma regra de negócio de que os fretes para a região Sudeste são gratuitos e deve aparecer apenas para o usuário que escolher a região Sudeste. 
Neste caso, o uso do desvio condicional simples é a melhor opção, pois haverá um acréscimo de informação na mensagem somente quando o
usuário escolher essa região. Para todas as demais regiões, nada será acrescentado. 

*/

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Desvio Condicional Simples</title>
</head>

<body>
  <div class="w3-container w3-teal">
    <h2>Enviar Pedido</h2>
  </div>
  <form class="w3-container" method="post" action="desvioSimplesAction.php">
  <label class="w3-text-teal"><b>Nome do Usuário</b></label>
  <input class="w3-input w3-border w3-light-grey" name="txtNome"
  type="text">
  <label class="w3-text-teal"><b>Valor total da Compra</b></label>
  <input class="w3-input w3-border w3-light-grey" name="txtValorTotal"
  type="number">
  <label class="w3-text-teal"><b>Escolha a Região:</b></label>
  <select class="w3-input w3-border w3-light-grey" id="regiao" name =
  "cmbRegiao">
    <option value="Centro-Oeste">Centro-Oeste</option>
    <option value="Nordeste">Nordeste</option>
    <option value="Norte">Norte</option>
    <option value="Sul">Sul</option>
    <option value="Sudeste" selected>Sudeste</option>
  </select>
  <br>
  <button class="w3-btn w3-blue-grey">Enviar</button>
  </form>
</body>
</html>
