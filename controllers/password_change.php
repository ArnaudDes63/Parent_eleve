<?php

include('./controllers/header.php');

// Vérifie si le paramètre 'u' a été transmis en GET et s'il n'est pas vide. Si c'est le cas, décode la valeur de 'u' qui est encodée en base64, puis exécute une requête pour récupérer les informations de récupération de mot de passe correspondantes dans la table password_recover. Si aucune ligne n'est renvoyée par la requête, affiche un message d'erreur et arrête l'exécution du script.


if (!empty($_GET['u'])) {
    $token = htmlspecialchars(base64_decode($_GET['u']));
    $check = Database::connect()->prepare('SELECT * FROM password_recover WHERE token_user = ?');
    $check->execute(array($token));
    $row = $check->rowCount();

    if ($row == 0) {
        echo "Lien non valide";
        die();
    }
}



$template = './view/password_change';
include './view/layout.phtml';
?>