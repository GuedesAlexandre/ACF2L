<?php
require_once '/Services_Back/Database.php';

class User{
    protected $USER_ID ;
    private $NOM;
    private $PRENOM;
    private $EMAIL;
    private $PASSWORD;
    private $BIRTHDATE;
    private $ADRESSE;
    private $role = 0;

    
    public function __construct($USER_ID,$NOM, $PRENOM, $EMAIL, $PASSWORD, $BIRTHDATE, $role){
       $this->USER_ID = $USER_ID;
       $this->NOM = $NOM;
        $this->PRENOM = $PRENOM;
        $this->EMAIL = $EMAIL;
        $this->PASSWORD = $PASSWORD;
        $this->BIRTHDATE = $BIRTHDATE;
       
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