<?php

$nome = $_GET['nome'];
echo "Seja bem-vindo (a), $nome!";

/*
É utilizada uma variável super global padrão “$_GET[]” e, entre os colchetes e as aspas simples, está escrito nome. Este valor corresponde ao conteúdo atributo “name” do intput de texto criado no formulário do arquivo “resquest.php”. Desta maneira, a variável
“nome” terá o valor que for digitado pelo usuário no campo de texto.

*/

?>