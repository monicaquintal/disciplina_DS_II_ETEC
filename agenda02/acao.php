<?php

$nome = $_GET['nome'];
$idade = $_GET['idade'];
$profissao = $_GET['profissao'];
$salario = $_GET['salario'];

echo "Seja bem-vindo (a), $nome! <br>";
echo "Você possui $idade anos. <br>";
echo "Sua profissão é $profissao. <br>";
echo "Seu salário é de $salario reais.";


?>