<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preços</title>
</head>

<body>
  <?php
  $preco = $_GET['preco'] ?? 0;
  $reajuste = $_GET['reajuste'] ?? 0;

  ?>
  <main>
    <h1>Formulário</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="preco">Preço do Produto:</label>
      <input type="number" name="preco" id="idpreco" value="<?= $preco ?>">
      <label for="idreajuste">Reajuste <span id="value_reaj">0</span>%</label>
      <input type="range" name="reajuste" id="idreajuste" value="<?= $reajuste ?>" min="0" max="100" step="1"
        oninput="alterar_valor()">
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $valor_reajuste = $preco * ($reajuste / 100);
    echo "<p>O reajuste de " . $reajuste . "% equivale a " . numfmt_format_currency($padrao, $valor_reajuste, "BRL") . ".</p>";
    echo "<p>O preço final é: " . numfmt_format_currency($padrao, $preco + $valor_reajuste, "BRL") . ".</p>";
    ?>
  </section>
  <script>
  function alterar_valor() {
    value_reaj.innerText = idreajuste.value
  }
  </script>
</body>

</html>