<?php 

include_once 'functions.php';


if(isset($_GET['pw-length']) && isset($_GET['rep-word'])){
    $repeat = $_GET['rep-word'];
    $pw_length=intval($_GET['pw-length']);

    if($pw_length > 0){
        
        if($repeat==='no')$new_password = random_char_unique($pw_length);
        if($repeat==='yes')$new_password = random_char($pw_length);
        

        session_start();
        $_SESSION['password'] = $new_password;

        header('Location: alert.php');
    }
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

            <label for="repetition">Si ripetizioni</label>
            <input type="radio" name="rep-word" id="unique" value="yes">

            <label for="unique">No ripetizioni</label>
            <input type="radio" name="rep-word" id="unique" value="no">

            <button>Invia</button>
        </form>
    </main>
    <footer>
        <a href="http://localhost">Torna indietro</a>
    </footer>
</body>
</html>