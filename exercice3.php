<?php

session_start();

$_SESSION['firstname'] = 'Anicet';
$_SESSION['lastname'] = 'Yedagne';

echo 'Prenom : ' . $_SESSION['firstname'] . '<br>';
echo 'Nom : ' . $_SESSION['lastname'];

?>