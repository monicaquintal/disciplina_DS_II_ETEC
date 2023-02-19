<?php

$nome = $_POST['txtNome'];
$sobrenome = $_POST['txtSobrenome'];
$email = $_POST['txtEmail'];
$formacao = $_POST['txtFormacao'];
$ultimo_emprego = $_POST['txtEmprego'];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Fichário - Agenda 02 - Mônica Quintal</title>
</head>

<body>
  <div class="w3-container w3-green w3-center">
    <h2>Cadastro confirmado com sucesso!</h2>
    <h3>Loja Brincos e Companhia</h3> 
  </div>

  <div class="w3-container" style="margin: 10px;">
    <p class="w3-text-teal"><strong>Nome: </strong><span class="w3-text-grey"><?php echo "$nome" ?></span></p>  
    <p class="w3-text-teal"><strong>Sobrenome: </strong><span class="w3-text-grey"><?php echo "$sobrenome" ?></span></p>  
    <p class="w3-text-teal"><strong>Email: </strong><span class="w3-text-grey"><?php echo "$email" ?></span></p>  
    <p class="w3-text-teal"><strong>Formação: </strong><span class="w3-text-grey"><?php echo "$formacao" ?></span></p>  
    <p class="w3-text-teal"><strong>Descrição do Último Emprego: </strong><span class="w3-text-grey"><?php echo "$ultimo_emprego" ?></span></p>  
  </div>

</body>
</html>