<?php

// include('models/database.php');
// include('models/article.php');
// include('models/articleDAO.php');
include('./controllers/header.php');

$categorieDAO= new CategorieDAO();
    
    
$listecategorie=$categorieDAO->ListeCategorie();


$articleDAO = new ArticlesDAO();

$listearticle = $articleDAO->ListeArticlesDetail();






//include('models/database.php');




$template='./view/index';
include('./view/layout.phtml');