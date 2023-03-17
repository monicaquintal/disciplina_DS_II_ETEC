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
- aplicando no mesmo exemplo acima:

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

--- 

## Funções para Arrays

Vídeos [1](https://www.youtube.com/embed/ys5KjCdvSAg?feature=oembed), [2](https://www.youtube.com/embed/O5mKRNvoWbE?feature=oembed), [3](https://www.youtube.com/embed/4XcUwfCpshg?feature=oembed) e [4](https://www.youtube.com/embed/Zz-5WjcP8_g?feature=oembed).

- is_array ($array) = verifica se determinada variavel é um array.
- in_array ($valor, $array) = verifica se um valor existe em um determinado array.
- array_keys($array) = retorna um novo array com as chavesdo array passado.
- array_values($array) = retorna um novo array com os valores do array passado.
- array_merge ($array1, $array2) = agrega os conteudos de dois arrays.
- array_pop ($array) = exclui a última posição do array.
- array_shift($array) = exclui a primeira posição do array.
- array_unshift($array, "valor") = adiciona um ou mais elementos no inicio do array.
- array_push($array, $valor, "valor") = adiciona um ou mais elementos no fim do array.
- array_combine($keys,$values) = mescla os dois arrays em chaves e valores.
- array_sum() = calcula a soma dos elementos do array.
- explode("/","20/01/2001") = transforma uma string em um array.
- implode ("-", $array) = transforma um array em uma string,

---

## Arrays multidimensionais

- trata-se de um Array que tem vinculado um outro Array para cada uma de suas posições.
- é uma array dentro de outro array!
- O PHP permite construir estruturas com quantas dimensões forem necessárias, porém o desenvolvimento será por meio de estruturas que tenham até 2 dimensões (formato de tabelas ou planilhas).

### Exemplo:

~~~php
$produtos = array(
  array("Processador","900"),
  array("Mouse","15"),
  array("Teclado","20"),
  array("Impressora","500"),
  array("Monitor","450"),
  array("Placa de Vídeo","1500"),
  array("Memória RAM 8G","500"),
  array("Placa Mãe","600"),
  array("Mouse Pad","25"),
  array("SSD","245")
);

echo '<pre>';
print_r($produtos);
echo '</pre>';
~~~

Como resultado, obtemos:

~~~
Array
(
  [0] => Array
      (
        [0] => Processador
        [1] => 900
      )

  [1] => Array
      (
        [0] => Mouse
        [1] => 15
    )

  [2] => Array
      (
        [0] => Teclado
        [1] => 20
      )

  [3] => Array
      (
        [0] => Impressora
        [1] => 500
      )

  [4] => Array
      (
        [0] => Monitor
        [1] => 450
      )

  [5] => Array
      (
        [0] => Placa de Vídeo
        [1] => 1500
      )

  [6] => Array
      (
        [0] => Memória RAM 8G
        [1] => 500
      )

  [7] => Array
      (
        [0] => Placa Mãe
        [1] => 600
      )

  [8] => Array
      (
        [0] => Mouse Pad
        [1] => 25
      )

  [9] => Array
      (
        [0] => SSD
        [1] => 245
      )
)
~~~

### Acessando os valores:

Para acessar os valores do array bidimensional, utilizar seu nome seguido dos índices entre colchetes, como a seguir:

~~~php
echo $produtos[0][0];
~~~

### Importante:

- uma alternativa para a declaração, é colocar as “colunas” com índices associativos (strings) fazendo referência a seu conteúdo. 

Exemplo:

~~~php
$produtosAssociativo = array(
 array("nome"=> "Processador","valor"=> "900" ),
 array("nome"=> "Mouse","valor"=> "15" ),
 array("nome"=> "Teclado","valor"=> "20" ),
 array("nome"=> "Impressora","valor"=> "500" ),
 array("nome"=> "Monitor","valor"=> "450" ),
 array("nome"=> "Placa de Vídeo","valor"=> "1500" ),
 array("nome"=> "Memória RAM 8G","valor"=> "500" ),
 array("nome"=> "Placa Mãe","valor"=> "600" ),
 array("nome"=> "Mouse Pad","valor"=> "25" ),
 array("nome"=> "SSD","valor"=> "245" )
 );

echo $produtosAssociativo[0]['nome'];
~~~

---

## Iteração em Array Bidimensional

- o array bidimensional pode ser tratado como uma matriz, permitindo assim o uso de estruturas de repetição de diversas formas. 
- o mais comum é utilizar a estrutura foreach.

> arquivo `iteracaoArrayMultidimensional.php`

Exemplo 1:

~~~php
$produtos = array(
  array("Processador","900"),
  array("Mouse","15"),
  array("Teclado","20"),
  array("Impressora","500"),
  array("Monitor","450"),
  array("Placa de Vídeo","1500"),
  array("Memória RAM 8G","500"),
  array("Placa Mãe","600"),
  array("Mouse Pad","25"),
  array("SSD","245")
);

echo '<table class="w3-table-all w3-hoverable w3-text-black">';
echo '<tr class="w3-grey">';
echo '<th class="w3-center">Nome</th>';
echo '<th class="w3-center">Valor</th>';
echo '</tr>';

foreach($produtos as $produto) {
  echo '<tr>';
  /* Para cada iteração, transforma o array bidimensional ($produtos) em um array unidimensional ($produto) */
  foreach($produto as $item) {
    echo '<td class="w3-center">'.$item.'</td>';
    /* transforma o array unidimensiona ($produto) em uma variável */
  }
  echo '</tr>';
}
echo '</table>';
~~~

Exemplo 2:

~~~php
$produtosAssociativo = array(
  array("nome"=> "Processador","valor"=> "900" ),
  array("nome"=> "Mouse","valor"=> "15" ),
  array("nome"=> "Teclado","valor"=> "20" ),
  array("nome"=> "Impressora","valor"=> "500" ),
  array("nome"=> "Monitor","valor"=> "450" ),
  array("nome"=> "Placa de Vídeo","valor"=> "1500" ),
  array("nome"=> "Memória RAM 8G","valor"=> "500" ),
  array("nome"=> "Placa Mãe","valor"=> "600" ),
  array("nome"=> "Mouse Pad","valor"=> "25" ),
  array("nome"=> "SSD","valor"=> "245" ),
  );

echo '<table class="w3-table-all w3-hoverable w3-text-black">';
echo '<tr class="w3-teal ">';
echo '<th class="w3-center"> Nome</th>';
echo '<th class="w3-center"> Valor</th>';
echo '</tr>';

 foreach ($produtosAssociativo as $produto) {
 echo '<tr>';
 echo '<td class="w3-center">'.$produto['nome'].'</td>';
 echo '<td class="w3-center">'.$produto['valor'].'</td>';
 echo '</tr>';

 }
 echo '</table>';
~~~

--- 

## Você no comando:

Joseph, recebeu de seu professor o desafio de criar uma tabela por meio de um array  multidimensional, populado com todos os nomes e siglas dos estados brasileiros, inclusive o Distrito Federal. Essa tabela será exibida em um site de uma escola municipal de ensino fundamental. 

Utilizando o que foi visto até agora, crie a página solicitada:

1. Crie um arquivo PHP na pasta root ou Agenda5.
2. Crie uma tabela utilizando uma estrutura de repetição.

Dicas:

- Utilize a Estrutura de Repetição Foreach
- Os índices são: “estado” e “sigla”.

> script `voceNoComando.php`

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_II_ETEC)