<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
</head>

<body>

  <header>
    <h1>Resultado do Formulário</h1>
  </header>
  <?php
  // var_dump($_REQUEST) -> mostra o que está sendo recebido no metodo(GET, POST, COOKIES)
  // var_dump($_GET) -> mostra o que está sendo recebido no metodo(GET)
    $nome = $_GET["nome"] ?? "Sem nome"; // $_GET(pode utilizar o $_REQUEST) é uma variável global(possui todos os dados vindo do request)
    $sobrenome = $_GET["sobrenome"] ?? "Sem sobrenome"; // ?? caso não receba um valor vai ter um valor default
    echo "<p>É um prazer te conhercer $nome $sobrenome.</p>";
  ?>
</body>

</html>