<?php
    include('./controllers/header.php');

   
    
    $categorieDAO= new CategorieDAO();
    
    
    $listecategorie=$categorieDAO->ListeCategorie();

    $categorie = $categorieDAO->ShowCategorie($id);

    




    $template='./view/categorie';
    include './view/layout.phtml';
 ?> 