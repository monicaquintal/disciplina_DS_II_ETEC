<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Mensagem</title>
</head>

<body>
  <div class="w3-container w3-teal">
    <h1>
      <?php 
      echo "Olá " . $_POST['txtNome']. "! <br>"; 
      echo "O valor total da Compra é: R$ ".$_POST['txtValorTotal']."<br>"; 
      ?>
      <?php /* Caso escolha SUDESTE */
        if($_POST['cmbRegiao'] == "Sudeste") { 
          echo "Neste mês estamos com frete grátis para o SUDESTE!";
        }
      ?>
    </h1> 
  </div>
</body>
</html>