<?php
session_start();
require_once "../Services_Back/User.php";
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && 
isset($_POST["date"]) && isset($_POST["email"]) && isset($_POST["Adresse"])&&isset($_POST["password"]) && isset($_POST["passwordverifie"])){
    if(strlen($_POST["password"]) > 8 && preg_match('/^(?=.*[A-Z])(?=.*\d)/', $_POST["password"])){
        if($_POST["password"] == $_POST["passwordverifie"]){
            require_once "User.php";
            require_once "User.php";
            $USER = new User($USER_ID,$_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["password"], $_POST["date"], $_POST["Adresse"], 0);
            $USER->insertIntoTable("ASTA_USER");
            $_SESSION["USER"] = $USER;
            header("Location: ../index.php");
            exit();     
        }
        else{
            echo '<div style="color: red;">Passwords do not match</div>';
            exit();
        }
    }
    else{
        echo '<div style="color: red;">Un password doit faire minimium 8 caractères et contenir au moins une majuscule et un chiffre</div>';
            exit();
    }
}
else{
    // Handle missing form fields
    echo '<div style="color: red;">Veuillez remplir les champs manquants</div>';
    exit();
}


//$USER->insertIntoTable("ASTA_USER");


?>