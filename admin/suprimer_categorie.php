<?php
require('../models/DatabaseAdmin.php');
require('../models/produit.php');
require('../models/produitDAO.php');
require('../models/categorie.php');
require('../models/categorieDAO.php');




if(isset($_GET['del'])){
    
    $id=$_GET['del'];
    
    $produitDAO = new ProduitDAO();
    $produitDAO->DeleteByIdCat($id);
    //Suprimer Produit de la categorie
    //$query=$pdo->prepare("DELETE FROM produit WHERE id_Categorie=?");
    //$query->execute([$id]);
    
    $categorieDAO = new CategorieDAO();
    $categorieDAO->Delete($id);
    //Suprimer la categorie
    //$query=$pdo->prepare('DELETE FROM categorie WHERE id=?');
    //$query->execute([$id]);

    

    header("location:categorie_liste.php");

    
}



?>