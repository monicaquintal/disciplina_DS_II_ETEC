<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="right" height="130" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" /></a>
<h2>Estudando PHP 🐘</h2>
<p>Disciplina: Desenvolvimento de Sistemas II - ETEC</p>
</div>

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

> O `Fichário` desenvolvido para nota nesta Agenda encontra-se no diretório `fichario_agenda03`!

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_II_ETEC)