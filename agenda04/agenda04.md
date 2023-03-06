<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="right" height="130" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" /></a>
<h2>Estudando PHP 🐘</h2>
<p>Disciplina: Desenvolvimento de Sistemas II - ETEC</p>
</div>

<div id="agenda04" align="center">
<h2>Agenda 04: PHP - Estrutura de repetição e funções.</h2>
</div>

## Funções ⚙️

- São `blocos de código` com um nome.
- Objetivo: executar uma tarefa específica e, por meio de seu nome ser invocada e, posteriormente executada, em diversas
partes do código. 
- É uma das primeiras e mais utilizadas técnicas para reutilização de código.
- Iniciada com a palavra reservada `function`.

Sintaxe:
~~~php
function nome_da_funcao ($arg_1, $arg_2, /* ... */ $arg_n) {
 // Bloco de código
 return $valor_retornado;
}
~~~

As funções em php podem ser dos tipos:
- void: apenas executam instruções determinadas e não devolvem nenhum valor como resultado.
- com retorno: ao serem executadas, devolvem um valor ao fim de sua execução.

> Importante: O PHP não diferencia letras maiúsculas de minúsculas para o nome de funções!!!

E, para melhor entendimento:

> arquivos `exemploFuncao.php` e `exemploFuncaoAction.php`

### Funções nativas:

No php, há uma lista de [funções nativas](https://www.php.net/manual/pt_BR/indexes.functions.php), que auxiliam o desenvolvimento.<br>
Atentar-se às versões do php que suportam essa função.

---

## Estruturas de repetição

### 1. `FOR`

Sintaxe:

~~~php
for ([inicialização];[condição];[incremento ou decremento]) {
  [instrucoes];
}
~~~

Exemplo:

> arquivos `exemploFor.php` e `exemploForAction.php`

---

### 2. `WHILE`

Sintaxe:

~~~php
while (expressão) {
  [instrucoes];
}
~~~

Exemplo:

> arquivos `exemploWhile.php` e `exemploWhileAction.php`

---

### 3. `DO WHILE`

A primeira iteração é sempre executada, pois sua expressão booleana (condição) é realizada apenas no fim da estrutura!

Sintaxe:

~~~php
do {
  [instrucoes];
} while (expressão);
~~~

Exemplo:

> arquivos `exemploDoWhile.php` e `exemploDoWhileAction.php`

---

### 4. `FOREACH`

- desenvolvido para gerar iterações para o uso em arrays e objetos no PHP!