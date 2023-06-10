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
  $ano_atual = date("Y");
  $ano_nascimento = $_GET['ano_nascimento'] ?? $ano_atual;


  ?>
  <main>
    <h1>Formulário</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
      <label for="ano_nascimento">Ano de Nascimentor</label>
      <input type="number" name="ano_nascimento" id="idano_nascimentor" value="<?= $ano_nascimento ?>">
      <?php
      ?>
      <input type="submit" value="Calcular">
    </form>
  </main>
  <section>
    <h2>Resultado Final</h2>
    <?php
    echo "<p>Ano Atual: $ano_atual</p>";
    echo "<p>Sua idade é: " . $ano_atual - $ano_nascimento . "</p>";
    ?>

  </section>
</body>

</html>