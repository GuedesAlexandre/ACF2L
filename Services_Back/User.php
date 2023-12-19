<?php
require_once '/Services_Back/Database.php';

class User{
    protected $USER_ID = rand(1,892998987);
    private $NOM;
    private $PRENOM;
    private $EMAIL;
    private $PASSWORD;
    private $BIRTHDATE;
    private $ADRESSE;
    private $role;

    public function __construct($USER_ID,$NOM, $PRENOM, $EMAIL, $PASSWORD, $BIRTHDATE, $ADRESSE, $role){
       $this->USER_ID = $USER_ID;
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
        $db->connect(); // Connect to the database
        $connection = $db->connection; // Get the PDO connection
        $query = "INSERT INTO $tableName (USER_ID,NOM, PRENOM, EMAIL, PASSWORD, BIRTHDATE, ADRESSE, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $connection->prepare($query);
        $statement->execute([$this->USER_ID,$this->NOM, $this->PRENOM, $this->EMAIL, $this->PASSWORD, $this->BIRTHDATE, $this->ADRESSE, $this->role]); // Use execute with an array instead of bind_param
    }
    

}  

?>