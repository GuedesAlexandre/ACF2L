<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Mon compte | AFC2L</title>
</head>

<body style="background-color: #090a0c; font-family: 'Inter', sans-serif;">

<div class="nav">
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
            </div>
<?php 

error_reporting(E_ALL & ~E_DEPRECATED);
require_once 'Services_Back/User.php';
require_once 'Services_Back/adherents.php';

if(isset($_SESSION["user"])){
    if(Adherents::checkADHExists($_SESSION["user"][0]["USER_ID"]) ){
        Adherents::displayADHById($_SESSION["user"][0]["USER_ID"]);
        
        if(Adherents::getRoleById("ASTA_ADHERENTS",$_SESSION["user"][0]["USER_ID"]) == 'adh'){
           echo' <div class="text-center"> <a href="./page-reservation.php" class="btn btn-success">Reserver un vol</a></div>';

        }else if(Adherents::getRoleById("ASTA_ADHERENTS",$_SESSION["user"][0]["USER_ID"]) == 'admin'){
            echo' <div class="text-center"><a href="./page-reservation.php" class="btn btn-success">Reserver un vol</a>';
            echo' <a href="./dashboard/dashboard.php" class="btn btn-light"> Dashboard</a></div>';
        }
                    
        
    }else{
        User::displayUserById($_SESSION["user"][0]["USER_ID"]);
        echo '<div class="text-center"><a href="devenir-adeherent.php" class="btn btn-primary">Devenir adherent</a></div>';

    }

}else if(isset($_SESSION["USER"])){

if(Adherents::checkADHExists($_SESSION["USER_ID"]) ){
        Adherents::displayADHById( $_SESSION["USER_ID"]);
       
                    
        
    }else{
        User::displayUserById( $_SESSION["USER_ID"]);
        echo '<div class="text-center"><a href="devenir-adeherent.php" class="btn btn-primary">Devenir adherent</a></div>';
        

    }


}
else if(isset($_SESSION["USER"])){
    if(Adherents::checkADHExists($_SESSION["USER_ID"]) ){
        Adherents::displayADHById($_SESSION["USER_ID"]);
        
        if(Adherents::getRoleById("ASTA_ADHERENTS",$_SESSION["USER_ID"]) == 'adh'){
           echo' <div class="text-center"> <a href="./page-reservation.php" class="btn btn-success">Reserver un vol</a></div>';

        }else if(Adherents::getRoleById("ASTA_ADHERENTS",$_SESSION["USER_ID"]) == 'admin'){
            echo' <div class="text-center"><a href="./page-reservation.php" class="btn btn-success">Reserver un vol</a>';
            echo' <a href="./dashboard/dashboard.php" class="btn btn-light"> Dashboard</a></div>';
        }
                    
        
    }else{
        User::displayUserById($_SESSION["USER_ID"]);
        echo '<div class="text-center"><a href="devenir-adeherent.php" class="btn btn-primary">Devenir adherent</a></div>';

    }

}else if(isset($_SESSION["USER"])){

if(Adherents::checkADHExists($_SESSION["USER_ID"]) ){
        Adherents::displayADHById( $_SESSION["USER_ID"]);
       
                    
        
    }else{
        User::displayUserById( $_SESSION["USER_ID"]);
        echo '<div class="text-center"><a href="devenir-adeherent.php" class="btn btn-primary">Devenir adherent</a></div>';
        

    }


}



?>



        <div class="container-fluid px-5">
            <div class="card tab-list border-0 mt-5">
                <div class="ligne-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 p-4">Vos reservation</h5>

                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap ">
                        <thead class="txt-info-ligne">
                            <tr>

                                <th class="txt-info-item-ligne py-3" scope="col">Nom du pilote</th>
                                <th class="txt-info-item-ligne py-3" scope="col">Date & Horraire</th>
                                <th class="txt-info-item-ligne py-3" scope="col">Date de naissance</th>
                                <th class="txt-info-item-ligne py-3" scope="col">Description</th>
                                <th class="txt-info-item-ligne py-3" scope="col">Type d'avion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="ligne-content-info">
                            <?php
                            require_once 'Services_Back/Reservation.php';
                            if(isset($_SESSION["user"])){
                            $adherentId = $_SESSION["user"][0]["USER_ID"];
                            $reservation = Reservation::displayUserReservations($adherentId);}else if (isset ($_SESSION["USER"])){
                                $adherentId = $_SESSION["USER_ID"];
                                $reservation = "devenez adhérant pour obtenir des réservations";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>