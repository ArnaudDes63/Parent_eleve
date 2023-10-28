<?php

// On inclut le fichier header.php qui se trouve dans le dossier controllers/
include('./controllers/header.php');

// On déclare une nouvelle instance de la classe ArticlesDAO pour accéder à la base de données pour les articles
$articleDAO = new ArticlesDAO();

// On utilise la méthode ListeArticles() de la classe ArticlesDAO pour obtenir une liste de tous les articles
$listearticle = $articleDAO->ListeArticles();

// On utilise la méthode ShowArticle() de la classe ArticlesDAO pour obtenir les informations d'un article spécifique en utilisant l'ID fourni dans l'URL
$article = $articleDAO->ShowArtcile($_GET['id']);

// On définit le chemin vers le fichier de vue pour un article
$template = './view/article';

// On inclut le fichier de layout général qui se trouve dans le dossier view/
include('./view/layout.phtml');
