<?php
require_once 'Database.php';

class User{
public $USER_ID ;
protected $NOM;
protected $PRENOM;
protected $EMAIL;
protected $PASSWORD;
protected $BIRTHDATE;
protected $ADRESSE;
protected $role;

public function __construct($USER_ID, $NOM, $PRENOM, $EMAIL, $PASSWORD, $BIRTHDATE, $ADRESSE, $role){
       $this->USER_ID = rand(1,70000);
       $this->NOM = $NOM;
        $this->PRENOM = $PRENOM;
        $this->EMAIL = $EMAIL;
        $this->PASSWORD = $PASSWORD;
        $this->BIRTHDATE = $BIRTHDATE;
        $this->ADRESSE = $ADRESSE;
        $this->role = $role;

    }

    public function insertIntoTable($tableName){
        $host = "localhost";
        $username = "root";
        $password = "root";
        $database = "test_db";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO
        $query = "INSERT INTO $tableName (USER_ID, NOM, PRENOM, EMAIL, PASSWORD, BIRTHDATE, ADRESSE, role) VALUES (?,?, ?, ?, ?, ?, ?, ?)";
        $statement = $connection->prepare($query);
        $statement->execute([$this->USER_ID,$this->NOM, $this->PRENOM, $this->EMAIL, $this->PASSWORD, $this->BIRTHDATE, $this->ADRESSE, $this->role]); // Use execute with an array instead of bind_param
    }

    public function displayAttributes(){
        echo "USER_ID: " . $this->USER_ID . "<br>";
        echo "NOM: " . $this->NOM . "<br>";
        echo "PRENOM: " . $this->PRENOM . "<br>";
        echo "EMAIL: " . $this->EMAIL . "<br>";
        echo "PASSWORD: " . $this->PASSWORD . "<br>";
        echo "BIRTHDATE: " . $this->BIRTHDATE . "<br>";
        echo "ADRESSE: " . $this->ADRESSE . "<br>";
        echo "role: " . $this->role . "<br>";
    


    }
}