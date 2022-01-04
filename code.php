<?php

// le require_once fait appel à la page choisie
// on peut créer une clé (ici BOISSON) qui nous aider à naviguer

require_once "auth.php";

if (isset($_GET['boisson'])) {
    if ($_GET['boisson'] == "the") {
        require_once "drinks/the.php";
    } elseif ($_GET['boisson'] == "gin" && $_SESSION['connected']) {
        require_once "drinks/hidden.php";
    } else {
        require_once "drinks/cafe.php";
    }
} else {
    require_once "question.php";
}
