<?php

// Classe Metier

class LoginAdmin {

    private $id;
    private $nom;
    private $password;


    public function __construct($id, $nom, $password){

        $this->id = $id;
        $this->nom = $nom;
        $this->password = $password;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}