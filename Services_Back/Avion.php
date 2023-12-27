<?php
require_once '../Services_Back/Database.php';

class Avion{
public $AVION_ID ;
public $PILOTE_ID ;

protected $MODELE;
protected $CAPACITE;
protected $POIDS_A_VIDE;
protected $AUTONOMIE;
protected $CONSSOMATION;
protected $DESCRIPTION;


public function __construct($AVION_ID, $PILOTE_ID, $MODELE, $CAPACITE, $POIDS_A_VIDE, $AUTONOMIE, $CONSSOMATION, $DESCRIPTION){
    $this->AVION_ID = $AVION_ID;
    $this->PILOTE_ID = $PILOTE_ID;
    $this->MODELE = $MODELE;
    $this->CAPACITE = $CAPACITE;
    $this->POIDS_A_VIDE = $POIDS_A_VIDE;
    $this->AUTONOMIE = $AUTONOMIE;
    $this->CONSSOMATION = $CONSSOMATION;
    $this->DESCRIPTION = $DESCRIPTION;
}
    
    public function insertIntoTable($tableName){
        $host = "localhost";
        $username = "root";
        $password = "root";
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO 
        $query = "INSERT INTO $tableName (ID_AVIONS,  ID_PILOTES, MODELE,  CAPACITE, POIDS_A_VIDE, AUTONOMIE, CONSSOMATION, DESCRIPTION ) VALUES (?,?, ?, ?, ?, ?, ?, ?)";
        $statement = $connection->prepare($query);
        $success = $statement->execute([$this->AVION_ID, $this->PILOTE_ID, $this->MODELE, $this->CAPACITE,  $this->POIDS_A_VIDE, $this->AUTONOMIE,$this->CONSSOMATION, $this->DESCRIPTION]); // Use hashed password
        if ($success) {
            echo "Avion ajouté";
        } else {
            echo "Erreur votre avion n'a pas pu être ajouter";
        }}
    
    public static function displayAvions($tableName){
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
           echo' <tr class="ligne-content-info">';
                                   echo' <td>';
                                      echo'  <img style="width: 37px;" alt="..."
                                            src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                            class="avatar avatar-sm rounded-circle me-2">'.$row['MODELE'] .'
                                        
                                    </td>';
                                   echo' <td>'.
                                   $row['CAPACITE'].
                                        '
                                    </td>';
                                    echo'<td>'.$row['POIDS_A_VIDE']
                                        .'Kg'.
                                    '</td>';
                                    
                                   echo' <td>'.$row['AUTONOMIE']
                                       .
                                    '</td>';
                                   echo' <td>'.$row['CONSSOMATION']
                                      .
                                    '</td>';
                                    
                                  echo'  <td style="max-width: 150px;">'. $row['DESCRIPTION']
                                        
                                   .' </td>';
                                    echo'<td class="text-end">
                                        <button href="#" class="btn btn-sm btn-neutral btn-modif">Modifier</button>
                                        <button type="button"
                                            class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <img src="ressources/icons/trash-icons.svg" alt="">
                                        </button>
                                    </td>
                                </tr>';
            
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
