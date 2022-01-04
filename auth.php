<?php

$pass = "ruben";
$loggedIn = false;

if (isset($_POST['password']) && $_POST['password'] == $pass) {
    $_SESSION['connected'] = true;
}

if (isset($_POST['logout'])) {
    unset($_SESSION['connected']);
    // cette ligne n'est pas néccessaire car dans form logout action='index.php'
    // header('Location: /theOuCafe');
}
