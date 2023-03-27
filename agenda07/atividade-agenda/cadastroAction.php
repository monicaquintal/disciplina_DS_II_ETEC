<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <title>Cadastro - PDO</title>
</head>
<body class="">
  <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
  <?php
        $host = "localhost";
        $usuario = "root";
        $senha = "senha";
        $bd = "pwiii";

        try {

            $conecta = new PDO("mysql:dbname=$bd; host=$host; charset=utf8", $usuario, $senha);
            $conecta->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e){

            echo "falha ao conectar: ". $e->getMessage();

        }
       
        $sql = "INSERT INTO produto (nome, preco, quantidade)

        VALUES ('".$_POST['txtNome']."', '".$_POST['txtPreco']."', '".$_POST['txtQtd']."')";
     
        try {

            $resultado = $conecta->query($sql);
            echo '
            <a href="index.php">
                <h1 class="w3-button w3-blue w3-round-large">Produto Salvo com sucesso! </h1>
            </a> 
            ';

        } catch (PDOException $e) {

            echo '
                <a href="index.php">
                    <h1 class="w3-button w3-blue w3-round-large">ERRO! </h1>
                </a> 
            ';
            
        }
    ?>
  </div>
</body>
</html>