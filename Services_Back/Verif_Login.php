<?php
require_once 'User.php';
session_start();
if(isset($_POST["email"]) && isset($_POST["password"])){
    $email = $_POST["email"];
    $password2 = $_POST["password"];

   
   
    if(User::checkUserExists("ASTA_USER", $email, $password2)){
      
        $_SESSION["user"] =  User::getUserByEmail("ASTA_USER", $email); 

        $_SESSION["ID_USER_CONNECTER"]= $_SESSION["user"][0];

        
        header("Location: ../index.php");
        


        
    
        
    } else {
        $_SESSION["login_error"] = "L'adresse e-mail ou mot de passe incorrect.";
        header("Location: ../login.php");
    }
}

?>