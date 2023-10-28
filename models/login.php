<?php

// Classe Metier

class Login
{

    private $id;
    private $nom;
    private $email;
    private $password;
    private $adresse;
    private $cp;
    private $ville;
    private $pays;
    private $numero_tel;
    private $token;


    public function __construct($id, $nom, $email, $password, $adresse, $cp, $ville, $pays, $numero_tel,$token)
    {

        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->password = $password;
        $this->adresse = $adresse;
        $this->cp = $cp;
        $this->ville = $ville;
        $this->pays = $pays;
        $this->numero_tel = $numero_tel;
        $this->token = $token;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays)
    {
        $this->pays = $pays;
    }
    public function getNumero_tel()
    {
        return $this->numero_tel;
    }

    public function setNumero_tel($numero_tel)
    {
        $this->numero_tel = $numero_tel;
    }
    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }


}