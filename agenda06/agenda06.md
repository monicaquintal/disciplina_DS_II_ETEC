<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="right" height="130" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" /></a>
<h2>Estudando PHP 🐘</h2>
<p>Disciplina: Desenvolvimento de Sistemas II - ETEC</p>
</div>

<div id="agenda06" align="center">
<h2>Agenda 06: PHP - Persistência de dados (parte 1).</h2>
<h3>MySQLi</h3>
</div>

## MySQLi

- trata-se de um ***driver*** que ***permite o acesso e manipulação de uma base de dados através da linguagem de programação PHP***.
- ou seja, a extensão MySQLi é um driver de banco de dados relacional usado no PHP, que fornece uma interface com os bancos de dados MySQL.
- o PHP costumava utilizar o driver homônimo do banco MySQL, que suporta as versões mais antigas do MySQL. Porém essa extensão foi descontinuada e substituida por MySQLi. 
- o “i” em MySQLi vem da palavra em língua inglesa "improved" ou "melhorado".

> As funções MySQLi funcionam apenas com PHP 5 (ou superior) e MySQL 4.1.3 (ou superior).

## Criando o Banco de Dados

No `phpMyAdmin`:

~~~sql
CREATE DATABASE `pwii`;

CREATE TABLE `pwii`.`amigo` (
 `idamigo` INT NOT NULL AUTO_INCREMENT,
 `nome` VARCHAR(45) NOT NULL,
 `apelido` VARCHAR(45) NOT NULL,
 `email` VARCHAR(45) NOT NULL,
 PRIMARY KEY (`idamigo`)
);
~~~

## Criando o index:

No `VSCode`:
> arquivo `index.php`

~~~php
<...>
<div class="w3-padding w3-text-pink w3-half w3-display-middle w3-center">
  <h1 class="w3-center w3-pink w3-round-large">Projeto Lista de Amigos</h1>
  <div class="w3-row">
    <div class="w3-col w3-button w3-deep-purple w3-cell w3-round-large" style="width:48%;">
      <a href="cadastro.php" style="text-decoration: none;">
        <i class=" fa fa-user-plus" style="font-size: 2em;">
        <p style="display: inline;">Adicionar </p></i>
      </a>
    </div>
    <div class="w3-col w3-button w3-deep-purple w3-cell w3-round-large w3-right" style="width:48%;">
      <a href="listar.php" style="text-decoration: none;">
        <i class="fa fa-address-card" style="font-size: 2em">
        <p style="display: inline;">Listar</p></i>
      </a>
    </div>
  </div>
</div>
<...>
~~~

## Criando página de cadastro

No `VSCode`:
> arquivo `cadastro.php`

~~~php
<...>
<a href="index.php" class="w3-display-topleft">
<i class="fa fa-arrow-circle-left w3-xlarge w3-deep-purple w3-button w3-round-large w3-margin-left w3-margin-top"> Voltar</i>
</a>

<div class="w3-padding w3-content w3-text-grey w3-third w3-margin w3-display-middle">
  <h1 class="w3-center w3-pink w3-round-large w3-margin">Cadastro de Amigos</h1>
  <form action="cadastroAction.php" class="w3-container" method='post'>
    <label class="w3-text-deep-purple" style="font-weight: bold;">Código</label>
    <input name="txtID" class="w3-input w3-grey w3-border" disabled><br>
    <label class="w3-text-deep-purple" style="font-weight: bold;">Nome</label>
    <input name="txtNome" class="w3-input w3-light-grey w3-border"><br>
    <label class="w3-text-deep-purple" style="font-weight: bold;">Apelido</label>
    <input name="txtApelido" class="w3-input w3-light-grey w3-border"><br>
    <label class="w3-text-deep-purple" style="font-weight: bold;">Email</label>
    <input name="txtEmail" class="w3-input w3-light-grey w3-border"><br>
    <button name="btnAdicionar" class="w3-button w3-pink w3-cell w3-round-large w3-right">
    <i class="w3-xlarge fa fa-user-plus">Adicionar</i> 
    </button>
  </form>
</div>
<...>
~~~

## Criando a conexão script-base de dados:

No `VSCode`:
> arquivo `cadastroAction.php`

Este arquivo irá ***interagir com a base de dados criada anteriormente*** (pwii), realizando a conexão com o banco, criando e executando a sentença sql de insert e, para finalizar, enviar mensagens de sucesso ou fracasso, a depender do resultado da nossa inserção de dados na base!!!

Para criar a conexão, há uma `boa prática` de ***criar variáveis para armazenar o nome do servidor, nome do usuário, senha e por fim o nome da base de dados***. Após a definição dos valores para cada uma das variáveis, criamos uma instância do mysqli, que fornecerá recursos para
realizar a inserção no banco de dados.

~~~php
$servername = "localhost";
$username = "root";
$password = "SENHA";
$dbname = "pwii";
$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}
~~~

## Criando a sentença de inserção de registros `INSERT` em `cadastroAction.php`

O próximo passo é a criação da sentença sql, para a inserção de um registro na tabela "amigo", utilizando os dados oriundos do formulário do arquivo “cadastro.php”.

~~~php
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">

<?php

$servername = "localhost";
$username = "root";
$password = "SENHA";
$dbname = "pwii";
$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}

$sql = "INSERT INTO amigo (nome, apelido, email)
        VALUES ('".$_POST['txtNome']."', '".$_POST['txtApelido']."', '".$_POST['txtEmail']."')";

if ($conexao->query($sql) === TRUE) {
    echo '
    <a href="index.php">
    <h1 class="w3-button w3-pink w3-round-large">Amigo registrado com sucesso! </h1>
    </a>
    ';
  } else {
    echo '
    <a href="index.php">
    <h1 class="w3-button w3-pink w3-round-large">ERRO!</h1>
    </a>
    ';
  }

// Tanto para a mensagem de sucesso, quanto para de falha, há links redirecionando para a página inicial!


$conexao->close(); // fecha a conexão com o banco
?>

</div>
~~~

## Criando página de listagem

No VSCode:
> arquivo `listar.php`

Este arquivo conterá uma tabela com seis campos (ID, Nome, Apelido, e-mail, remover amigo e atualizar amigo), sendo que "remover" e "atualizar" serão links que redirecionarão para páginas respectivas de exclusão e atualização de amigos! 

Para isso:
- Criar instância MySQLi.
- Verificar conexão.
- Criar sentença SQL.

~~~php
$servername = "localhost";
$username = "root";
$password = "SENHA";
$dbname = "pwii";
$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
}

echo '
<div class="w3-padding w3-content w3-half w3-display-topmiddle w3-margin">
  <h1 class="w3-center w3-pink w3-round-large">Listagem de Amigos</h1>
  <table class="w3-table-all w3-centered">
    <thead>
      <tr class="w3-center w3-deep-purple">
        <th>Código</th>
        <th>Nome</th>
        <th>Apelido</th>
        <th>Email</th>
        <th>Excluir</th>
        <th>Atualizar</th>
      </tr>
    <thead>
';

$sql = "SELECT * FROM amigo" ;
// a setença select retorna uma matriz de dados (array), ou seja, o resultado deve ser atribuído a uma variável ($resultado)
$resultado = $conexao->query($sql);

if($resultado != null)
// em caso de retorno, uma a estrutura de repetição foreach será utilizada para montar a tabela, listando todos os amigos:

foreach($resultado as $linha) {
  echo '<tr>';
  echo '<td>'.$linha['idamigo'].'</td>';
  echo '<td>'.$linha['nome'].'</td>';
  echo '<td>'.$linha['apelido'].'</td>';
  echo '<td>'.$linha['email'].'</td>';
  echo '<td><a href="excluir.php?id='.$linha['idamigo'].'&nome='.$linha['nome'].'&apelido='.$linha['apelido'].'&email='.$linha['email'].'"><i class="fa fa-user-times w3-large w3-text-deep-purple"></i></a></td></td>';
  echo '<td><a href="atualizar.php?id='.$linha['idamigo'].'&nome='.$linha['nome'].'&apelido='.$linha['apelido'].'&email='.$linha['email'].'"><i class="fa fa-spinner w3-large w3-text-deep-purple""></i></a></td></td>';
  // criados os links para  páginas de exclusão e atualização de amigos, e enviaremos os dados através da url, utilizando método get
  echo '</tr>';
}
echo '
</table>
</div>';

$conexao->close();

?>

</div>
~~~

## Criação dos arquivos: `excluir` e `excluir` (action)

PÁGINA 13