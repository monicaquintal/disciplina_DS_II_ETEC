<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="right" height="130" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" /></a>
<h2>Estudando PHP 🐘</h2>
<p>Disciplina: Desenvolvimento de Sistemas II - ETEC</p>
</div>

<div id="agenda05" align="center">
<h2>Agenda 05: PHP - Arrays.</h2>
</div>

## O que são Arrays? 📃

- é um mapa ordenado, ou seja, um tipo de dado (como integer, float, string ou boolean). Porém, **pode armazenar mais de um valor, relacionando-os a chaves** (índices)!
  - No PHP, o índice pode ser um texto ou um número, e seu uso sempre está delimitado entre colchetes [ ].
- é uma variável que permite atribuir diversos valores ao mesmo tempo.

## Declarando Arrays

### Sintaxe:

~~~php
$nome_array = array ("valor1", "valor2", "valor3")

/* OU */

$nome_array = ["valor1", "valor2", "valor3"]
~~~

### Exemplo:

~~~php
$sudeste = array ("São Paulo", "Minas Gerais", "Rio de Janeiro", "Espírito Santo");

echo '<pre>';
print_r($sudeste);
echo '</pre>';
~~~

Como resultado, obtemos:

~~~
Array
(
    [0] => São Paulo
    [1] => Minas Gerais
    [2] => Rio de Janeiro
    [3] => Espírito Santo
)
~~~

Ou seja, os **índices são gerados automaticamente, e iniciam sempre em 0**.

### Outras maneiras para declarar o mesmo array:

1. Diretamente:

~~~php
$sudeste[] = "São Paulo";
$sudeste[] = "Minas Gerais";
$sudeste[] = "Rio de Janeiro";
$sudeste[] = "Espírito Santo";
~~~

2. Definindo os índices, mesmo que fora de ordem:

~~~php
$sudeste[1] = "Minas Gerais";
$sudeste[0] = "São Paulo";
$sudeste[2] = "Rio de Janeiro";
$sudeste[3] = "Espírito Santo";
~~~

### Para acessar os valores do array:

~~~php
/* utilizar o nome seguido do índice entre colchetes */
echo $sudeste[1];
~~~

> arquivo `decArray.php`

---

## Declarando Array Associativo (arrays com índices textuais)

- Podemos definir índices (keys ou chaves) como strings.
- Esse tipo de array é chamado de associativo, pois sua declaração precisa sempre associar seu íncide com o seu valor.

### Exemplos:

1. Declaração por meio de um construtor:

~~~php
$filme = array ('titulo' => 'Uma mente brilhante', 'duracao' => '135min', 'genero' => 'drama');
~~~

2. Declaração de forma direta:

~~~php
$filme['titulo'] = 'Uma mente Brilhante';
$filme['duracao'] = '135min';
$filme['genero'] = 'drama';
~~~

### Acessando os valores do array:

Utilizar o mesmo padrão: nome do array, seguido do índice entre colchetes (que neste caso é uma string).

Exemplo:

~~~php
echo $filme['titulo'].'<br>';
echo $filme['duracao'].'<br>';
echo $filme['genero'].'<br>';
~~~

> arquivo `decArrayAssociativo.php`

--- 

## Iterando um array com Estruturas de Repetição

> script `exemploForArray.php`

### Objetivo:

A partir de um array populado com todos os estados do país, criar um combobox que ofereça possibilidade de o usuário escolher o estado para o envio de mercadoria.

### Trecho do código referente à aplicação do For:

~~~php
<select class="w3-input w3-border w3-light-grey" name = "cmbEstados">
<?php
  $estados = array("estado1","estado2","...","estadoN");

  for ($i = 0; $i < count($estados); $i++) {
    echo '<option value="'.$i.'">'.$estados[$i].'</option>';
  }
?>
</select>
~~~

--- 

## Estrutura de Repetição Foreach

> script `exemploForeachArray.php`

- é a estrutura mais comum para a iteração de arrays!

~~~php
<select class="w3-input w3-border w3-light-grey" name = "cmbEstados">
<?php
  $estados = array("estado1","estado2","...","estadoN");

  foreach($estados as $estado) {
    echo '<option>'.$estado.'</option>';
  }
?>
</select>
~~~