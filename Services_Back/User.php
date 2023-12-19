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
        $password = "";
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Connect to the database
        $connection = $db->connection; // Get the PDO connection
        $query = "INSERT INTO $tableName (USER_ID, NOM, PRENOM, EMAIL, PASSWORD, BIRTHDATE, ADRESSE, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $connection->prepare($query);
        $statement->execute([$this->USER_ID,$this->NOM, $this->PRENOM, $this->EMAIL, $this->PASSWORD, $this->BIRTHDATE, $this->ADRESSE, $this->role]); // Use execute with an array instead of bind_param
    }
    

}  

?>