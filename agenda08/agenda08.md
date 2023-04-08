<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="right" height="130" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" /></a>
<h2>Estudando PHP 🐘</h2>
<p>Disciplina: Desenvolvimento de Sistemas II - ETEC</p>
</div>

<div id="agenda06" align="center">
<h2>Agenda 08: PHP - Importação de arquivos, variáveis de sessão, cookies e hospedagem.</h2>
</div>

<div align="center">
<h2>Importação de arquivo (require e include)</h2>
</div>

No PHP, há ***quatro funções com o objetivo de importar arquivos***, e cada uma exerce uma tarefa específica. São elas:

- include ().
- include_once().
- require().
- require_once(). 

> a palavra `“once”` evita a importação de um arquivo que já tenha sido importado anteriormente, em alguma etapa do projeto!

Um dos grandes problemas em importar um arquivo que já está importado, é que as variáveis contidas no escopo desse arquivo serão resetadas, assim, os valores contidos nas variáveis já definidas em outro arquivo que já utilizou a importação, serão perdidos!!!

## `Include`:

- objetivo: ***adicionar um arquivo dentro de outro quando acessado***. 
- em qualquer problema encontrado na inclusão, será apresentado um aviso (***Warning***), que indica que não foi possível realizar sua inclusão e exibirá a página normalmente (sem a inclusão do arquivo).
- aceitam parâmetros via GET.

## `Require`:

- ***mesmo objetivo das funções include***.
- a diferença está, em situações em que o arquivo que está sendo incluido não exista ou não seja encontrado, um ***Fatal Error*** (erro fatal) é gerado, interrompendo a execução de qualquer codificação que venha após a linha da função require!
- funções require ***não aceitarem parâmetros via GET*** para o arquivo chamado. Caso utilize este parâmetro, ele será ignorado!!!

## Exemplificando:

Para exemplificar, será utilizado o projeto [Lista de Amigos](./lista-de-amigos/principal.php).

### Inicialmente, criar uma página de login:

1. Criando a tabela 'usuario':

~~~sql
CREATE TABLE `pwii`.`usuario`(
    `idusuario` INT(11) AUTO_INCREMENT,
    `nome` VARCHAR(45) NOT NULL,
    `senha` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`idusuario`)
);

INSERT INTO `pwii`.`usuario` (`nome`, `senha`) VALUES ('monica', 'monica123');
~~~

2. Renomear "index.php" para "[principal.php](./lista-de-amigos/principal.php)".

3. Criar um novo arquivo [index.php](./lista-de-amigos/index.php):

- neste arquivo vamos criar a página de login, que vai consistir em:
  - um formulário, com dois campos (nome e senha)
  - e um botão, que terá o propósito de fornecer acesso a página recentemente nomeada como principal. 

4. Desenvolvendo o arquivo [loginAction.php](./lista-de-amigos/loginAction.php).

- neste arquivo, será realizado:
  - conexão com o banco de dados através do MySQLi.
  - criação e execução da sentença sql de select, verificando se existe ou não o usuário.
  - e por fim verificando se a senha digitada no formulário é a mesma gravada no banco de dados.

5. Utilizando conceito de importação de arquivos (include ou require), para criação do arquivo [conexaoBD.php](./lista-de-amigos/conexaoBD.php):

- em uma possível troca de senha, precisaríamos apenas alterar o arquivo “conexaoBD”, e todo nosso projeto seria “atualizado” e utilizaria a senha correta.
- além disso, diminui a quantidade de códigos digitados, evita esquecimentos e erros. 

Portanto, devemos:

- codificar conforme arquivo [conexaoBD.php](./lista-de-amigos/conexaoBD.php).
- substituir esse código nos arquivos por:

~~~php
require_once 'conexaoBD.php';
/* ou */
require_once (conexaoBD.php);
~~~

6. Outra boa utilização para include/require, é criar arquivos de cabeçalho e rodapé, e utilizar a importação de arquivos, assim quando alterar nester arquivos, todo o site será atualizado.

Então, criar dois arquivos:
- [cabecalho.php](./lista-de-amigos/cabecalho.php).

~~~php
require_once ('cabecalho.php');
~~~

- [rodape.php](./lista-de-amigos/rodape.php).

~~~php
require_once ('rodape.php');
~~~

---

<div align="center">
<h2>SESSION e suas variáveis</h2>
</div>

`Variáveis de sessões`: 
- realizam o armazenamento de informações do usuário para serem utilizadas em várias páginas (como nome de usuário, cor favorita etc.). 
- contêm informações sobre um único usuário e estão disponíveis para todas as páginas durante seu acesso.

> Para iniciar uma sessão em php, utilizar a `função session_start()`, e as variáveis de sessão serão configuradas com a variável global PHP `$_SESSION`.

### Exemplo:

~~~php
session_start();
$_SESSION["Nome"] = "Monica";
$_SESSION["Idade"] = 31;
~~~

### Para obter os valores contido nas variáveis em outras páginas, iniciar novamente a sessão, e utilizá-las como o exemplo:

~~~php
session_start();
echo "Nome: ".$_SESSION["Nome"]. "e idade: ".$_SESSION["Idade"];
~~~

## Refatorando o projeto:

### 1. Atualizar o projeto e proteger o acesso via url de usuário não identificado, atualizando o arquivo [loginAction.php](./lista-de-amigos/loginAction.php).

### 2. Criar um arquivo chamado [verificarAcesso.php](./lista-de-amigos/verificarAcesso.php):

- este arquivo sempre vai verificar se há uma sessão aberta e se a variável logado está iniciada. 
- caso ela não esteja, utilizando a função nativa header, redirecionaremos o acesso para outro arquivo denominado acessoNegado.

### 3. Criar o arquivo [acessoNegado.php](./lista-de-amigos/acessoNegado.php):

- terá apenas uma mensagem de Acesso Negado e um link para a página index, para a realização do login.

### 4. Atualizar todos os arquivos inserindo na primeira linha o seguinte código:

~~~php
require_once ('verificarAcesso.php');
~~~

- A linha de código acima fará com que sempre que um usuário tente acessar via url as páginas do nosso projeto, seja verificado o acesso do mesmo. E caso ele não tenha realizado o login, sempre aparecerá a mensagem “Acesso Negado”.

### 5. Criar o arquivo [logoutAction.php](./lista-de-amigos/loginAction.php), para quando o usuário decidir deixar nossa página:

- este arquivo vai basicamente remover a variável de sessão “logado” e redirecionar (função header) para a página incial “index”, o que tornará o
login novamente necessário!
- criar um botão de logout no arquivo [principal.php](./lista-de-amigos/principal.php).

---

<div align="center">
<h2>Cookie</h2>
</div>

- são dados ou grupo de dados que o browser (navegador) e o servidor Apache trocam dados e informações entre si, enquanto o usuário utiliza as páginas do seu site. Estes dados são salvos em arquivo de texto direto no computador do usuário.
- para criar e manipular um cookie, deve-se utilizar a função `setcookie()`, sendo:
  - primeiro parâmento: um nome para o cookie.
  - segundo parâmetro: valor do cookie.
- exemplo:

~~~php
setcookie('usuario', 'monica');
~~~

- há um terceiro parâmetro utilizado para determinar um tempo de “vida” para esse cookie:

~~~php
// Criando um cookie para durar um dia
setcookie('usuario', 'monica', (time() + (24 * 3600)));
~~~

---

<div align="center">
<h2>Hospedagem, Registro de Domínios e mais!</h2>
</div>

1. `Domínio`:
- é um simplificador.
- são "nomes" que conseguem identificar máquinas por seus IPs!
- é um endereço único para um site, que serve para localizar e identificar conjuntos de computadores na internet.

2. `Hospedagem`:
- oferecem espaços em disco, espaço para contas de e-mail, espaço para armazenamento de banco de dados.
- ou seja, após reservar o domínio, deve-se contratar um plano de hospedagem para seu domínio.

---

<div align="center">
<h2>Você no Comando</h2>
</div>

## Enunciado:

"Utilizando o que foi visto até agora, foi disponibilizado uma página com o nome, disciplina e dados de vários professores. Nossa missão é restringir o acesso a a essa página, através de identificação. Esta identificação deve ser validada através da tabela (professor) criada no
banco de dados com os atributos: idprofessor, nome, disciplina e senha.

1. Obtenha os dados da tabela, utilizando o driver PDO ou Mysqli
2. Crie uma Página para um formulário para login e senha
3. Utilize Session para impedir o acesso via URL da página principal
4. Crie um botão para realizar logout na página em que os professores estão listados
5. Crie arquivos para auxilar no desenvolvimento

Dicas:

- Utilize os conceitos e exemplos de estrutura de repetição da Agenda 5.
- De preferência ao uso da estrutura de repetição Foreach.
- Agenda 6 ou 7 para acesso ao banco de dados.
- Os conceitos de importação podem te ajudar a economizar tempo."

## 1. Criando banco de dados:

~~~sql
CREATE TABLE `pwii`.`professor` (
  `idprofessor` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `disciplina` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idprofessor`)
);
~~~

~~~sql
INSERT INTO `pwii`.`professor` (`nome`, `disciplina`, `senha`) VALUES ('Paulo', 'Programação WEB II', 'paulo123');
INSERT INTO `pwii`.`professor` (`nome`, `disciplina`, `senha`) VALUES ('Guilherme', 'Programação Mobile', 'guilherme123');
INSERT INTO `pwii`.`professor` (`nome`, `disciplina`, `senha`) VALUES ('Eliana', 'Lógica de Programação', 'eliana123');
~~~

### 2. Criar os arquivos:

- [index.php](./voceNoComando/index.php):
  - contém o formulário para login e action direcionando para o arquivo “LoginAction”.
- [loginAction.php](./voceNoComando/loginAction.php):
  - contém a consulta no banco para verificação se há o professor ou não, em caso verdareiro exibirá mensagem de login realizado, com link para página de professores, em caso negativo uma mensagem de falhar com link para a página index.
- [professor.php](./voceNoComando/professor.php).
- [logoutAction.php](./voceNoComando/logoutAction.php):
  - contém a codificação para o logout do usuário conectado e o redirecionando para a página index.
- [conexaoBD.php](./voceNoComando/conexaoBD.php):
  - criado para concentrar os dados e conexão em um único arquivo.
- [acessoNegado](./voceNoComando/acessoNegado.php):
  - utilizado para quando o usuário tentar realizar o acesso a página sem login.

---

<div align="center">
<h2>Fichário</h2>
</div>

## Enunciado:

"Gabi toda orgulhosa, mostrou para sua professora de Programação WEB II o seu projeto finalizado, a professora Alice, ficou encantada com o resultado e pediu para Gabi, criar uma apresentação de seu projeto.  Gabi, ficou um pouco ansiosa, mas topou o desafio. Ela começou a pensar em uma apresentação sobre todo o funcionamento do seu projeto e como seria a melhor maneira para apresentá-lo. Lembrando que essa apresentação seria feita para os professores das outras disciplinas, portanto, ela deve se preocupar também em apresentar informações técnicas do projeto.

Para estudar mais sobre o assunto e deixar seu conhecimento bem afiado, ajude a Gabi a desenvolver essa apresentação. Para isso, será necessário abordar o projeto desenvolvido nos exemplos práticos.

Capriche nessa apresentação, mostrando as habilidades adquiridas. Vamos lá?

Dicas:

- Você pode criar uma apresentação no powerpoint, mostrando o passo a passo
- Para os exemplos práticos você pode criar vídeos explicando todo o funcionamento;
- Use sua imaginação e nos surpreenda!"

## Resposta: 

[Aqui.](./fichario/monicaQuintal_agenda08_fichario_ds_ii.pdf)

--- 

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_II_ETEC)