<?php

require 'songClass.php'; // Requiring the class file. This way we can call the class itself as the core of the application.

$song= new Song(); // Instanciating a new object.
?>

<!-- Basic HTML setup. It allows us to join JS/CSS files -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Shooter's Song</title>
</head>
<body>
    <header>

    </header>
    <main>
        <div id="songs_box">
                <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" method="post" name="song" id="song_form">
                        <label for="userAction" id="song_label">Choissisez votre couplet :</label>
                        <input id ="userAction" name="user_input" type="text">
                        <input type="submit" id="submit" value="Go !">
                    </form>
        </div>
    
    </main>
    <footer>

    </footer>
</body>
</html>
<?php 
// Starts the application. We call it at the end to be sure that everything is loaded before the script run.
$song->startSong();
?>
