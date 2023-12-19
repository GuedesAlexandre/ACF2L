<?php
require_once '../Services_Back/User.php';
session_start();
if(isset($_POST["email"]) && isset($_POST["password"])){
    $email = $_POST["email"];
    $password2 = $_POST["password"];
    $user = new User(0, "", "", $email, $password2, "", "", "");
    $user->checkUserExists("ASTA_USER", $email, $password2);
    if($user->checkUserExists("ASTA_USER", $email, $password2)){
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password2;
        header("Location: ../index.php");
    }else{
        header("Location: ../login/login.php");
    }
}
?>