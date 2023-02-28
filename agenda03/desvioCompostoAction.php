<?php

/*
A partir dos valores das variáveis, n1, n2 e n3, será calculada a média. Por meio da estrutura de decisão, será verificado se o aluno foi aprovado ou não:
Se a média foi maior ou igual a 7, então o aluno foi “Aprovado”, senão, se a média menor que 7, então o aluno foi “Reprovado”.
*/

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Resultado Final</title>
</head>
<body>
  <div class="w3-container w3-teal">
    <h1>
      <?php
      $n1 = $_POST['txtN1'];
      $n2 = $_POST['txtN2'];
      $n3 = $_POST['txtN3'];

      $media = ($n1+$n2+$n3)/3;

      $resultado;

      echo "".$_POST['txtNome']."! Sua Média foi ".$media."!!! <br>";

      /* UTILIZANDO ELSEIF */

      if($media >= 7) {
        $resultado = "Aprovado";
      } elseif($media <5) {
        $resultado = "Reprovado"; 
      } else {
        $resultado = "de Exame";
      } 

      echo "Você está ".$resultado."! <br>";


      /* 

      EXEMPLO ESTRUTURA ENCADEADA:

      if($media >= 7) {
        $resultado = "Aprovado";
      } else { 
        if($media <5) {
          $resultado = "Reprovado";
        } else {
          $resultado = "Exame";
        }
      }

      */

      
      ?>
    </h1> 
  </div>
</body>
</html>
