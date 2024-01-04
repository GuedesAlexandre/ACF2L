<?php
require_once 'Database.php';
require_once 'adherents.php';
class User{
public $USER_ID ;
protected $NOM;
protected $PRENOM;
protected $EMAIL;
protected $PASSWORD;
protected $BIRTHDATE;
protected $ADRESSE;
protected $role;

public function __construct($USER_ID = null, $NOM, $PRENOM, $EMAIL, $PASSWORD, $BIRTHDATE, $ADRESSE, $role=null){
    if($USER_ID == null){
        $this->USER_ID = rand(1,70000); }else{
        $this->USER_ID = $USER_ID;
    }
       $this->NOM = $NOM;
        $this->PRENOM = $PRENOM;
        $this->EMAIL = $EMAIL;
        $this->PASSWORD = $PASSWORD;
        $this->BIRTHDATE = $BIRTHDATE;
        $this->ADRESSE = $ADRESSE;
        if($role == null){
        $this->role = 0;
        }else{
            $this->role = $role;
        }

    }
    
    public function insertIntoTable($tableName){
        $host = "localhost";
        $username = "root";
        $password = "root";  
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO
        $hashedPassword = password_hash($this->PASSWORD, PASSWORD_DEFAULT); // Hash the password
        $query = "INSERT INTO $tableName (USER_ID, NOM, PRENOM, EMAIL, PASSWORD, BIRTHDATE, ADRESSE, role) VALUES (?,?, ?, ?, ?, ?, ?, ?)";
        $statement = $connection->prepare($query);
        $success = $statement->execute([$this->USER_ID, $this->NOM, $this->PRENOM, $this->EMAIL, $hashedPassword, $this->BIRTHDATE, $this->ADRESSE, $this->role]); // Use hashed password
        if ($success) {
            echo "<span style='color:green;'>Inscription validé</span>";
            echo "<a href='index.php'><button type='button' class='btn btn-success'>Revenir à l'acceuil</button></a>";
        } else {
            echo "Erreur lors de l'inscription veuillez contacter l'admin";
        }
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
    public static function displayUserById($id){
        $host = "localhost";
        $username = "root";
        $password = "root";  
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO
        $query = "SELECT * FROM ASTA_USER WHERE USER_ID = ?";
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
                        <h5 class="card-title text-success mb-4">Vos information</h5>
                        <p class="card-text text-light">Identifiant: ' . $user['USER_ID'].'</p>
                        <p class="card-text text-light">Email: '.$user['EMAIL'].'</p>
                        <p class="card-text text-light">ADRESSE: ' . $user['ADRESSE'] .' </p>
                        <p class="card-text text-light">Date de naissance: ' . $user['BIRTHDATE'] .' </p>
                    </div>
                </div>
        ';
            
        } else {
            echo "Utilisateur non trouvé";
        }
    }
   
    public static function checkUserExists($tableName, $email, $password2){
        $host = "localhost";
        $username = "root";
        $password = "root";  
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO
        $query = "SELECT * FROM $tableName WHERE EMAIL = ?";
        $statement = $connection->prepare($query);
        $statement->execute([$email]);
        $user = $statement->fetch(PDO::FETCH_ASSOC);
      
        if ($user && password_verify($password2, $user['PASSWORD'])) {
           return true; 
        } else {
           return false;
        }
    }
    public function getUserId() {
        return $this->USER_ID;
    }

public static function getUserByEmail($tableName, $email){
    $host = "localhost";
    $username = "root";
    $password = "root";  
    $database = "ASTA_ACF2L";
    $db = new Database($host, $username, $password, $database);
    $db->connect(); // Se connecter à la base de données
    $connection = $db->connection; // Obtenir la connexion PDO
    $query = "SELECT * FROM $tableName WHERE EMAIL = ?";
    $statement = $connection->prepare($query);
    $statement->execute([$email]);
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
  
    
    return $users;
}
    

public static function checkEmailExists($tableName, $email){
     $host = "localhost";
     $username = "root";
     $password = "root";  
     $database = "ASTA_ACF2L";
     $db = new Database($host, $username, $password, $database);
     $db->connect(); // Se connecter à la base de données
     $connection = $db->connection; // Obtenir la connexion PDO
     $query = "SELECT * FROM $tableName WHERE EMAIL = ?";
     $statement = $connection->prepare($query);
     $statement->execute([$email]);
     $user = $statement->fetch(PDO::FETCH_ASSOC);
  
     if ($user) {
         return true; 
     } else {
         return false;
     }
}
}
