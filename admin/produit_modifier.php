<?php
require('../models/DatabaseAdmin.php');
require('../models/produit.php');
require('../models/produitDAO.php');
require('../models/categorie.php');
require('../models/categorieDAO.php');

$produitDAO = new ProduitDAO();
$categorieDAO = new CategorieDAO();

$id = $_GET['id'];

$modifierpr=0;

if (isset($_POST['ModifierProduit'])) {

    $titre=$_POST['titre'];
    $prix=$_POST['prix'];
    $stock=$_POST['stock'];
    $id_Categorie=$_POST['categorie'];
    $image=$_POST['image'];



    $produitDAO->Modifier($titre, $prix, $stock, $id_Categorie, $image, $id);
    //Modifier Produit
    //$query= Database :: connect()->prepare('UPDATE produit SET titre=?,prix=?,//id_Categorie=?,stock=?,`image`=? WHERE id='.$id);
    //$query->execute ([$titre,$prix,$id_Categorie,$stock,$image]);

    $modifierpr=1;
}

$produit_modifier = $produitDAO->ShowProduit($id);
//$query=$pdo->prepare('SELECT * FROM produit WHERE id=?');
//$query->execute([$id]);
//$produit_modifier=$query->fetch();

$recupcategorie = $categorieDAO->ListeCategorie();
//$query='SELECT * FROM categorie';
//$query=$pdo->query($query);
//$recupcategorie=$query->fetchAll();


$template = "produit_modifier";
include "layout.phtml";