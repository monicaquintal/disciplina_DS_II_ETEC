<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <title>Fichário - Agenda 05 - DS II</title>
</head>

<body>

  <div class="w3-half w3-center w3-padding w3-display-middle">

    <?php

    $alunos = array(
      array("nome"=> "Aline", "primeiroSemestre"=> 10, "segundoSemestre"=> 9.5),
      array("nome"=> "Alfredo", "primeiroSemestre"=> 8, "segundoSemestre"=> 5),
      array("nome"=> "Carla", "primeiroSemestre"=> 5, "segundoSemestre"=> 6.5),
      array("nome"=> "César", "primeiroSemestre"=> 9, "segundoSemestre"=> 9),
      array("nome"=> "Daniel", "primeiroSemestre"=> 10, "segundoSemestre"=> 7),
      array("nome"=> "Esnar", "primeiroSemestre"=> 8, "segundoSemestre"=> 6),
      array("nome"=> "Henzo", "primeiroSemestre"=> 6, "segundoSemestre"=> 8),
      array("nome"=> "Pablo", "primeiroSemestre"=> 7, "segundoSemestre"=> 5),
      array("nome"=> "Wallace", "primeiroSemestre"=> 8, "segundoSemestre"=> 7),
      array("nome"=> "Zulmira", "primeiroSemestre"=> 10, "segundoSemestre"=> 6)
    );

    echo '<table class="w3-table-all w3-hoverable w3-textblack" style="box-shadow: 5px 5px 5px black;">';

    echo '<tr class="w3-pink">';
    echo '<th colspan="4" class="w3-center">8° Ano A</th>';
    echo '</tr>';

    echo '<tr class="w3-pink">';
    echo '<th class="w3-center"> Nome do Aluno</th>';
    echo '<th class="w3-center"> Nota do Primeiro Semestre</th>';
    echo '<th class="w3-center"> Nota do Segundo Semestre</th>';
    echo '<th class="w3-center"> Média</th>';
    echo '</tr>';

    foreach ($alunos as $aluno) {
    echo '<tr>';

    echo '<td class="w3-center">'.$aluno['nome'].'</td>';
    echo '<td class="w3-center">'.$aluno['primeiroSemestre'].'</td>';
    echo '<td class="w3-center">'.$aluno['segundoSemestre'].'</td>';

    $media = ($aluno['primeiroSemestre'] + $aluno['segundoSemestre'])/2;
    echo '<td class="w3-center">'.$media.'</td>';

    echo '</tr>';

    }

    echo '</table>';

    ?>

    <footer> <!-- rodapé -->
        <div class="w3-container w3-center w3-round-xlarge w3-padding w3-margin">
          <a href="https://github.com/monicaquintal" target="_blank" class="w3-hover-opacity"><img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" height="40px" class="w3-hover-opacity w3-margin-right"></a>
          <a href="https://github.com/monicaquintal" target="_blank" class="w3-hover-opacity" style="text-decoration: none;">Mônica Zungalo Quintal - 2023.</a>
        </div>
    </footer>

  </div>
</body>
</html>