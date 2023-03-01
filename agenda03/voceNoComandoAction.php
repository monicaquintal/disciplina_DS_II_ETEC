<?php

/*

Atividade: Você no Comando

1. Crie um arquivo PHP.
    a) Neste arquivo, crie um formulário com os campos:
        - nome;
        - salário;
        - quantidade de dependentes.
2. Crie um arquivo PVP para receber a ação do botão Enviar.
    a) Este deverá calcular e exibir a % de aumento, valor do aumento e novo salário do funcionário, conforme informação a seguir:

      Salário    | Dependentes | % de Aumento
      <= 500     |    < = 5    |     15%
      <= 500     |     > 5     |     20%
 > 500 e <= 1000 |    < = 5    |     10%
 > 500 e <= 1000 |     > 5     |     15%
> 1000 e <= 2000 |    < = 5    |     10%
> 1000 e <= 2000 |     > 5     |     12%
      > 2000     |    < = 5    |     08%
      > 2000     |     > 5     |     10%


*/

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Aumento salarial</title>
</head>

<body>
  <div class="w3-container w3-teal">
    <h1>
    <?php
    $nome = $_POST['txtNome'];
    $salario = $_POST['txtSal'];
    $dependentes = $_POST['txtDep'];

    $aumento;

    if ($salario <= 500 && $dependentes <= 5) {
        $aumento = 15;
    } elseif ($salario <= 500 && $dependentes > 5) {
        $aumento = 20;
    } elseif ($salario > 500 && $salario <= 1000 && $dependentes <= 5) {
        $aumento = 10;
    } elseif ($salario > 500 && $salario <= 1000 && $dependentes > 5) {
        $aumento = 15;
    } elseif ($salario > 1000 && $salario <= 2000 && $dependentes <= 5) {
        $aumento = 10;
    } elseif ($salario > 1000 && $salario <= 2000 && $dependentes > 5) {
        $aumento = 12;
    } elseif ($salario > 2000 && $dependentes <= 5) {
        $aumento = 8;
    } elseif ($salario > 2000 && $dependentes > 5) {
        $aumento = 10;
    }

    echo "Olá, $nome, seu aumento será de $aumento%. <br/>
    Portanto, seu salário será igual a R$ " . ($salario*$aumento)/100 + $salario . "!";

      ?>   
    </h1> 
  </div>
</body>
</html>
