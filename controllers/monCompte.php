<?php
include('./controllers/header.php');

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['login_id'])) {
    header('Location: index.php?action=connexion');
    exit;
}

$userDAO = new LoginDAO();

// Si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    $pays = $_POST['pays'];
    $numero_tel = $_POST['numero_tel'];

    // Mettre à jour les informations de l'utilisateur
    $result = $userDAO->updateUserInfo($_SESSION['login_id'], $nom, $email, $adresse, $cp, $ville, $pays, $numero_tel);

    if ($result) {
        // Rediriger l'utilisateur vers la page monCompte avec un message de succès
        header('Location: index.php?action=monCompte');
        exit;
    } else {
        // Afficher un message d'erreur
        $error = "Une erreur est survenue lors de la mise à jour de vos informations";
    }
}


// Afficher la vue
$template = './view/monCompte';
include './view/layout.phtml';
?>