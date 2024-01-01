<?php
require_once '../Services_Back/Database.php';

function deleteRow($adherentID){
    $host = "localhost";
    $username = "root";
    $password = ""; 
    $database = "ASTA_ACF2L";
    $db = new Database($host, $username, $password, $database);
    $db->connect(); // Se connecter à la base de données
    $connection = $db->connection; // Obtenir la connexion PDO 

    $query = "DELETE FROM ASTA_RESERVATION WHERE ADHERENT_ID = ?";
    $statement = $connection->prepare($query);
    $success = $statement->execute([$adherentID]);

    if ($success) {
        echo "Ligne supprimée avec succès";
        header("Location: ../dashboard/dashboard.php");
    } else {
        echo "Erreur lors de la suppression de la ligne";
    }
}

$row = ['ADHERENT_ID' => $_POST['adherentID']]; 
deleteRow($row['ADHERENT_ID']);
?>