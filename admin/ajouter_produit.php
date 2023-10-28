<?php
require('../models/DatabaseAdmin.php');
require('../models/article.php');
require('../models/articleDAO.php');



$articleDAO = new ArticlesDAO();
// $categorieDAO = new CategorieDAO();
 
$ajout_ok=0;

if(isset($_POST['ajouterArticle'])){

    $titre=$_POST['titre'];
    $paragraphe=$_POST['paragraphe'];    
    $image=$_POST['image'];

    $Articles = new Article(0,$_POST['titre'],$_POST['paragraphe'],$_POST['image']);

    $articleDAO->add($Articles);
    //Ajouter Produit
    //$query=$pdo->prepare("INSERT INTO produit (titre,prix,id_Categorie,stock,`image`) VALUES(?,?,?,?,?)");
    //$query->execute([$titre,$prix,$id_categorie,$stock,$image]);

    $ajout_ok=1;
}



// $categories = $categorieDAO->ListeCategorie();
//$query = 'SELECT * FROM categorie';
//$query = $pdo->query($query);
//$categories=$query->fetchAll();



$template="ajouter_produit";
include "layout.phtml";

?>