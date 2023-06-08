<!--Executando no container:
vitor@vitor-linux:~/Área de Trabalho/Curso-PHP/Desafios/Desafio 01$ docker cp Desafio-01.php cd6736711bb2:/var/www/html
vitor@vitor-linux:~/Área de Trabalho/Curso-PHP/Desafios/Desafio 01$ docker cp result.php cd6736711bb2:/var/www/html
http://localhost/Desafio-01.php-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Desafio 01</title>
</head>

<body>
  <header>
    <h1>Sucessor - Antecessor</h1>
  </header>

  <form action="result.php" method="get">
    <label for="nome">Numero</label>
    <input type="number" name="numero" id="idnumero">
    <input type="submit" value="Enviar">
  </form>

  <!-- <?php
  echo "Hello World! - Exercicio 01 \u{1F30E}";
  ?> -->
</body>

</html>