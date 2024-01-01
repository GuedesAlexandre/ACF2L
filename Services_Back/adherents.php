<?php

require_once '/Services_Back/Database.php';
require_once '/Services_Back/User.php';

class Adherents extends User {

    protected $CIVILITE;
    protected $ADRESSE;
    protected $SITUATION;
    protected $SITUATIONDATE;
    protected $TEL;
    protected $NB_PERSONNE;
    protected $ACTIVITES;

    public function __construct($CIVI, $ADDR, $SITU, $SITUDATE, $TELEPHONE, $NB_PERS, $ACTI, $USER_ID, $NOM, $PRENOM, $EMAIL, $PASSWORD, $BIRTHDATE, $ADRESSE, $role) {
        parent::__construct($USER_ID,$NOM, $PRENOM, $EMAIL, $PASSWORD, $BIRTHDATE, $ADRESSE, $role);
        $this -> CIVILITE = $CIVI;
        $this -> ADRESSE = $ADDR;
        $this -> SITUATION = $SITU;
        $this -> SITUATIONDATE = $SITUDATE;
        $this -> TEL = $TELEPHONE;
        $this -> NB_PERSONNE = $NB_PERS;
        $this -> ACTIVITES = $ACTI;
    }
    
    public static function getUserInfo($userID) {
        $host = "localhost";
        $username = "root";
        $password = "root"; 
        $database = "ASTA_ACF2L";
        $db = new Database($host, $username, $password, $database);

        $db->connect(); // Se connecter à la base de données
        $connection = $db->connection; 

        $query = "SELECT * FROM user WHERE USER_ID = :userID";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':userID', $userID);
        $stmt->execute();

        $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        return $userInfo;
    }
            public static function DevAdh($UserID){
                
            }

            public function getCivility() { return $this->CIVILITE; }
            public function getAddress() { return $this->ADRESSE; }

            public function affiche() {
                echo "Votre nom est " . $this -> NOM;
            }


            public function getUserInfoArray($userID) {
                $userInfo = self::getUserInfo($userID);
                $userInfoArray = array(
                    'USER_ID' => $userInfo['USER_ID'],
                    'NOM' => $userInfo['NOM'],
                    'PRENOM' => $userInfo['PRENOM'],
                    'EMAIL' => $userInfo['EMAIL'],
                    'PASSWORD' => $userInfo['PASSWORD'],
                    'BIRTHDATE' => $userInfo['BIRTHDATE'],
                    'ADRESSE' => $userInfo['ADRESSE'],
                    'role' => $userInfo['role']
                );

                return $userInfoArray;
            }
        }