<?php

// 1. exemplos de atribuição de variáveis:
$nome = "Mônica";
$idade = 31;

// 2. desvendando strings
$nome = "Mônica";
$email = 'monica@teste.com';
$texto1 = 'Olá $nome, seu email é: $email';
$texto2 = "Olá $nome, seu email é: $email";
echo $texto1 . "<br>";
echo $texto2 . "<hr>";

/*
Na primeira linha, utilizando a aspa simples, o texto representado pelo navegador é literal: “Olá $nome, seu email é: $email”
Mas quando são utilizadas aspas duplas, as variáveis retornam o valor dos seus conteúdos, deixando o resultado desta forma: "Olá Mônica, seu email é: monica@teste.com".
*/

// 3. você no comando:

/*
Utilizando o que foi visto até agora:
1. Crie um arquivo PHP na pasta Agenda 2.
a. Neste arquivo, crie 5 variáveis para armazenar respectivamente:
  • Nome Completo
  • Idade;
  • Profissão;
  • Salário.
b. Exiba, utilizando o Comando echo, os valores armazenados nas variáveis
*/

$nome_completo = "Mônica";
$idade_atualizada = 31;
$profissao = "veterinária";
$salario = "quero";

echo "Nome Completo: $nome_completo <br>";
echo "Idade: $idade_atualizada anos <br>";
echo "Profissão: $profissao <br>";
echo "Salário: $salario <br>";


?>