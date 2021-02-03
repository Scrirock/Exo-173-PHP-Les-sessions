<?php session_start() ?>
<!doctype html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>page2</title>
</head>
<body style="background-color: <?= $_SESSION["couleur"] ?>">

<a href="index.html">Aller a l'acceuil</a>
<a href="page2.php">Aller a la page 2</a>
<a href="page3.php">Aller a la page 3</a>

</body>
</html>