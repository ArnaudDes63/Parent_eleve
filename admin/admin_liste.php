<?php
require('../models/DatabaseAdmin.php'); 
require('../models/loginAdmin.php');
require('../models/loginAdminDAO.php');

$admin = new loginAdminDAO();

$utilisateurs = $admin->adminListe();
// Liste Admin
//$query = "SELECT * FROM `admin`";
//$result= $pdo->query($query);
//$utilisateurs = $result->fetchAll();

$SessionAdmin = 0;

if(isset($_GET['del'])) {

    $id = htmlspecialchars($_GET['del']);

    if($_SESSION['admin_id'] != $id) {

        $admin->DeleteAdmin($_GET['del']);
        //$query = $pdo->prepare("DELETE FROM `admin` WHERE id=?");
        //$query->execute([$id]);

        header("location:admin_liste.php");
    }else {
        $SessionAdmin = 1;
    }
}






$template = 'admin_liste';
include 'layout.phtml';

?>