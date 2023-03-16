<?php

$produtos = array(
  array("Processador","900"),
  array("Mouse","15"),
  array("Teclado","20"),
  array("Impressora","500"),
  array("Monitor","450"),
  array("Placa de Vídeo","1500"),
  array("Memória RAM 8G","500"),
  array("Placa Mãe","600"),
  array("Mouse Pad","25"),
  array("SSD","245")
);

echo '<pre>';
print_r($produtos);
echo '</pre>';

echo '<hr>';

$produtosAssociativo = array(
  array("nome"=> "Processador","valor"=> "900" ),
  array("nome"=> "Mouse","valor"=> "15" ),
  array("nome"=> "Teclado","valor"=> "20" ),
  array("nome"=> "Impressora","valor"=> "500" ),
  array("nome"=> "Monitor","valor"=> "450" ),
  array("nome"=> "Placa de Vídeo","valor"=> "1500" ),
  array("nome"=> "Memória RAM 8G","valor"=> "500" ),
  array("nome"=> "Placa Mãe","valor"=> "600" ),
  array("nome"=> "Mouse Pad","valor"=> "25" ),
  array("nome"=> "SSD","valor"=> "245" ),
  );

echo '<pre>';
print_r($produtosAssociativo);
echo '</pre>';

echo $produtosAssociativo[0]['nome'];

 ?>