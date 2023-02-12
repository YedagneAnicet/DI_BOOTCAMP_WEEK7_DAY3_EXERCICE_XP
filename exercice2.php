<?php

if (isset($_POST['username'])) {
    setcookie('username', $_POST['username'], time() + (86400 * 30), "/"); 
    header("Location: exercice2.php");
    exit;
}

if (isset($_COOKIE['username'])) {
    echo "Bienvenue , " . $_COOKIE['username'] . " ravie de vous revoir";
} else {
    echo '<form action="" method="post">
        <input type="text" name="username" placeholder="Entrez votre nom">
        <input type="submit" value="Se connecter">
    </form>';
}
