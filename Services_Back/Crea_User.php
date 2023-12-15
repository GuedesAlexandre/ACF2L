<?php
session_start();
require_once "User.php";

$USER_ID = 123; // Replace with the actual user ID

$USER = new User($USER_ID, "Guedes", "Alexandre", "alexandreguedes77600@gmail.com", "BOOM11872892", "17/11/2003", "1 allée Georges Mélies", 0);
$USER->displayAttributes();
?>