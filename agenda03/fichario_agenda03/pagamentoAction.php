<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Fichário - Agenda 03</title>
</head>

<body>
  <div class="w3-container w3-teal">
    <h1>
    <?php

    $nome = $_POST['txtNome'];
    $valor = $_POST['txtValorCompra'];
    $pagamento = $_POST['cmbPag'];

    $porcentagem;

    if ($pagamento == "deposito") {
        $porcentagem = 10;
        $pagamento = "Depósito";
    } elseif ($pagamento == "boleto") {
        $porcentagem = 8;
        $pagamento = "Boleto";
    } elseif ($pagamento == "cartaoCredito") {
        $porcentagem = 0;
        $pagamento = "Cartão de Crédito";
    }

    $desconto = ($valor * $porcentagem)/100;

    echo "
    PROMOÇÃO DE ANIVERSÁRIO <br/>
    $nome! <br/>
    Valor da compra sem desconto: R$ $valor. <br/>
    Forma de pagamento escolhida: $pagamento. <br/>
    Desconto de: $porcentagem%. <br/>
    Você economizou: R$ $desconto! <br/>
    Valor a pagar: R$ " . ($valor - $desconto) . "."

    ?>

    </h1> 
  </div>
</body>
</html>
