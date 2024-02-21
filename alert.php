<?php
    session_start();
    $password = $_SESSION['password'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        Ecco la password: <?= $password ?>
    </header>
    <footer>
        <a href="http://localhost/php-strong-password-generator/">Torna indietro</a>
    </footer>
</body>
</html>