<?php
include('./controllers/header.php'); // inclusion du fichier header.php

if (!empty($_POST['password']) && !empty($_POST['password_repeat']) && !empty($_POST['token'])) {
    // vérification de la présence des champs "password", "password_repeat" et "token" dans le tableau $_POST
    $password = htmlspecialchars($_POST['password']); // récupération du mot de passe saisi dans le champ "password" du formulaire, en le protégeant contre les failles XSS
    $password_repeat = htmlspecialchars($_POST['password_repeat']); // récupération de la confirmation de mot de passe saisi dans le champ "password_repeat" du formulaire, en le protégeant contre les failles XSS
    $token = htmlspecialchars($_POST['token']); // récupération du token de l'utilisateur à partir du champ "token" du formulaire, en le protégeant contre les failles XSS

    $check = Database::connect()->prepare('SELECT * FROM user WHERE token = ?'); // préparation de la requête de vérification de l'existence du token dans la base de données
    $check->execute(array($token)); // exécution de la requête en lui passant le token comme paramètre
    $row = $check->rowCount(); // récupération du nombre de lignes retournées par la requête

    if ($row) { // si au moins une ligne est retournée
        if ($password === $password_repeat) { // si le mot de passe et la confirmation de mot de passe sont identiques
            $cost = ['cost' => 12]; // définition du coût du hachage du mot de passe
            $password = password_hash($password, PASSWORD_DEFAULT, $cost); // hachage du mot de passe avec la fonction password_hash() en utilisant l'algorithme par défaut et le coût défini

            $update = Database::connect()->prepare('UPDATE user SET password = ? WHERE token = ?'); // préparation de la requête de mise à jour du mot de passe dans la base de données
            $update->execute(array($password, $token)); // exécution de la requête en lui passant le mot de passe haché et le token comme paramètres

            $delete = Database::connect()->prepare('DELETE FROM password_recover WHERE token_user = ?'); // préparation de la requête de suppression du token de récupération de mot de passe de la base de données
            $delete->execute(array($token)); // exécution de la requête en lui passant le token comme paramètre

            $message =  "Le mot de passe a bien été modifié"; // message de confirmation de la modification du mot de passe
        } else {
            $message = "Les mots de passe ne sont pas identiques"; // message d'erreur si les mots de passe saisis ne sont pas identiques
        }
    } else {
        $message = "Compte non existant"; // message d'erreur si le compte de l'utilisateur n'existe pas
    }
} else {
    $message = "Merci de renseigner un mot de passe"; // message d'erreur si tous les champs ne sont pas remplis
}

// Afficher la vue
$template = './view/password_change_post'; // définition du chemin vers le fichier de vue à afficher
include './view/layout.phtml'; // inclusion du fichier de mise en forme de la vue
?>
