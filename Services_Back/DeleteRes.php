<?php
require_once 'Database.php';

function deleteRow($avionId){
    $host = "localhost";
    $username = "root";
    $password = "root";  
    $database = "ASTA_ACF2L";
    $db = new Database($host, $username, $password, $database);
    $db->connect(); // Se connecter à la base de données
    $connection = $db->connection; // Obtenir la connexion PDO 

    $query = "DELETE FROM ASTA_RESERVATION WHERE RESERVATION_ID = ?";
    $statement = $connection->prepare($query);
    $success = $statement->execute([$avionId]);

    if ($success) {
        echo "Ligne supprimée avec succès";
        header("Location: ../dashboard/dashboard.php");
    } else {
        echo "Erreur lors de la suppression de la ligne";
    }
}

$row = ['RESERVATION_ID' => $_POST['avionId']]; 
deleteRow($row['RESERVATION_ID']);
?>