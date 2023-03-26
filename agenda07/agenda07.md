<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="right" height="130" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" /></a>
<h2>Estudando PHP 🐘</h2>
<p>Disciplina: Desenvolvimento de Sistemas II - ETEC</p>
</div>

<div id="agenda06" align="center">
<h2>Agenda 07: PHP - Persistência de dados (parte 2).</h2>
<h3>PDO</h3>
</div>

## PDO

### O que é?

Trata-se de uma interface `PHP Data Objects` (PDO) que, ao ser implementada, fornece uma camada de abstração em relação a conexão com o banco de
dados.

### Vantagem

Efetuar a conexão com diversos bancos de dados da mesma forma, alterando baiscamente sua string de conexão.

### PDO x MySqli

&#32; | PDO | MySQLi
------|-----|-------
Suporte a Bancos de Dados | 12 drivers diferentes | Somente MySQLi
API | Orientada a Objetos | Orientada a Objetos + Procedural
Conexão | Fácil | Fácil
Parâmetros nomeados | Sim | Não
Mapeamento de Objetos | Sim | Sim
Sentenças Preparadas (lado do cliente) | Sim | Não 
Performance | Rápido | Mais rápido
Procedimentos armazenados | Sim | Sim

### Observação importante

Em alguns casos, o PDO deve ser habilitado no servidor para ter seu funcionamento adeuqado. No caso do USBWebServer, é possível ser habilitado a partir do arquivo php.ini, localizado na pasta settings, removendo o comentário (;) da extension=php_pdo_mysql.dll.

Em outros servidores talvez também seja necessário, a ativação do: extension=php_pdo.dll, que também é realizada removendo o (;).

<div align="center">
<img src="./assets/habilitando-pdo.png">
</div>

## Vamos começar!

1. Criando a base de dados denominada “pwiii”:

~~~sql
CREATE DATABASE `pwiii`;
~~~

2. Criando a tabela "produto":

~~~sql
CREATE TABLE `pwii`.`produto` (
 `idproduto` INT NOT NULL AUTO_INCREMENT,
 `nome` VARCHAR(45) NOT NULL,
 `preco` FLOAT NOT NULL,
 `quantidade` INT NOT NULL,
 PRIMARY KEY (`idproduto`));
~~~

3. Criação do arquivo [index.php](./atividade-agenda/index.php).

4. Criação do arquivo [cadastro.php](./atividade-agenda/cadastro.php).

5. Criação do arquivo [cadastroAction.php](./atividade-agenda/cadastroAction.php).

- neste arquivo, terá a conexão com o banco de dados através do PDO, a criação e execução da sentença sql de insert, e por fim uma mensagem de sucesso ou fracasso.
- para criar a conexão, continuamos com a boa prática criar variáveis para armazenar o nome do servidor, nome do usuário, senha e por fim o nome da base de dados. Neste momento criamos uma instância do driver PDO.

6. Criação do arquivo [listar.php](./atividade-agenda/listar.php)

- Deve conter uma tabela com seis campos (ID, Nome, Preco, Quantidade, Remover e Atualizar produto).
- Para a montagem desta tabela, vamos utilizar os dados salvos no banco de dados e vamos precisar novamente:
  - Criar instância Mysqli
  - Verificar conexão.
  - Criar sentença SQL.

PÁGINA 12