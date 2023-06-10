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
  $valor = $_GET['valor'] ?? 1;

  ?>
  <main>
    <h1>Formulário</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="valor">Valor</label>
      <input type="number" name="valor" id="idvalor" value="<?= $valor ?>">
      <?php
      ?>
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php
    $raiz_quadrada = number_format($valor ** (1 / 2), 2, ',');
    $raiz_cubica = number_format($valor ** (1 / 3), 2, ',');
    echo "<p>Raiz Quadrada: $raiz_quadrada</p>";
    echo "<p>Raiz Cúbica: $raiz_cubica</p>";
    ?>

  </section>
</body>

</html>