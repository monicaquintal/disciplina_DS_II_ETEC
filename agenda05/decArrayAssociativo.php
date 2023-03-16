<?php

$filme = array('titulo' => 'Uma mente Brilhante', 'duracao' => '135min', 'genero' => 'drama');

echo '<pre>';
print_r($filme);
echo '</pre>';

echo '<hr>';

echo $filme['titulo'].'<br>';
echo $filme['duracao'].'<br>';
echo $filme['genero'].'<br>';
?>