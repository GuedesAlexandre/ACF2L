<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

<link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    


  

    <title>Réservation | AFC2L</title>
</head>


    <section id="reservation-page">
    <header class="container-fluid">
        <nav class="row navbar navbar-expand-lg navbar-light">
            <div class="container-fluid col-0 col-lg-11">
                <a class="nav-link logo px-0" href="index.php"><img src="ressources/logo.svg" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span><img src="ressources/menu.png" alt="" /></span>
                </button>
                <div class="collapse navbar-collapse glass" id="navbarNavAltMarkup">
                    <div class="container-fluid navbar-nav example07 d-flex justify-content-between">
                    <a class="nav-link" href="index.php#section-services">Nos services</a>
                    <a class="nav-link" href="index.php#ulm">Types d’ULM</a>
                    <a class="nav-link" href="index.php#team">Notre équipe</a>
                    <a class="nav-link" href="index.php#actualité">Événement</a>
                    <a class="nav-link" href="index.php#galery">Galerie</a>
                    <a class="nav-link" href="index.php#formulaire">Contact</a>
                      <?php 
                      require_once 'Services_Back/GestionNav.php';
                      
                      ?>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row justify-content-center">
            <div class="col-11 underline">
                <hr />
            </div>
        </div>
    </header>
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-md-6 col-sm-12">
                    <div>
                        <div class="card-body ">
                            <h2 class="text-white text-center">Envolez-vous vers l'aventure : Réservez votre Vol en ULM dès aujourd'hui !</h2>
                            <p class="text-white text-center fs-5 mt-3">Préparez-vous à vivre une aventure aérienne inoubliable ! Réservez votre vol en ULM et laissez-vous emporter vers de nouveaux horizons à travers une expérience de vol unique et palpitante.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div>
                            <div class="card-body">
                                <form class="d-flex justify-content-center flex-column" action="page-reservation.php" method="POST">
                                    <select class="d-flex align-items-center input-control form-control-mo select" name="pilote" id="pilote" style="margin-bottom: 21px; padding: 20px">
                                    <option value="select">-- SÉLÉCTIONNEZ UN PILOTE --</option>
    
                                    <?php
                                       error_reporting(E_ALL & ~E_DEPRECATED);
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "root"; 
                                        $dbname = "ASTA_ACF2L";
    
                                        // Create connection
                                        $conn = new mysqli($servername, $username, $password, $dbname);
    
                                        // Check connection
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
    
                                        // Fetch pilotes from database
                                        $sql = "SELECT ID_PILOTES, NOM, PRENOM FROM ASTA_PILOTES";
                                        $result = $conn->query($sql);
    
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . $row["ID_PILOTES"] . "'>" . $row["PRENOM"] . " " . $row["NOM"] . "</option>";
                                            }
                                        }
    
                                        $conn->close();
                                    
                                    ?>
                                    </select>
    
    
                                    <div class="d-flex align-items-center input-control " style="margin-bottom: 21px ">
                                        <input class="form-control-mo" type="date" name="date" id="date">
                                    </div>
    
                                    <div class="d-flex align-items-center input-control " style="margin-bottom: 21px ">
                                        <input class="form-control-mo" type="time" name="heure" id="heure">
                                    </div>
    
    
                                    <div class="d-flex align-items-center input-control" style="margin-bottom: 21px">
                                        <textarea class="form-control-mo" name="commentaire" id="commentaire" placeholder="Ecrivez une description"></textarea>
                                    </div>
    
                                    <button class="btn btn-primary text-center btn-submit" type="submit" placeholder="Prenom">Réserver</button>
                                    <?php
        require_once "Services_Back/reservation.php";
        require_once "Services_Back/Database.php";
        require_once "Services_Back/User.php";

        error_reporting(E_ALL & ~E_DEPRECATED);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            error_reporting(E_ALL & ~E_DEPRECATED);
            $reservationID = rand(1,70000);
            $_USERTOADHID = $_SESSION["user"][0]["USER_ID"];
            $piloteID = $_POST["pilote"];
            $date = $_POST["date"];
            $heure = $_POST["heure"];
            $comm = $_POST["commentaire"];
            $reservation = new Reservation($reservationID, $_USERTOADHID, $piloteID, $date, $heure, $comm);

            error_reporting(E_ALL & ~E_DEPRECATED);
            if ($piloteID !== "select" && !empty($date) && !empty($heure) && !empty($comm)) {
                $reservation = new Reservation($reservationID, $_USERTOADHID, $piloteID, $date, $heure, $comm);
                
                if ($reservation->verifier_disponibilite($piloteID, $date)) {
                    $reservation->insertReservation();
                } error_reporting(E_ALL & ~E_DEPRECATED);

            } else  {
                echo "<span style='color: red'>Erreur : Veuillez remplir tous les champs du formulaire.</span>";
            }

        }
            
            
        
    ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</html>