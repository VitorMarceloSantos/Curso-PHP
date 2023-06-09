<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Super Globais</title>
</head>

<body>
  <pre>
    <?php
    // adiciona um cookie
    setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
    session_start();
    $_SESSION["teste"] = 'Funcionou';

    echo "<h1>GET</h1>";
    var_dump($_GET);

    echo "<h1>POST</h1>";
    var_dump($_POST);

    echo "<h1>REQUEST</h1>";
    var_dump($_REQUEST);


    echo "<h1>COOKIE</h1>";
    var_dump($_COOKIE);


    echo "<h1>SESSION</h1>";
    var_dump($_SESSION);

    echo "<h1>SERVER</h1>";
    var_dump($_SERVER);
    ?>
  </pre>
</body>

</html>