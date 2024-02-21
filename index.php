<?php 

include_once 'functions.php';


if(isset($_GET['pw-length'])){
    header('Location: alert.php');

    $pw_length=intval($_GET['pw-length']);
    var_dump($pw_length);
    $new_password = random_char($pw_length);

    session_start();
    $_SESSION['password'] = $new_password;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    
    <main>
        <h1>PASSWORD</h1>
        <form>
            <label for="pw-length">Lunghezza passaword</label>
            <input type="number" id="pw-length" name="pw-length">
            <button>Invia</button>
        </form>
    </main>
    <footer>
        <a href="http://localhost">Torna indietro</a>
    </footer>
</body>
</html>