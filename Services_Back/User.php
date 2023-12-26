<?php
require_once '../Services_Back/Database.php';

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
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);
        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; // Obtenir la connexion PDO
        $hashedPassword = password_hash($this->PASSWORD, PASSWORD_DEFAULT); // Hash the password
        $query = "INSERT INTO $tableName (USER_ID, NOM, PRENOM, EMAIL, PASSWORD, BIRTHDATE, ADRESSE, role) VALUES (?,?, ?, ?, ?, ?, ?, ?)";
        $statement = $connection->prepare($query);
        $success = $statement->execute([$this->USER_ID, $this->NOM, $this->PRENOM, $this->EMAIL, $hashedPassword, $this->BIRTHDATE, $this->ADRESSE, $this->role]); // Use hashed password
        if ($success) {
            echo "La valeur est là khoya";
        } else {
            echo "Bah non frérot";
        }
    }
<<<<<<< HEAD
=======
    
>>>>>>> parent of 6060e77 (ajout de la nouvelle branche et ajout du dashboard)

    
    public function displayAttributes(){
        echo "USER_ID: " . $this->USER_ID . "<br>";
        echo "NOM: " . $this->NOM . "<br>";
        echo "PRENOM: " . $this->PRENOM . "<br>";
        echo "EMAIL: " . $this->EMAIL . "<br>";
        echo "PASSWORD: " . $this->PASSWORD . "<br>";
        echo "BIRTHDATE: " . $this->BIRTHDATE . "<br>";
        echo "ADRESSE: " . $this->ADRESSE . "<br>";
        echo "role: " . $this->role . "<br>";
<<<<<<< HEAD
=======
    


    }

    public function checkUserExists($tableName, $email, $password2){
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
        var_dump($user);
        if ($user && password_verify($password2, $user['PASSWORD'])) {
            ob_start(); // Mettre en mémoire tampon la sortie
            header("Location: ../index.php"); // Redirection vers "../index.php"
            ob_end_clean(); // Vider le tampon de sortie
            exit; // Terminer le script après la redirection
        } else {
            echo "Email ou mot de passe incorrect";
        }
>>>>>>> parent of 6060e77 (ajout de la nouvelle branche et ajout du dashboard)
    }
}