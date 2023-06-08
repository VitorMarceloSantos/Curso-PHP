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
  $inicio_data = date("m-d-Y", strtotime("-7 days"));
  $fim_data = date("m-d-Y");
  // O valor do dolar é obtido através da API do banco central.
  $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio_data.'\'&@dataFinalCotacao=\''.$fim_data.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
  $dados = json_decode(file_get_contents($url), true); // true: coloca o arquivo json dentro de um array, false: coloca o arquivo json dentro de o objeto
  $dolar = $dados["value"][0]["cotacaoCompra"];
  $numero = $_GET["numero"] ?? 0;


  // echo "<p>Seus R$ " . $numero . " reais equivale a U$$ " . ($numero * $dolar) . " doláres.</p>";
  $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY); // A variável padrao , recebe o formato desejado(Brasil)
  echo "<p>Cotação atual do Dolar: " . $dolar . "</p>";
  echo "<p>Seus" . numfmt_format_currency($padrao, $numero, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $numero * $dolar, "USD") . "</p>"
  ?>
  <button onclick="javascript:history.go(-1)">Voltar</button>

</body>

</html>