<?php
require('../models/DatabaseAdmin.php');
require('../models/categorie.php');
require('../models/categorieDAO.php');

$categorieDAO = new categorieDAO();

$id = $_GET['id'];
$modif_ok=0;

if (isset($_POST['modifier'])) {
    
    
    $titre=$_POST['titre'];



    $categorieDAO->Modifier($titre, $id);
    //Modifier une categorie
    //$query=$pdo->prepare('UPDATE categorie SET titre=? WHERE id='.$id);
    //$query->execute([$titre]);

    $modif_ok=1;
}

$categorie_modifier = $categorieDAO->ShowCategorie($id);
//$query=$pdo->prepare('SELECT * FROM categorie WHERE id=?');
//$query->execute([$id]);
//$categorie_modifier=$query->fetch();


$template = "modifier_categorie";
include "layout.phtml";
