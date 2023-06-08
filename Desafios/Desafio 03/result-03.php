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
  $dolar = 4.92;

  // echo "<p>Seus R$ " . $numero . " reais equivale a U$$ " . ($numero * $dolar) . " doláres.</p>";
  $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); // A variável padrao , recebe o formato desejado(Brasil)
  echo "<p>Seus" .numfmt_format_currency($padrao, $numero, "BRL"). " equivalem a " . numfmt_format_currency($padrao, $numero * $dolar, "USD"). "</p>"
  ?>
  <button onclick="javascript:history.go(-1)">Voltar</button>

</body>

</html>