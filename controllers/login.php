<?php
  include('./controllers/header.php');
 

  $categorieDAO= new CategorieDAO();
  $userDAO = new LoginDAO;
  
  
$listecategorie=$categorieDAO->ListeCategorie();
//navigation categorie
//$query = 'SELECT * FROM categorie';
//$result = $pdo->query($query);
//$listecategorie = $result->fetchALL();


//                              CONNEXION

$connexion_error=0;

if(isset($_POST['connexion'])){

//recuperer la saisie de l utilisateur
$email=($_POST['cemail']);
$pass=$_POST['cpassword'];

$user = $userDAO->LoginUser($_POST['cemail']);
//$query=$pdo->prepare("SELECT * FROM user where Email=? /* and MotdePasse=?*/");// On enleve le Mot de passe pour le script Hash
//$query->execute([$email]);
//$user=$query->fetch();

if(password_verify($pass, $user['password'])){
$_SESSION['login_nom']=$user['nom'];
$_SESSION['login_id']=$user['id'];
header("location:index.php");
}else{
$connexion_error=1;
}
}
 
//                               Inscription



$inscription_ok=0;




    if(isset($_POST['inscription'])) {

        //recuperer la saisie de l utilisateur
        //$email=htmlspecialchars($_POST['email']);
        $pass=htmlspecialchars($_POST['password']);
        $nom=htmlspecialchars($_POST['nom']);
        $email = ($_POST['email']);

        
        $utilisateur = $userDAO->InsciptionUser($_POST['email']);
        //$verifemail = $pdo->prepare("SELECT * FROM user WHERE Email=?");
        //$verifemail->execute([$email]);         
        //$utilisateur = $verifemail->fetch();

        
        if (isset($utilisateur)) {
            $inscription_ok=2;
        } else{
            
            echo "email n'existe pas". header("location:login.php");
        
        } if ($utilisateur == 0) {

            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
            $token = bin2hex(openssl_random_pseudo_bytes(64));
            
            
            $userDAO->InsertUser($nom, $email, $hashed_pass,$token);
            //$query=$pdo->prepare("INSERT INTO user (Nom,Email,MotdePasse) VALUES (?,?,?)");
            //$query->execute([$nom,$email,$hashed_pass]);

            
            $inscription_ok=1;
        } 
        
    }   
    
    
          

    

    $template='view/login';
    include 'view/layout.phtml';
 ?>
              
