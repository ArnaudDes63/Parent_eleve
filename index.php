<?php
if (array_key_exists("action", $_GET)) {

    switch ($_GET['action']) {

        case "blog":
            include('controllers/blog.php');
            break;
        case "article":
            include('controllers/article.php');
            break;
        case "categorie":
            include('controllers/categorie.php');
            break;
        case "listeArticle":
            include('controllers/listeArticle.php');
            break;
        case "header":
            include('controllers/header.php');
            break;
        case "login":
            include('controllers/login.php');
            break;
        case "deconnexion":
            include('controllers/deconnexion.php');
            break;
        case "articleAll":
            include('controllers/articleAll.php');
            break;
        case "monCompte":
            include('controllers/monCompte.php');
            break;
        case "passwordOublier":
            include('controllers/passwordOublier.php');
            break;
        case "forgot":
            include('controllers/forgot.php');
            break;
        case "password_change_post":
            include('controllers/password_change_post.php');
            break;
        case "recover":
            include('controllers/recover.php');
            break;
        case "password_change":
            include('controllers/password_change.php');
            break;



    }


} else {
    include('controllers/index.php');
}