<?php

class loginAdminDAO
{

    public function loginAdmin($nom)
    {
        $query = Database::connect()->prepare("SELECT * FROM `admin` where nom=?");
        $query->execute([$nom]);
        $admin = $query->fetch();
        return $admin;
    }

    public function adminListe()
    {
        $query = Database::connect()->prepare("SELECT * FROM `admin`");
        $query->execute();
        $utilisateurs = $query->fetchAll();
        return $utilisateurs;
    }

    public function DeleteAdmin($id)
    {
        $query = Database::connect()->prepare("DELETE FROM `admin` WHERE id=?");
        $query->execute([$id]);
    }

    public function VerifNom($nom)
    {
        $query = Database::connect()->prepare("SELECT count(nom) FROM `admin` WHERE nom=?");
        $query->execute([$nom]);
        $nomExiste = $query->fetch();
        return $nomExiste;
    }

    public function AjoutAdmin($nom, $hashed_pass)
    {
        $query = Database::connect()->prepare("INSERT INTO `admin` (nom,`password`) VALUES (?,?)");
        $query->execute([$nom, $hashed_pass]);
    }
}