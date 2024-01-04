<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css" />
    <link rel="stylesheet" href="../login-register/style.css" />


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <title>Document</title>
</head>

<?php

    session_start();
    $_SESSION["USER"] = 12345;
    echo $_SESSION["USER"];
    if (isset($_SESSION["USER"])) {
        echo '<body>

        <section id="reservation-page">
            <div class="container pt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-12">
                        <div>
                            <div class="card-body ">
                                <h2 class="text-white text-center">Envolez-vous vers l‘aventure : Réservez votre Vol en ULM dès aujourd‘hui !</h2>
                                <p class="text-white text-center fs-5 mt-3">Préparez-vous à vivre une aventure aérienne inoubliable ! Réservez votre vol en ULM et laissez-vous emporter vers de nouveaux horizons à travers une expérience de vol unique et palpitante.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div>
                            <div class="card-body">
                                <form class="d-flex justify-content-center flex-column" action="page-reservation.php" method="POST">
                                    <select class="d-flex align-items-center input-control form-control-mo select" name="pilote" id="pilote" style="margin-bottom: 21px; padding: 20px">
    
                                    '; 
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
                                    
                                    echo '
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                                        
        
        
        ';
    
    
            require_once "../Services_Back/reservation.php";
            require_once "../Services_Back/Database.php";
            require_once "../Services_Back/User.php";
    
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["pilote"]) && isset($_POST["date"]) && isset($_POST["heure"]) && isset($_POST["commentaire"])) {
                    $reservationID = rand(1,70000);
                    $userID = $_SESSION["USER"];
                    $piloteID = $_POST["pilote"];
                    $date = $_POST["date"];
                    $heure = $_POST["heure"];
                    $comm = $_POST["commentaire"];
    
                    $reservation = new Reservation($reservationID, $userID, $piloteID, $date, $heure, $comm);
                    $reservation -> insertReservation();
                } else {
                    echo "Il manque des trucs";
                }
            }
                                        
        
    
            echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
        </body>';
    } else {
        header("Location: ../index.php");
    }

?>

</html>