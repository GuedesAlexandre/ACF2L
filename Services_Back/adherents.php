<?php

error_reporting(E_ALL & ~E_DEPRECATED);
require_once 'Services_Back/Database.php';
require_once 'Services_Back/User.php';

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
        $password = ""; 
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

    
    public static function getUserInfo($userID) {
        $host = "localhost";
        $username = "root";
        $password = ""; 
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
            public static function DevAdh($UserID){
                
            }

            public function getCivility() { return $this->CIVILITE; }
            public function getAddress() { return $this->ADRESSE; }

            public function affiche() {
                echo "Votre nom est " . $this -> NOM;
            }


            
        }