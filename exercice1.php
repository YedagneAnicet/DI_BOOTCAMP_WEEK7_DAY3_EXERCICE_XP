<?php
session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Bienvenue , $username! ravie de vous revoir";
} else {
    if (isset($_POST['username'])) {
        $_SESSION['username'] = $_POST['username'];
        $username = $_SESSION['username'];
        echo "Bienvenue, $username! Votre première connexion.";
    } else {
        echo '
        <form action="exercice1.php" method="post">
            <label for="username">Entrez votre nom:</label>
            <input type="text" name="username" id="username">
            <input type="submit" value="Valider">
        </form>
        ';
    }
}

if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: exercice1.php");
    exit;
}

echo '
  <form action="exercice1.php" method="post">
    <input type="submit" name="logout" value="Logout">
  </form>
';
