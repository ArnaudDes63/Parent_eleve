<?php

//Classe Metier

class Categorie {

    private $id;

    private $titre;

    public function __construct($id,$titre){

        $this->id = $id;
        $this->titre = $titre;
    }



    public function getId()
    {
        return $this->id;
    }

    //Pas de modification de L 'ID
    public function setId($id){
        $this->id = $id;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }
}