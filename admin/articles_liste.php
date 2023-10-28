<?php

require('../models/DatabaseAdmin.php');
require('../models/produit.php');
require('../models/produitDAO.php');

$produitDAO = new ProduitDAO();

$article = $produitDAO->ListeArticles();
//Produit  
//$query = "SELECT * FROM produit ";
//$result = $pdo->query($query);
//$article = $result->fetchAll();


$template = 'articles_liste';
include 'layout.phtml';