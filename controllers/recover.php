<?php

// Inclusion du fichier header.php dans la page courante
include('./controllers/header.php');



// Vérification que les variables $_GET['u'] et $_GET['token'] ne sont pas vides
if (!empty($_GET['u']) && !empty($_GET['token'])) {

    // Décodage des variables $_GET['u'] et $_GET['token'] et stockage des résultats dans les variables $u et $token
    $u = htmlspecialchars(base64_decode($_GET['u']));
    $token = htmlspecialchars(base64_decode($_GET['token']));

    // Préparation d'une requête SQL pour récupérer toutes les colonnes de la table password_recover où token_user est égal à $u et token est égal à $token
    $check = Database::connect()->prepare('SELECT * FROM password_recover WHERE token_user = ? AND token = ?');

    // Exécution de la requête SQL en utilisant les valeurs de $u et $token comme paramètres
    $check->execute(array($u, $token));

    // Récupération du nombre de lignes renvoyées par la requête SQL
    $row = $check->rowCount();

    // Récupération de la première ligne renvoyée par la requête SQL
    $data = $check->fetch();

    // Vérification que la requête SQL a renvoyé au moins une ligne
    if ($row) {

        // Préparation d'une requête SQL pour récupérer le champ token de la table user où token est égal à $u
        $get = Database::connect()->prepare('SELECT token FROM user WHERE token = ?');

        // Exécution de la requête SQL en utilisant la valeur de $u comme paramètre
        $get->execute(array($u));

        // Récupération de la première ligne renvoyée par la requête SQL
        $data_u = $get->fetch();

        // Vérification que la valeur du champ token dans la table user est égale à $u en utilisant la fonction hash_equals()
        if (hash_equals($data_u['token'], $u)) {

            // Redirection vers la page password_change.php en passant la valeur de $u encodée en base64 dans la variable $_GET['u']
            header('Location: index.php?action=password_change&u=' . base64_encode($u));

            // Arrêt de l'exécution du script
            die();
        } else {

            // Affichage d'un message d'erreur si la valeur de $u ne correspond pas à la valeur du champ token dans la table user
            echo "Erreur : token non valide";
        }
    } else {

        // Affichage d'un message d'erreur si aucune ligne n'a été renvoyée par la requête SQL
        echo "Erreur : compte inexistant";
    }
} else {

    // Affichage d'un message d'erreur si les variables $_GET['u'] et $_GET['token'] sont vides
    echo "Lien non valide";
}