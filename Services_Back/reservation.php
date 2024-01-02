<?php
require_once '../Services_Back/Database.php';
class Reservation{
    public $ADHERENT_ID;
    public $ID_PILOTES;
    protected $DATE_RESERVATION;
    protected $HEURE_RESERVATION;
    protected $DESCRIPTION;

    public function __construct($ADHERENT_ID, $ID_PILOTES, $DATE_RESERVATION, $HEURE_RESERVATION, $DESCRIPTION){
        $this->ADHERENT_ID = $ADHERENT_ID;
        $this->ID_PILOTES = $ID_PILOTES;
        $this->DATE_RESERVATION = $DATE_RESERVATION;
        $this->HEURE_RESERVATION = $HEURE_RESERVATION;
        $this->DESCRIPTION = $DESCRIPTION;
    }

    public function insertReservation(){
        $host="localhost";
        $username="root";
        $password="root";
        $database="ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect();
        $connection = $db->connection;
        $query ="INSERT INTO ASTA_RESERVATION (ADHERENT_ID, ID_PILOTES, DATE_RESERVATION, HEURE_RESERVATION, DESCRIPTION) VALUES (?,?,?,?,?)";
        $statement = $connection->prepare($query);
        $success = $statement->execute([$this->ADHERENT_ID, $this->ID_PILOTES, $this->DATE_RESERVATION, $this->HEURE_RESERVATION, $this->DESCRIPTION]);
        if($success){
            echo"Réservation validé";
        }else{
            echo"Réservation invalide";
        }
    }


    
    public static function displayReservation($tableName){
        $host = "localhost";
        $username = "root";
        $password = "root"; 
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO 

        $query = "SELECT * FROM $tableName";
        $statement = $connection->prepare($query);
        $statement->execute();

        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows as $row) {
            echo '<tr class="ligne-content-info">';
            echo '<td>';
            echo '<img style="width: 37px;" alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">' . $row['ADHERENT_ID'] . '</td>';
            echo '<td>' . $row['ID_PILOTES'] . '</td>';
            echo '<td>' . $row['DATE_RESERVATION'] . '</td>';
            echo '<td>' . $row['HEURE_RESERVATION'] . '</td>';
            echo '<td style="max-width: 150px;">' . $row['DESCRIPTION'] . '</td>';
            echo '<td class="text-end">';
            echo '<form action="EditRow.php" method="post">';
            echo '<input type="hidden" name="avionId" value="' . $row['ADHERENT_ID'] . '">';
            echo '<button type="submit" class="btn btn-sm btn-neutral btn-modif">Modifier</button>';
            echo '</form>';
            echo '<form action="../Services_Back/DeleteRow.php" method="post">';
            echo '<input type="hidden" name="avionId" value="' . $row['ADHERENT_ID'] . '">';
            echo '<button type="submit" class="btn btn-sm btn-square btn-neutral text-danger-hover">';
            echo '<img src="ressources/icons/trash-icons.svg" alt=""></button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
    }

public static function deleteRow($adherentID){
    $host = "localhost";
    $username = "root";
    $password = "root"; 
    $database = "ASTA_ACF2L";
    $db = new Database($host, $username, $password, $database);
    $db->connect(); // Se connecter à la base de données
    $connection = $db->connection; // Obtenir la connexion PDO 

    $query = "DELETE FROM ASTA_AVIONS WHERE ID_AVIONS = ?";
    $statement = $connection->prepare($query);
    $success = $statement->execute([$adherentID]);

    if ($success) {
        echo "Ligne supprimée avec succès";
       
    } else {
        echo "Erreur lors de la suppression de la ligne";
    }
}

    



public static function countTableRows($tableName){
    $host = "localhost";
    $username = "root";
    $password = "root"; 
    $database = "ASTA_ACF2L";
    $db = new Database($host, $username, $password, $database);
    $db->connect(); // Se connecter à la base de données
    $connection = $db->connection; // Obtenir la connexion PDO 

    $query = "SELECT COUNT(*) as total FROM $tableName";
    $statement = $connection->prepare($query);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $totalRows = $result['total'];
   

    echo  '<span class="txt-info-card h3 font-bold mb-0">' . $totalRows . '</span>';

}
    

}
?>