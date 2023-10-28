<?php
session_start();
//include 'controllers/fonctions_panier.php';
//creationPanier();
//$panier=new Panier;
//$panier->


class Database {

    // proprietes
    public static $bdd;

    //
    public static function connect()
    {

        
        try{
            self::$bdd = new PDO('mysql:host=mysql-dessaint-arnaud.alwaysdata.net;dbname=dessaint-arnaud_projet;charset=utf8',"286913","Reignat63");
            }
            catch(Exception $erreur){
                die("ERROR connexion a la base de donnée:" .$erreur->getMessage());
            }
    
            return self::$bdd;
        }

}

?>