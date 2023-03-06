<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>Tabuada</title>
</head>

<body>
  <?php
    echo '<br><a href="exemploWhile.php" class="w3-button w3-indigo">Voltar</a><br>';
    $valor = $_POST["txtValor"];
    echo '<div class="w3-quarter w3-display-middle w3-responsive w3-blue">';
    echo '<table class="w3-table-all w3-hoverable w3-text-indigo">';
    echo '<tr class="w3-blue">';
    echo '<th class="w3-center"> Tabuada do '.$valor.'</th>';
    echo '</tr>';

    $indice = 0;

    while($indice <= 10) {
    echo '<tr>';
    echo '<td class="w3-center">'.$valor.' X '.$indice.' = '.$valor*$indice.'</td>';
    echo '</tr>';
    $indice++;
    }
    echo '</table>';
    echo '</div>';
  ?>
</body>
</html>