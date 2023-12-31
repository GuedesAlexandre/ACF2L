<?php

error_reporting(E_ALL & ~E_DEPRECATED);
require_once 'Database.php';
require_once 'User.php';

class Adherents extends User {

    protected $CIVILITE;
    protected $ADRESSE;
    protected $SITUATION;
    protected $SITUATIONDATE;
    protected $TEL;

    protected $ACTIVITES;

    public function insertIntADH($tableName){
        $host = "localhost";
        $username = "root";
        $password = "root";  
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO
        $hashedPassword = password_hash($this->PASSWORD, PASSWORD_DEFAULT); // Hash the password
        $query = "INSERT INTO $tableName (ADHERENT_ID, NOM, PRENOM, CIVILITE, SITUATION, TEL, EMAIL, PASSWORD, BIRTHDATE, ADRESSE, ROLE) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $statement = $connection->prepare($query);
        $success = $statement->execute([$this->USER_ID, $this->NOM, 
        $this->PRENOM, $this->CIVILITE, $this->SITUATION, $this->TEL, $this->EMAIL, $hashedPassword, $this->BIRTHDATE, $this->ADRESSE, $this->role]); // Use hashed password
        if ($success) {
           
            echo "<span style='color:green;'>Adhérent créé </span>";
            echo "<a href='index.php'>Revenir à l'acceuil</a>";
            
        } else {
            echo "<span style='color:red;'>Adhérent créé </span>";
        }
    }
    public function __construct($CIVI, $ADDR, $SITU, $TELEPHONE,  $USER_ID, $NOM, $PRENOM, $EMAIL, $PASSWORD, $BIRTHDATE, $ADRESSE, $role) {
        parent::__construct($USER_ID, $NOM, $PRENOM, $EMAIL, $PASSWORD, $BIRTHDATE, $ADRESSE, $role);
        $this->CIVILITE = $CIVI;
        $this->ADRESSE = $ADDR;
        $this->SITUATION = $SITU;
        $this->TEL = $TELEPHONE;
       
    }
    public static function displayADHById($id){
        $host = "localhost";
        $username = "root";
        $password = "root";  
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO
        $query = "SELECT * FROM ASTA_ADHERENTS WHERE ADHERENT_ID = ?";
        $statement = $connection->prepare($query);
        $statement->execute([$id]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);
      
        if ($user) {
            echo '
            <section id="compte">
                <div class="text-center mt-5">
                    <img class="rounded-circle" src="ressources/user.jpg" alt="" style="width: 140px;">
                    <h3 class=" text-light mt-3">'.$user['NOM'].' '.$user['PRENOM'].'</h3>
                </div>
                
                <div>
                </div>
        
                <div class="my-5 text-center">
                    <div class="card-body">
                        <h5 class="card-title text-success mb-4">Vos informations</h5>
                        <p class="card-text text-light">Identifiant: ' . $user['ADHERENT_ID'].'</p>
                        <p class="card-text text-light">Civilité: '.$user['CIVILITE'].'</p>
                        <p class="card-text text-light">Email: '.$user['EMAIL'].'</p>
                        <p class="card-text text-light">Téléphone: '.$user['TEL'].'</p>
                        <p class="card-text text-light">Adresse complète: ' . $user['ADRESSE'] .' </p>
                        <p class="card-text text-light">Date de naissance: ' . $user['BIRTHDATE'] .' </p>
                        <p class="card-text text-light">Situation familiale: ' . $user['SITUATION'] .' </p>
                    </div>
                </div>
        ';
            
         
        } else {
            echo "Utilisateur non trouvé";
        }
    }

    
    public static function getUserInfo($userID) {
        $host = "localhost";
        $username = "root";
        $password = "root";  
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);

        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; 

        $query = "SELECT * FROM ASTA_USER WHERE USER_ID = :userID";
        $stmt = $connection->prepare($query);
        
        $stmt->bindParam(':userID', $userID);
        
        $stmt->execute();

        $userInfo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
        return $userInfo;
    }
    
          
    public static function getRoleById($tableName, $userId) {
        $host = "localhost";
        $username = "root";
        $password = "root";
        $database = "ASTA_ACF2L";
        
        $db = new Database($host, $username, $password, $database);
        $db->connect();
        $connection = $db->connection;

        $query = "SELECT role FROM $tableName WHERE ADHERENT_ID = ?";
        $statement = $connection->prepare($query);
        $statement->execute([$userId]);
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            if($result['role']==1){
                return 'adh';
            }else if ($result['role']==2){
                return 'admin';
            }else{
                return'user';
            }
        }
    }
    public static function checkADHExists($userID){
        $host = "localhost";
        $username = "root";
        $password = "root";  
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO
        $query = "SELECT * FROM ASTA_ADHERENTS WHERE ADHERENT_ID = ?";
        $statement = $connection->prepare($query);
        $statement->execute([$userID]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);
      
        if ($user ) {
           return true; 
        } else {
           return false;
        }
    }


    public static function displayADH(){
        $host = "localhost";
        $username = "root";
        $password = "root";  
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO 

        $query = "SELECT * FROM ASTA_ADHERENTS";
        $statement = $connection->prepare($query);
        $statement->execute();

        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows as $row) {
            echo '<tr class="ligne-content-info">';
            echo '<td>';
            echo '<img style="width: 37px;" alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">' . $row['ADHERENT_ID'] . '</td>';
            echo '<td>' . $row['NOM'] . '</td>';
           
            echo '<td>' . $row['PRENOM'] . '</td>';
            echo '<td>' . $row['CIVILITE'] . '</td>';
            echo '<td>' . $row['SITUATION'] . '</td>';
            echo '<td>' . $row['TEL'] . '</td>';
            echo '<td>' . $row['EMAIL'] . '</td>';
            echo '<td>' . $row['PASSWORD'] . '</td>';
            echo '<td>' . $row['BIRTHDATE'] . '</td>';
           
            echo '<td style="max-width: 150px;">' . $row['ADRESSE'] . '</td>';
            echo '<td class="text-end">';
            
            echo '<form action="../Services_Back/DeleteAdh.php" method="post">';
            echo '<input type="hidden" name="avionId" value="' . $row['ADHERENT_ID'] . '">';
            echo '<button type="submit" class="btn btn-sm btn-square btn-neutral text-danger-hover">';
            echo '<img src="ressources/icons/trash-icons.svg" alt=""></button>';
            echo '</form>';
            echo '</td>';
            echo '</tr>';
        }
    }
    }