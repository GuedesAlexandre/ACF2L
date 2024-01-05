<?php
require_once 'Services_Back/Database.php';
class Reservation{
    public $RESERVATION_ID;
    public $ADHERENT_ID;
    public $ID_PILOTES;
    protected $DATE_RESERVATION;
    protected $HEURE_RESERVATION;
    protected $DESCRIPTION;

    public function __construct($RESERVATION_ID, $ADHERENT_ID, $ID_PILOTES, $DATE_RESERVATION, $HEURE_RESERVATION, $DESCRIPTION){
        $this->RESERVATION_ID = $RESERVATION_ID;
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
        $query ="INSERT INTO ASTA_RESERVATION (RESERVATION_ID, ADHERENT_ID, ID_PILOTES, DATE_RESERVATION, HEURE_RESERVATION, DESCRIPTION) VALUES (?,?,?,?,?,?)";
        $statement = $connection->prepare($query);
        $success = $statement->execute([$this->RESERVATION_ID, $this->ADHERENT_ID, $this->ID_PILOTES, $this->DATE_RESERVATION, $this->HEURE_RESERVATION, $this->DESCRIPTION]);
        if($success){
            echo"<span style='color: green'>Réservation validé</span>";
        }else{
            echo"<span style='color: red'>Réservation invalide</span>";
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

public function verifier_disponibilite($piloteID, $date) {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ASTA_ACF2L";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erreur de connexion : " . $conn->connect_error);
    }

    // Vérifier la disponibilité dans la base de données
    $sql = "SELECT COUNT(*) AS count FROM ASTA_RESERVATION WHERE ID_PILOTES = $piloteID AND DATE_RESERVATION = '$date'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $count = $row['count'];

        if ($count > 0) {
            echo "<span style='color: red'>Erreur : Impossible de réserver à ce créneau. Un autre vol est déjà prévu pour le pilote à cette date.</span>";
            return false; 
        }
    }

    $conn->close();
    return true;

}

public static function getUserReservations($adherentId) {
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "ASTA_ACF2L";

    $db = new Database($host, $username, $password, $database);
    $db->connect();
    $connection = $db->connection;

    $query = "SELECT r.*, p.NOM AS PILOTE_NOM, p.PRENOM AS PILOTE_PRENOM, p.BIRTHDATE AS PILOTE_BIRTHDATE, p.TYPE_AVION FROM ASTA_RESERVATION r LEFT JOIN ASTA_PILOTES p ON r.ID_PILOTES = p.ID_PILOTES WHERE r.ADHERENT_ID = ?";
    $statement = $connection->prepare($query);
    $statement->execute([$adherentId]);

    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

public static function displayUserReservations($adherentId) {
    $reservations = self::getUserReservations($adherentId);

    foreach ($reservations as $reservation) {
        echo '<tr class="ligne-content-info">';
        echo '<td>' . $reservation['PILOTE_PRENOM'] . ' ' . $reservation['PILOTE_NOM'] . '</td>';
        echo '<td>' . $reservation['DATE_RESERVATION'] . ' | ' . $reservation['HEURE_RESERVATION'] . '</td>';
        echo '<td>' . $reservation['PILOTE_BIRTHDATE'] . '</td>';
        echo '<td>' . $reservation['DESCRIPTION'] . '</td>';
        echo '<td>' . $reservation['TYPE_AVION'] . '</td>';
        echo '</tr>';
    }
}
}
?>