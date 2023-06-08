<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Desafio 02</title>
</head>

<body>
  <header>
    <h1>Gerador de Número Aleatório</h1>
  </header>

  <?php
  $number = mt_rand(0, 100);
  echo "<p>O número sorteado foi: $number</p>";
  ?>
  <button onclick="javascript:window.location.reload()">Gerar Número</button>
</body>

</html>