<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
</head>

<body>

  <header>
    <h1>Resultado do Formulário</h1>
  </header>

  <?php
  // var_dump($_REQUEST) -> mostra o que está sendo recebido no metodo(GET, POST, COOKIES)
  // var_dump($_GET) -> mostra o que está sendo recebido no metodo(GET)
  $numero = $_GET["numero"] ?? 0; // $_GET(pode utilizar o $_REQUEST) é uma variável global(possui todos os dados vindo do request)
  $sucessor = $numero + 1;
  $antecessor = $numero - 1;

  echo "
    <div class='container_result'>
    <p>O númer escolhido foi: $numero</p>
    <p>O sucessor é: $sucessor</p>
    <p>O antecessor é: $antecessor</p>
    </div>
  ";
  // Utilizando uma única variável
  echo "<p>O sucessor é: " . $numero + 1 . "</p>";
  echo "<p>O antecessor é: " . $numero - 1 . "</p>";
  ?>
  <!-- Utilizando o href e redirecionando para o arquivo -->
  <!-- <button onclick="javascript:window.location.href='Desafio-01.php'">Voltar</button> -->
  <!-- Utilizando o historico do navegador, e voltando para a página anterior -->
  <button onclick="javascript:history.go(-1)">Voltar</button>

</body>

</html>