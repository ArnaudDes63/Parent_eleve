<?php
include('./controllers/header.php');


$articleDAO = new ArticlesDAO();


$listearticle = $articleDAO->ListeArticlesDetail();



$template = './view/articleAll';
include('./view/layout.phtml');