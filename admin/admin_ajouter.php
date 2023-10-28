<?php
require('../models/DatabaseAdmin.php'); 
require('../models/loginAdmin.php');
require('../models/loginAdminDAO.php');

$admin = new loginAdminDAO();


$ajout_ok = 0;
if (isset($_POST['ajouter'])) {

    
    $nom = ($_POST['nom']);
    $pass = htmlspecialchars($_POST['password']);

    $nomExiste = $admin->VerifNom($nom);
    //$verifnom = $pdo->prepare("SELECT count(Nom) FROM `admin` WHERE Nom=?");
    //$verifnom->execute([$nom]);
    //$nomExiste = $verifnom->fetch();


    if($nomExiste['count(nom)'] >= 1) {

        $ajout_ok = 2;
    }else {


        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);


        $admin->AjoutAdmin($nom, $hashed_pass);
        //$query = $pdo->prepare("INSERT INTO `admin` (Nom,MotdePasse) VALUES (?,?)");
        //$query->execute([$nom, $hashed_pass]);
    
        $ajout_ok = 1;
    }


}







$template = "admin_ajouter";
include "layout.phtml";
