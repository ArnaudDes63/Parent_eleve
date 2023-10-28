<?php
require('../models/DatabaseAdmin.php');
require('../models/categorie.php');
require('../models/categorieDAO.php');

$categorieDAO = new CategorieDAO();

$ajout_ok = 0;

if(isset($_POST['ajouter'])) {

    $titre = htmlspecialchars($_POST['titre']);

    $categorieDAO->add($Categories);
    //Ajouter une Categorie
    //$query = $pdo->prepare('INSERT INTO categorie (titre) VALUES (?) ');
    //$query->execute([$titre]);
    
    $ajout_ok = 1;

}

$template="categorie_ajouter";
include "layout.phtml";

?>