<?php

require_once "/Services_Back/Adherents.php";
$USER_ID = rand(1,907289799);
$adherent1 = new Adherents("Homme", "2 rue des alexandre le fou", "célibataire", "Depuis sa naissance", "0101010101", 0, $USER_ID, "Guedes", "Alexandre", "alexandreguedes77600@gmail.com", "Ouistiti", "00/00/2003", 1);

$adherent1 -> getNom();

?>