<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="right" height="130" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" /></a>
<h2>Estudando PHP 🐘</h2>
<h3>Disciplina: Desenvolvimento de Sistemas II - ETEC</h3>
<p>Repositório para atividades estudadas e desenvolvidas ao longo do semestre.</p>
</div>

<div id="conteudo" align="justify">

## Conteúdo
     
<a href="#agenda01">Agenda 01: Introdução a Server-Side.</a><br>
<a href="#agenda02">Agenda 02: Variáveis e métodos GET e POST.</a><br>
<a href="#agenda03">Agenda 03: Estrutura de decisão e Operadores gerais.</a><br>
<a href="#agenda04">Agenda 04: </a><br>
<a href="#agenda05">Agenda 05: </a><br>
<br>

## Mais PHP:
<a href="https://github.com/monicaquintal/estudandoPHP">estudandoPHP</a><br>
<a href="https://github.com/monicaquintal/app-help-desk">app-help-desk</a><br>
<a href="https://github.com/monicaquintal/estudandoPHP-orientacao-a-objetos">estudandoPHP-orientacao-a-objetos</a><br>
<a href="https://github.com/monicaquintal/app-send-mail">app-send-mail</a><br>
</div>

<div id="agenda01" align="center">
<h2>Agenda 01: Introdução a Server-Side.</h2>
</div>

### Introdução:

`PHP`: Hypertext Preprocessor – Pré processador de hipertexto!

Quando o usuário digita o endereço de um site no navegador do computador e pressiona a tecla “Enter”, ele faz uma solicitação, que
chamamos de ***requisição para o servidor*** (do outro computador). Esse servidor, por sua vez, processa essa requisição, consulta o seu banco de dados e devolve uma resposta para o seu navegador. Esse código que é executado do lado do servidor utiliza linguagens, como: Perl, Ruby, Python, PHP, Java e C#!

`Servidores Web`: há diversas opções no mercado de pacotes de softwares que já instalam e configuram o servidor web, a linguagem PHP e banco de dados, como: XAMP, WAMP, EasyPHP, AppServ e Zwamp.

### Criando o primeiro arquivo PHP:

> arquivo `ola-mundo.php`

Importante: 
- nunca utilizar caracteres especias e espaços em branco para nomear arquivos.
- delimitadores PHP:

~~~php
<?php
  echo "Olá Mundo";
?>
~~~

- comentários:

~~~php
<?php
//Comentário.
?>

<?php
/*
 Comentário em Bloco
 */
?>
~~~

> A atividade para nota da semana foi um Simulado, que encontra-se no arquivo `simulado.md`!

<hr>

<div id="agenda02" align="center">
<h2>Agenda 02: Variáveis e métodos GET e POST.</h2>
</div>

### Variáveis:

Em PHP 🐘:

- a variável é definida de forma dinâmica: uma variável pode conter valores de diferentes tipos em diferentes momentos da execução dos comandos. 
- variáveis no PHP são identificadas pelo caracter “$” (cifrão).
- é uma linguagem case-sensitive.
- um nome de variável válido pode iniciar com uma letra ou underline (sublinhado), seguido de qualquer quantidade de letras, números ou sublinhados.
- o separador de casas decimais também é o ponto, assim como em java.
- para se atribuir valores a uma variável String, utilizam-se aspas simples ou duplas:
  - quando são utilizadas aspas duplas para a construção da string, as variáveis retornam o valor dos seus conteúdos (diferente de quando usamos aspas simples, onde será retornada a string de forma literal -"Olá $nome").
- a concatenação é realizada por meio do ponto final “.”.
- em variáveis booleanas, os valores armazenados são verdadeiros (TRUE) e falso (FALSE). Em PHP, temos:
  - valor 1 é considerado verdadeiro, enquanto o valor NULL é considerado falso.
  - valores numéricos diferentes de 0 (zero) são considerados como TRUE, enquanto o zero é considerado FALSE.
  - valores strings preenchidos são considerados TRUE, enquanto strings vazias (“”) e o texto “0” é tido como FALSE.
  - arrays vazios ou objetos sem conteúdo são considerados como FALSE, já o inverso é logicamente TRUE.
  - valor NULL é considerado FALSE.

> arquivo `variaveis.php`

### Formulários - métodos GET e POST:

O `método GET` utiliza a URL do site para enviar as requisições. Há um caractere que indica o início da criação das variáveis e outro caractere que faz a separação entre as variáveis.

> arquivos `request_get.php` e `acao_get.php`!

É utilizada uma ***variável super global padrão “$_GET[]”*** e, entre os colchetes e as aspas simples, está escrito nome. Este valor corresponde ao conteúdo atributo “name” do intput de texto criado no formulário do arquivo “resquest.php”. Desta maneira, a variável
“nome” terá o valor que for digitado pelo usuário no campo de texto.

Na URL do navegador, após o nome do arquivo “request.php”, teremos os dados transferidos (pelo método GET), por meio da URL do próprio navegador.]

Já no `método POST`, a transferência de dados é realizada de forma oculta junto ao protocolo HTTP. Com este método há algumas vantagens como:
- Não há limite de tamanho dos dados que estão sendo enviados, ao contrário do que acontece com o método GET (255);
- Por meio do método POST, é possível enviar outros tipos de dados o que não é possível com o método get.

> arquivos `request_post.php` e `acao_post.php`!

### Você no comando:

Utilizando o que foi visto até agora:
1. Crie um arquivo PHP na pasta Agenda 2.
a. Neste arquivo, crie um formulário com os campos:
- Nome Completo
- Idade;
- Profissão;
- Salário.
2. Crie um arquivo PHP para receber a ação do botão enviar.<br>
a. Este deverá exibir no navegador uma informação em cada linha.<br>
b. Utilize o método que você achar melhor.

> O `Fichário` desenvolvido para nota nesta Agenda encontra-se no diretório `fichario_agenda02`!

<hr>

<div id="agenda03" align="center">
<h2>Agenda 03: PHP - Estrutura de decisão e Operadores gerais.</h2>
</div>

### Operadores:

***A) Aritméticos:***

OPERADOR | REPRESENTAÇÃO  
:-----: | :----------: 
Adição | + 
Subtração | - 
Multiplicação | * 
Divisão | / 
Módulo | % 

***B) De atribuição:***

OPERADOR | RERESENTAÇÃO 
:------: | :----------: 
Atribuição simples | =
Com adição | +=
Com subtração | -=
Com multiplicação | *= 
Com divisão | /=
Com módulo | %=
Concatenação | .=

***C) Relacionais:***

| OPERADOR     | REPRESENTAÇÃO |
| ------------ | :-----------: |
| Igual a      |      ==       | 
| Idêntico     |      ===      | 
| Diferente    |      !=       | 
| Diferente    |   &lt;&gt;    | 
| Menor        |     &lt;      |
| Maior        |     &gt;      | 
| Menor igual  |     &lt;=     | 
| Maior igual  |     &gt;=     | 

***D) Lógicos:***

| OPERADOR |   REPRESENTAÇÃO    | 
| :------: | :----------------: |
|    E     |     AND ou &&      |
|    OU    | OR ou &#124;&#124; | 
|   Ou exclusivo    |        XOR         | 
| Negação (inversão)  |         !          | 

### Desvios condicionais:

### A) Desvio condicional simples:

~~~php
if(expressao) {
  [instrucoes];
}
~~~

> arquivos `desvioSimples.php` e `desvioSimplesAction.php`

### B) Desvio composto:

~~~php
if(expressao) {
 [instrucoes]; // Se verdadeiro
} else {
 [instrucoes]; // Se falso
} 
~~~

> arquivos `desvioComposto.php` e `desvioCompostoAction.php`

### Encadeamento de decisões

No php existe o comando ***elseif***, utilizado para quando o encadeamento de condições fica em uma cascata contínua; em uma codificação longa, seu uso pode deixar seu código mais limpo, diminuindo o número de chaves. 

> arquivos `desvioComposto.php` e `desvioCompostoAction.php`

### Switch

~~~php
switch($op) {
  case 1:
    echo "A";
    break;
  case 2:
    echo "B";
    break;
  default:
    echo "Erro";
}

/* o "break" deve estar em todas as opções, menos na última! */
~~~

### Operador ternário

Utilizado quando as condições são tão simples que só há duas possibilidades, uma para verdadeiro e outra para falso.

~~~php
$variavel valor ? "retorno caso true" : "retorno caso false";
~~~

Inicialmente definimos um teste qualquer, retornando um valor booleano, depois, determinamos o primeiro parâmetro após o ponto de interrogação (valor que deverá ser retornado **caso o teste seja verdadeiro** - retorno booleano “true”) e o segundo parâmetro,
após os dois pontos (que será retornado **caso seja falso** - retorno booleano “false”). 

### Concluindo

> arquivos `voceNoComando.php` e `vcNoComandoAction.php`