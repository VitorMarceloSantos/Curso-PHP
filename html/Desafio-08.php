<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raizes</title>
</head>

<body>
  <?php
  $valor1 = $_GET['valor1'] ?? 0;
  $valor2 = $_GET['valor2'] ?? 0;
  $peso1 = $_GET['peso1'] ?? 1;
  $peso2 = $_GET['peso2'] ?? 1;

  ?>
  <main>
    <h1>Formulário</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="valor1">Valor 1</label>
      <input type="number" name="valor1" id="idvalor1" value="<?= $valor1 ?>">
      <label for="peso1">Peso 1</label>
      <input type="number" name="peso1" id="idpeso1" value="<?= $peso1 ?>">
      <label for="valor2">Valor 2</label>
      <input type="number" name="valor2" id="idvalor2" value="<?= $valor2 ?>">
      <label for="peso2">Peso 2</label>
      <input type="number" name="peso2" id="idpeso2" value="<?= $peso2 ?>">
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php
    $media = number_format((($valor1 + $valor2) / 2), 2, ',');
    $media_ponderada = number_format((($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2)), 2, ',');
    echo "<p>Media:: $media</p>";
    echo "<p>Media Ponderada: $media_ponderada</p>";
    ?>

  </section>
</body>

</html>