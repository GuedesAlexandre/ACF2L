<?php
require_once '../Services_Back/User.php';
session_start();
if(isset($_POST["email"]) && isset($_POST["password"])){
    $email = $_POST["email"];
    $password2 = $_POST["password"];
    $user = new User(0, "", "", $email, $password2, "", "", "");
    $userId = $user->checkUserExists("ASTA_USER", $email, $password2);
    if($userId){
        $_SESSION["user"] = array(
            "userId" => $userId,
            "email" => $email,
            "password" => $password2
        );
        header("Location: ../index.php");
    }else{
        header("Location: ../login-register/login/login.php");
    }
}
?>