<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Você no Comando!</title>
</head>

<body>
    <div class="w3-container w3-teal">
        <h2>Cálculo de aumento</h2>
    </div>
    <form class="w3-container" method="post" action="voceNoComandoAction.php">
        <label class="w3-text-teal"><b>Nome do Funcionário</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtNome" type="text">
        <label class="w3-text-teal"><b>Salário</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtSal" type="number">
        <label class="w3-text-teal"><b>Quantidade de Dependentes</b></label>
        <input class="w3-input w3-border w3-light-grey" name="txtDep" type="number">
        <br/>
        <button class="w3-btn w3-blue-grey">Calcular</button>
    </form>
</body>
</html>