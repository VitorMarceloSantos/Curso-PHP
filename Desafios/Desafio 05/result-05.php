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
  $numero = $_GET["numero"] ?? 0;
  $int = (int) $numero;
  $frac = $numero - $int;

  echo "<p>Analisando o numero: ".number_format($numero, 3, ",", ".")."</p>";
  echo "<p>Parte Inteira: ".number_format($int, 0, ",", ".")."</p>";
  echo "<p>Parte Fracionaria: ".number_format($frac, 3, ",", ".")."</p>";
  ?>
  <button onclick="javascript:history.go(-1)">Voltar</button>

</body>

</html>