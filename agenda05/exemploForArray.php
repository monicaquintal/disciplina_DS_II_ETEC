<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Exemplo Arrays - For</title>
</head>

<body>
  <div class=" w3-third w3-center w3-padding">
    <form class="w3-container" method="post" action="#">
      <label class="w3-text-grey"><strong>Nome do Cliente</strong></label>
      <input class="w3-input w3-border w3-lightgrey" name="txtNome" type="text">
      <label class="w3-text-grey"><strong>Valor da Compra</strong></label>
      <input class="w3-input w3-border w3-lightgrey" name="txtValorCompra" type="number">
      <label class="w3-text-grey"><strong>Estado para envio:</strong></label>
      <select class="w3-input w3-border w3-light-grey" name = "cmbEstados">

      <?php
        $estados = array("Acre","Alagoas","Amapá","Amazonas","Bahia","Ceará","Espírito Santo","Goiás","Maranhão","Mato Grosso","Mato Grosso do Sul ","Minas Gerais","Pará","Paraíba","Paraná","Pernambuco","Piauí","Rio de Janeiro","Rio Grande do Norte","Rio Grande do Sul","Rondônia","Roraima","Santa Catarina","São Paulo","Santa Catarina", "Sergipe", "Tocantins","Distrito Federal");

        for ($i = 0; $i < count($estados); $i++) {
          echo '<option value="'.$i.'">'.$estados[$i].'</option>';
        }
      ?>

      </select>
      <br>
      <button class="w3-btn w3-blue-grey">Enviar</button>
    </form>
  </div>
</html>