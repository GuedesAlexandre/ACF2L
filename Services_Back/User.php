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
        $db->connect(); 
        $connection = $db->connection; 
        $hashedPassword = password_hash($this->PASSWORD, PASSWORD_DEFAULT); 
        $query = "INSERT INTO $tableName (NOM, PRENOM, EMAIL, PASSWORD, BIRTHDATE, ADRESSE, role) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $connection->prepare($query);
        $statement->execute([$this->NOM, $this->PRENOM, $this->EMAIL, $hashedPassword, $this->BIRTHDATE, $this->ADRESSE, $this->role]); 
    }
    public function displayUserData($userId){
        $host = "localhost";
        $username = "root";
        $password = "root";
        $database = "test_db";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); 
        $connection = $db->connection; 

        $query = "SELECT USER_ID, NOM, PRENOM, EMAIL, BIRTHDATE, ADRESSE, role FROM users WHERE USER_ID = ?";
        $statement = $connection->prepare($query);
        $statement->execute([$userId]); 
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        if($result){
            foreach($result as $key => $value){
                echo "{$key} : {$value}<br>";
            }
        } else {
            echo "Aucun utilisateur trouvé avec l'ID : {$userId}";
        }
    }
    

}  

?>
       

    

?>