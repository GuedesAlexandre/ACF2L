<?php




error_reporting(E_ALL & ~E_DEPRECATED);

require_once "Services_Back/User.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["date"]) && isset($_POST["email"]) && isset($_POST["Adresse"]) && isset($_POST["password"]) && isset($_POST["passwordverifie"])) {
        if (strlen($_POST["password"]) > 8 && preg_match('/^(?=.*[A-Z])(?=.*\d)/', $_POST["password"])) {
            if ($_POST["password"] == $_POST["passwordverifie"]) {
                if (User::checkEmailExists("ASTA_USER", $_POST["email"]) == false) {
                    require_once "User.php";
                    $USER = new User(null, $_POST["nom"], $_POST["prenom"], $_POST["email"], $_POST["password"], $_POST["date"], $_POST["Adresse"], 0);
                    $USER->insertIntoTable("ASTA_USER");
                    $_SESSION["USER"] = $USER;
                    $_SESSION["USER_ID"] = $USER->getUserID();
                  
                    exit();
                } else {
                    echo "<div style='color: red; margin-top: 20px;'>Erreur : Cette adresse email est déjà utilisée.</div>";
                }
            } else {
                echo '<div style="color: red; margin-top: 20px;">Erreur : Les mots de passes ne correspondent pas.</div>';
                exit();
            }
        } else {
            echo '<div style="color: red; margin-top: 20px;">Erreur : Un mot de passe doit faire minimium 8 caractères et contenir au moins une majuscule et un chiffre.</div>';
            exit();
        }
    } else {
        // Handle missing form fields
        echo '<div style="color: red; margin-top: 20px;">Erreur : Veuillez remplir tous les champs du formulaire.</div>';
        exit();
    }
}

?>