<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet">

        <link rel="stylesheet" href="styles.css" />
        <title>ACF2L</title>
    </head>
    <body>
        <section>
            <div class="home-img">
                <div class="nav">
                    <header class="container-fluid">
                        <nav  class="row navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid col-0 col-lg-11 ">
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
                                            <a style="gap: 5px; " class="dropdown-item d-flex align-items-center" href="#"><i style="font-size: 18px;" class="ri-user-add-line"></i> Créer un compte</a>
                                            <hr class="drop-hr">
                                            <a style="gap: 4px; " class="dropdown-item d-flex align-items-center " href="#"><ion-icon style="font-size: 24px;" name="log-in-outline"></ion-icon>Se connecter</a>
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
                </div>

                <div class="container-fluid txt-home">
                    <div class="row">
                        <div class="container-fluid col-11 justify-content-center">
                            <div class="row sm-ustify-content-center">
                                <div class="col">
                                    <div class="titre-home"><h1>Aéro-Club de Frotey-Les-Lures</h1></div>
                                    <div class="para-home"><p>Explorez l'aviation légère dans des paysages époustouflants. Une aventure unique pour les passionnés de vol et les explorateurs en quête de nouveautés.</p></div>
                                    <div class="btn-home"><a href="#">Voir Plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php 
    require_once 'Services_Back/Api_Meteo.php';
?>

          <!--  <div class="metteo row justify-content-center">
                <div class="col-xxl-7 col-lg-9 exter">
                    <div class="inter">
                    <div class="row justify-content-center gap">
                        <div class="col flex-column d-flex align-items-center justify-content-center">
                            <h6>Lun</h6>
                            <div><img src="ressources/nuage.svg" alt="" /></div>
                            <h6>23°</h6>
                        </div>
                        <div class="col flex-column d-flex align-items-center justify-content-center">
                            <h6>Mar</h6>
                            <div><img src="ressources/nuage.svg" alt="" /></div>
                            <h6>23°</h6>
                        </div>
                        <div class="col flex-column d-flex align-items-center justify-content-center">
                            <h6>Mer</h6>
                            <div><img src="ressources/nuage.svg" alt="" /></div>
                            <h6>23°</h6>
                        </div>
                        <div class="col flex-column d-flex align-items-center justify-content-center">
                            <h6>Jeu</h6>
                            <div><img src="ressources/nuage.svg" alt="" /></div>
                            <h6>23°</h6>
                        </div>
                        <div class="col flex-column d-flex align-items-center justify-content-center">
                            <h6>Ven</h6>
                            <div><img src="ressources/nuage.svg" alt="" /></div>
                            <h6>23°</h6>
                        </div>
                        <div class="col flex-column d-flex align-items-center justify-content-center">
                            <h6>Sab</h6>
                            <div><img src="ressources/nuage.svg" alt="" /></div>
                            <h6>23°</h6>
                        </div>
                        <div class="col flex-column d-flex align-items-center justify-content-center">
                            <h6>Dim</h6>
                            <div><img src="ressources/nuage.svg" alt="" /></div>
                            <h6>23°</h6>
                        </div>
                    </div>
                </div>
            </div>
            </div>-->
        </section>

        <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
