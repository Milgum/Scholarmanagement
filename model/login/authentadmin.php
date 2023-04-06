<?php 
require_once('../model/connectDB.php');
if(isset ($_POST["connectadmin"])){
    if(!empty($_POST["admin-username"]) && !empty($_POST["admin-password"])){  
        $admin=htmlspecialchars($_POST["admin-username"]);
        $mdp=htmlspecialchars($_POST["admin-password"]);
        $select=$db->prepare('SELECT * FROM utilisateurs WHERE nom_utilisateur=? and mot_de_passe=?');
        $select->execute(array($admin,$mdp));
        if ($select->rowCount()>0) {
            $_SESSION['auth']=true;
            $_SESSION['admin-username']=$admin;
            $_SESSION['admin-password']=$mdp;
            $_SESSION['id']=$select-> fetch()['id'];
            header('Location: indexadmin.php');
        }
        else{
            $err = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
    }
    else
    {
        echo'remplir le fomrulaire';
    }
} 
?>