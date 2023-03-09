<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Você no comando!</title>
</head>
<body>
  <div>
    <h2 class="w3-container w3-orange w3-center ">Data de Hoje: <?php echo date("d/m/Y");?></h2>
  </div>
  <div>
    <div class=" w3-third w3-center w3-animate-top w3-padding">
      <h2 class="w3-container w3-orange ">Escolha qual tabuada você deseja visualizar!</h2>
      <form class="w3-container" method="post" action="voceNoComandoAction.php">
        <button class="w3-btn w3-amber w3-margin w3-jumbo" name="btn7">7</button>
        <button class="w3-btn w3-amber w3-margin w3-jumbo" name="btn8">8</button>
        <button class="w3-btn w3-amber w3-margin w3-jumbo" name="btn9">9</button>
        <br>
        <button class="w3-btn w3-amber w3-margin w3-jumbo" name="btn4">4</button>
        <button class="w3-btn w3-amber w3-margin w3-jumbo" name="btn5">5</button>
        <button class="w3-btn w3-amber w3-margin w3-jumbo" name="btn6">6</button>
        <br>
        <button class="w3-btn w3-amber w3-margin w3-jumbo" name="btn1">1</button>
        <button class="w3-btn w3-amber w3-margin w3-jumbo" name="btn2">2</button>
        <button class="w3-btn w3-amber w3-margin w3-jumbo" name="btn3">3</button>
        <br>
        <button class="w3-btn w3-amber w3-margin w3-jumbo" name="btn0">0</button>
      </form>
    </div>

    <div class=" w3-third w3-center w3-animate-top w3-padding">
      <h2 class="w3-container w3-orange">Digite qualquer valor para gerar sua tabuada</h2>
      <form class="w3-container" method="post" action="voceNoComandoAction.php">
        <label class="w3-text-gray"><b>Valor para cálculo da tabuada</b></label>
        <input class="w3-input w3-border w3-lightgrey" name="txtValor" type="number" placeholder="Digite ex: 6">
        <br>
        <button class="w3-btn w3-orange" name="btnCalcular">Calcular</button>
      </form>
    </div>

    <div class=" w3-third w3-center w3-animate-top w3-padding">
      <h2 class="w3-container w3-orange ">Clique para gerar todas as Tabuadas do 0 a 10!</h2>
      <form class="w3-container" method="post" action="voceNoComandoAction.php">
        <br>
        <button class="w3-btn w3-orange w3-margin" name="btnGerar">Tabuadas</button>
      </form>
    </div>
  </div>
</body>
</html>