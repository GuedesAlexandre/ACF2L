<?php
session_start();
if(isset( $_SESSION["user"]) OR isset( $_SESSION["USER"])){
    echo ' <div class="nav">
    <header class="container-fluid">
        <nav class="row navbar navbar-expand-lg navbar-light">
            <div class="container-fluid col-0 col-lg-11">
                <a class="nav-link logo px-0" href="#"><img src="ressources/logo.svg" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span><img src="ressources/menu.png" alt="" /></span>
                </button>
                <div class="collapse navbar-collapse glass" id="navbarNavAltMarkup">
                    <div class="container-fluid navbar-nav example07 d-flex justify-content-between">
                        <a class="nav-link" href="#">Nos services</a>
                        <a class="nav-link" href="#">Types d’ULM</a>
                        <a class="nav-link" href="#">Notre équipe</a>
                        <a class="nav-link" href="#">Événement</a>
                        <a class="nav-link" href="#">Galerie</a>
                        <a class="nav-link" href="#">Contact</a>
                        <div class="dropdown show">
                            <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ri-user-line"></i></a>
                            <div class="dropdown-menu menu-connect" aria-labelledby="dropdownMenuLink">
                                <a style="gap: 5px;" class="dropdown-item d-flex align-items-center" href="Services_Back/Compte.php"><i style="font-size: 18px;" class="ri-user-add-line"></i> Mon Compte</a>
                                <hr class="drop-hr" />
                                <a style="gap: 4px;" class="dropdown-item d-flex align-items-center" href="Services_Back/deconnexion.php"><ion-icon style="font-size: 24px;" name="log-in-outline"></ion-icon>Déconnexion</a>
                            </div>
                        </div>
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
</div>';

}else{
    echo' <div class="nav">
    <header class="container-fluid">
        <nav class="row navbar navbar-expand-lg navbar-light">
            <div class="container-fluid col-0 col-lg-11">
                <a class="nav-link logo px-0" href="#"><img src="ressources/logo.svg" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span><img src="ressources/menu.png" alt="" /></span>
                </button>
                <div class="collapse navbar-collapse glass" id="navbarNavAltMarkup">
                    <div class="container-fluid navbar-nav example07 d-flex justify-content-between">
                        <a class="nav-link" href="#">Nos services</a>
                        <a class="nav-link" href="#">Types d’ULM</a>
                        <a class="nav-link" href="#">Notre équipe</a>
                        <a class="nav-link" href="#">Événement</a>
                        <a class="nav-link" href="#">Galerie</a>
                        <a class="nav-link" href="#">Contact</a>
                        <div class="dropdown show">
                            <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ri-user-line"></i></a>
                            <div class="dropdown-menu menu-connect" aria-labelledby="dropdownMenuLink">
                                <a style="gap: 5px;" class="dropdown-item d-flex align-items-center" href="login-register/register/Register.php"><i style="font-size: 18px;" class="ri-user-add-line"></i> Créer un compte</a>
                                <hr class="drop-hr" />
                                <a style="gap: 4px;" class="dropdown-item d-flex align-items-center" href="login-register/login/login.php"><ion-icon style="font-size: 24px;" name="log-in-outline"></ion-icon>Se connecter</a>
                            </div>
                        </div>
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
</div>';
}


?>