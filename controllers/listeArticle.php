<?php
include('./controllers/header.php');


$categorieDAO = new CategorieDAO();
$listecategorie = $categorieDAO->ListeCategorie();




$articleDAO = new ArticlesDAO();

$listearticle = $articleDAO->ListeArticles();



$template = './view/listeArticle';
include './view/layout.phtml';
?>