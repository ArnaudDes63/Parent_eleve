<?php
require('../models/DatabaseAdmin.php');
require('../models/article.php');
require('../models/articleDAO.php');

$articleDAO = new ArticlesDAO();


if (isset($_GET['del'])) {

    $id = $_GET['del'];

    $articleDAO->Delete($id);
    //Suprimer un produit
    //$query=$pdo->prepare("DELETE FROM produit WHERE id=?");
    //$query->execute([$id]);
    header('location:articles_liste.php');

}


include 'layout.phtml';

?>