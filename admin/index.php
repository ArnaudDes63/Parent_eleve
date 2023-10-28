<?php

require('../models/DatabaseAdmin.php');
require('../models/loginAdmin.php');
require('../models/loginAdminDAO.php');

$loginAdminDAO = new LoginAdminDAO();

//                              CONNEXION

$connexion_error=0;

if (isset($_POST['login'])) {

    //recuperer la saisie de l utilisateur
    $nom = ($_POST['user']);
    $pass = ($_POST['password']);

    $admin = $loginAdminDAO->loginAdmin($nom);
    //$query = $pdo->prepare("SELECT * FROM `admin` where Nom=?");
    //$query->execute([$nom]);
    //$admin = $query->fetch();

    if (isset($admin['nom'])) {
        if (password_verify($pass, $admin['password'])) {
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_pass'] = $admin['password'];
            $_SESSION['admin_user'] = $admin['nom'];

            header("location:board.php");
        } else {
            $connexion_error = 1;

        }
    }
}





$template = "index";
include 'index.phtml';

?>