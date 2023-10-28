<?php

class LoginDAO
{

    public function LoginUser($email)
    {
        $query = Database::connect()->prepare('SELECT * FROM user where email=?');
        $query->execute([$email]);
        $user = $query->fetch();
        return $user;
    }


    public function InsciptionUser($email)
    {
        $query = Database::connect()->prepare("SELECT * FROM user WHERE email=?");
        $query->execute([$email]);
        $utilisateur = $query->fetch();
        return $utilisateur;
    }

    public function InsertUser($nom, $email, $hashed_pass,$token)
    {
        $query = Database::connect()->prepare("INSERT INTO user (nom,email,`password`,token) VALUES (?,?,?,?)");
        $query->execute([$nom, $email, $hashed_pass,$token]);

    }

    public function VerifConnexion($nom, $email)
    {
        $query = Database::connect()->prepare("SELECT count(nom,email) From user Where nom=?, email=?");
        $query->execute([$nom, $email]);
        $utilisateur = $query->fetchAll();
        return $utilisateur;
    }

    // public function userInfo($id) {
    //     $query = Database::connect()->prepare("SELECT * From user Where id=?");
    //     $query->execute([$id]);
    //     $userInfo = $query->fetch();
    //     return $userInfo;
    //     }

    //     public function updateUserInfo($id, $nom, $email, $adresse, $cp, $ville, $pays, $numero_tel) {
    //         $query = Database::connect()->prepare("UPDATE user SET nom = ?, email = ?, adresse = ?, cp = ?, ville = ?, pays = ?, numero_tel = ? WHERE id = ?");
    //         $result = $query->execute([$nom, $email, $adresse, $cp, $ville, $pays, $numero_tel]);
    //         return $result;
    //     }

    public function userInfo($id)
    {
        $query = Database::connect()->prepare("SELECT * FROM user WHERE id=?");
        $query->execute([$id]);
        $userInfo = $query->fetch();
        return $userInfo;
    }

    public function updateUserInfo($id, $nom, $email, $adresse, $cp, $ville, $pays, $numero_tel)
    {
        $query = Database::connect()->prepare("UPDATE user SET nom = ?, email = ?, adresse = ?, cp = ?, ville = ?, pays = ?, numero_tel = ? WHERE id = ?");
        $result = $query->execute([$nom, $email, $adresse, $cp, $ville, $pays, $numero_tel, $id]);
        return $result;
    }

    
    

}