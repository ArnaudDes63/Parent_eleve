<?php
session_start();
//require 'fonctions_panier.php';
//$panier=new Panier;
//$panier->
//creationPanier();


class Database {
    
    // proprietes
    public static $bdd;
   
    //
    public static function connect(){

        try{
        self::$bdd = new PDO('C'est secret :) Merci Greg");
        }
        catch(Exception $erreur){
            die("ERROR connexion a la base de donnée:" .$erreur->getMessage());
        }

        return self::$bdd;
    }
    
}

?>
