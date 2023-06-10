<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
</head>

<body>
  <?php
  $salario = $_GET['salario'] ?? 0;
  $valorSalario = 1380;
  ?>
  <main>
    <h1>Somador de Valores</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="salario">Salario</label>
      <input type="number" name="salario" id="idsalario" value="<?= $salario ?>">
      <?php
      $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
      echo "<p>Considerando o salário mínimo de" . numfmt_format_currency($padrao, $salario, "BRL") . " .</p>"
      ?>
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php
    $quant_salario = intdiv($salario, $valorSalario);
    $resto_salario = $salario % $valorSalario;
    echo "<p>Quem recebe um salário de" . numfmt_format_currency($padrao, $salario, "BRL") . " ganha " . numfmt_format_currency($padrao, $quant_salario, "BRL") . " salários mínimos +" . numfmt_format_currency($padrao, $resto_salario, "BRL") . ".</p>";
    ?>

  </section>
</body>

</html>