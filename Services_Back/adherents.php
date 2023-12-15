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

    public function __construct($CIVI, $ADDR, $SITU, $SITUDATE, $TELEPHONE, $NB_PERS, $ACTI, $USER_ID,$NOM, $PRENOM, $EMAIL, $PASSWORD, $BIRTHDATE, $ADRESSE, $role) {
        parents::__construct($USER_ID,$NOM, $PRENOM, $EMAIL, $PASSWORD, $BIRTHDATE, $ADRESSE, $role);
        $this -> CIVILITE = $CIVI;
        $this -> ADRESSE = $ADDR;
        $this -> SITUATION = $SITU;
        $this -> SITUATIONDATE = $SITUDATE;
        $this -> TEL = $TELEPHONE;
        $this -> NB_PERSONNE = $NB_PERS;
        $this -> ACTIVITES = $ACTIVITES;
    }

    puclic function getCivilite() { return $this -> CIVILITE; }

    puclic function getAdresse() { return $this -> ADRESSE; }

    puclic function getSituation() { return $this -> SITUATION; }

    puclic function getSituationDate() { return $this -> SITUATIONDATE; }

    puclic function getTel() { return $this -> TEL; }

    puclic function getNbPersonne() { return $this -> NB_PERSONNE; }

    puclic function getActivite() { return $this -> ACTIVITES; }



}

?>