<?php 

function random_char($length){
    $rand_word='';
    while(strlen($rand_word) < $length){
        $rand_word .= chr(64 + rand(1,26));
    }
    return $rand_word;
}

if(isset($_GET['pw-length'])){
    $pw_length=intval($_GET['pw-length']);
    var_dump($pw_length);
    $password = random_char($pw_length);
}
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
        <?php if(isset($_GET['pw-length'])) echo $password ?>
    </header>
    <main>
        <h1>PASSWORD</h1>
        <form>
            <label for="pw-length">Lunghezza passaword</label>
            <input type="number" id="pw-length" name="pw-length">
            <button>Invia</button>
        </form>
    </main>
    <footer>
        <a href="http://localhost/php-strong-password-generator/">Torna indietro</a>
    </footer>
</body>
</html>