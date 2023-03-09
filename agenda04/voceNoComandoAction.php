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
 echo '<br><a href="voceNoComando.php" class="w3-button w3-orange">Voltar</a><br>';

 if(isset($_POST["btnCalcular"])) {

  $valor = $_POST["txtValor"];
  echo '<div class="w3-quarter w3-display-middle w3-responsive w3-orange">';
  echo '<table class="w3-table-all w3-hoverable w3-text-black">';
  echo '<tr class="w3-orange">';
  echo '<th class="w3-center"> Tabuada do '.$valor.'</th>';
  echo '</tr>';

  $i = 0;

  while($i <= 10) {
    echo '<tr>';
    echo '<td class="w3-center">'.$valor.' X '.$i.' = '.$valor*$i.'</td>';
    echo '</tr>';
    $i++;
  }
  echo '</table>';
  echo '</div>';

  } else {

    if(isset($_POST["btnGerar"])) {

    $i = 0;
    $j = 0;
    
    do {
      echo '<div class="w3-quarter w3-responsive w3-orange">';
      echo '<table class="w3-table-all w3-hoverable w3-textblack">';
      echo '<tr class="w3-orange ">';
      echo '<th class="w3-center"> Tabuada do '.$j.'</th>';
      echo '</tr>';

    $i = 0;

    do {
      echo '<tr>';
      echo '<td class="w3-
      center">'.$j.' X '.$i.' = '.$j*$i.'</td>';
      echo '</tr>';
      $i++;

    } while ($i <= 10);
      echo '</table>';
      echo '</div>';
      $j++;

    } while($j <= 10);
  }
    
    else {
      $t = -1;

      if(isset($_POST["btn0"]))
        $t = 0;
      elseif(isset($_POST["btn1"]))
        $t = 1;
      elseif(isset($_POST["btn2"]))
        $t = 2;
      elseif(isset($_POST["btn3"]))
        $t = 3;
      elseif(isset($_POST["btn4"]))
        $t = 4;
      elseif(isset($_POST["btn5"]))
        $t = 5;
      elseif(isset($_POST["btn6"]))
        $t = 6;
      elseif(isset($_POST["btn7"]))
        $t = 7;
      elseif(isset($_POST["btn8"]))
        $t = 8;
      elseif(isset($_POST["btn9"]))
        $t = 9;

      echo '<div class="w3-quarter w3-display-middle w3-responsive w3-orange">';
      echo '<table class="w3-table-all w3-hoverable w3-textblack">';
      echo '<tr class="w3-amber">';
      echo '<th class="w3-center"> Tabuada do '.$t.'</th>';
      echo '</tr>';

      for($i = 0; $i<=10; $i++) {
        echo '<tr>';
        echo '<td class="w3-center">'.$t.' X '.$i.' = '.$t*$i.'</td>';
        echo '</tr>';
      }

      echo '</table>';
      echo '</div>';
    }
 }

 ?>
</body>
</html>