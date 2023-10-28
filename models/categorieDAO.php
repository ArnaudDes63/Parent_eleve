<?php

class CategorieDAO{

    //Affiche la liste des categorie
    public function ListeCategorie(){
        $query = Database :: connect()->prepare('SELECT * FROM categorie');
        $query->execute();
        $Categories = $query->fetchAll();
        return $Categories;        
    }    

    public function ShowCategorie($id){
        $query = Database::connect()->prepare('SELECT * FROM categorie Where id=?');
        $query->execute([$id]);
        $categorie_modifier = $query->fetch();
        return $categorie_modifier;
    }

    public function add(Categorie $Categories){
		$query=Database :: connect()->prepare("INSERT INTO categorie (titre) VALUES(?)");
		$query->execute([$Categories->getTitre()]);

	}
   

}