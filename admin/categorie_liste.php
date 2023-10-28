<?php
require('../models/DatabaseAdmin.php');
require('../models/categorie.php');
require('../models/categorieDAO.php');

$categorieDAO = new CategorieDAO();

$categorie = $categorieDAO->ListeCategorie();
//Liste categorie
//$query="SELECT * FROM categorie";
//$result=$pdo->query($query);
//$categorie=$result->fetchAll();


$template = 'categorie_liste';
include 'layout.phtml';
?>