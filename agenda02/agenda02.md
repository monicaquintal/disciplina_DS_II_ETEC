<div align="center">
<a href="https://github.com/monicaquintal" target="_blank"><img align="right" height="130" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" /></a>
<h2>Estudando PHP 🐘</h2>
<p>Disciplina: Desenvolvimento de Sistemas II - ETEC</p>
</div>

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

[Voltar ao início.](https://github.com/monicaquintal/disciplina_DS_II_ETEC)