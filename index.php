<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet" />

        <link rel="stylesheet" href="styles.css" />
        <title>ACF2L</title>
    </head>
    <body>
        <section id="hommepage">
            <div class="home-img">
                <div class="nav">
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
        </section>

        <section id="section-services">
            <div class="container-fluid services-div">
                <!-- Section "Nos Services" -->
                <div class="nos-services-section">
                    <div class="row justify-content-center">
                        <div class="col-md-12 mb-4">
                            <h2 class="text-left ml-4 mb-4">Nos Services</h2>
                        </div>
                    </div>
                </div>

                <div class="container-fluid section-div">
                    <section class="mx-0 mx-md-5" id="services">
                        <div class="card-div-flex row justify-content-lg-between justify-content-center">
                            <div class="col-12 col-lg-5 col-md-12 card-services" style="margin: 0; padding: 52px 36px 52px 36px;">
                                <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                    <h5 class="card-title titre-card">
                                        Formations de Pilotes <br />
                                        et Instructeurs
                                    </h5>
                                    <p class="card-text texte-card">
                                        L’aéro-club assure la formation complète de pilotes et d’instructeurs qualifiés. Cela inclut des programmes de formation variés et des cours adaptés aux besoins individuels. De plus, des baptêmes de
                                        l’air sont proposés pour une première expérience aérienne.
                                    </p>
                                    <a href="#" class="arrow-btn"><img src="./ressources/arrow.png" alt="arrow" /></a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-12 card-services" style="margin: 0; padding: 52px 36px 52px 36px;">
                                <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                    <h5 class="card-title titre-card">
                                        Maintenance et Équipement ULM
                                    </h5>
                                    <p class="card-text texte-card">
                                        Notre équipe assure la maintenance complète des ULM, incluant la révision des moteurs et des structures. De plus, nous offrons des services de montage pour tous les instruments de navigation tels que
                                        le compas, la radio, le transpondeur...
                                    </p>
                                    <a href="#" class="arrow-btn"><img src="./ressources/arrow.png" alt="arrow" /></a>
                                </div>
                            </div>
                            <div class="col-12 col-lg-5 col-md-12 card-services" style="margin: 0; padding: 52px 36px 52px 36px;">
                                <div class="card-body d-flex flex-column justify-content-between" style="height: 100%;">
                                    <h5 class="card-title titre-card">
                                        Services Complémentaires <br />
                                        de l'Aéro-club
                                    </h5>
                                    <p class="card-text texte-card">
                                        Nous assurons un service de restauration rapide. N02s proposons un hébergement pratique avec trois studios et six chambres pour les élèves stagiaires. Nous louons également des emplacements ULM dans
                                        nos hangars pour les particuliers.
                                    </p>
                                    <a href="#" class="arrow-btn"><img src="./ressources/arrow.png" alt="arrow" /></a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section id="ulm" class="container-xl container-fluid">
            <div class="texte-ulm-container d-lg-block justify-lg-content-start d-flex flex-column align-items-lg-stretch align-items-center">
                <h1 class="title-section">Types D’ULM</h1>
                <div class="para-ulm">
                    <p>
                        Découvrez notre variété de catégories d'ULM. Avec six classes distinctes, allant du paramoteur à l’hélicoptère ultraléger. Notre association propose également trois types d'appareils, chacun représentant une
                        expérience de vol unique. Explorez ci-dessous pour en savoir plus sur chaque catégorie et choisir l'ULM qui correspond le mieux à votre style et à vos besoins de vol.
                    </p>
                </div>
            </div>

            <div class="d-flex justify-content-between row align-items-center align-4-items-start gap-3 gap-lg-0">
                <a href="#" class="col-12 col-lg-4 d-flex d-4-block align-items-center justify-content-center">
                    <div class="card border-0" style="height: 429px; width: 374px;">
                        <div class="card-body ulm-card1 d-flex flex-column justify-content-between" style="padding: 14px 26px 33px 31px;">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h5 class="card-title title-ulm">
                                    Classes d'ULM <br />
                                    Standard
                                </h5>
                                <div class="arrow-div">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </div>
                            <p class="card-text prix-ulm">79€</p>
                        </div>
                    </div>
                </a>
                <a href="#" class="col-12 col-lg-4 d-flex d-4-block align-items-center justify-content-center">
                    <div class="card border-0" style="height: 429px; width: 374px;">
                        <div class="card-body ulm-card2 d-flex flex-column justify-content-between" style="padding: 14px 26px 33px 31px;">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h5 class="card-title title-ulm">
                                    Classes d'ULM<br />
                                    Avancées
                                </h5>
                                <div class="arrow-div">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </div>

                            <p class="card-text prix-ulm">129€</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="col-12 col-lg-4 d-flex d-4-block align-items-center justify-content-center">
                    <div class="card border-0" style="height: 429px; width: 374px;">
                        <div class="card-body ulm-card3 d-flex flex-column justify-content-between" style="padding: 14px 26px 33px 31px;">
                            <div class="d-flex justify-content-between align-items-baseline">
                                <h5 class="card-title title-ulm">
                                    Classes d'ULM <br />
                                    Premium
                                </h5>
                                <div class="arrow-div">
                                    <i class="ri-arrow-right-up-line"></i>
                                </div>
                            </div>
                            <p class="card-text prix-ulm">229€</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>


        <!-- inséré section maximiser l'apprentissage  -->

        <section id="team">
<div class="container">

        <div class="row text-title">
            <div class="col">
                <div style="max-width: 1110px;">
                    <div>
                        <h5 class="section-title">Notre équipe</h5>
                        <p class="para-text">Découvrez la force motrice derrière notre aéro-club. Rencontrez notre équipe passionnée et dévouée, composée d'experts de l'aviation prêts à vous accompagner dans votre voyage aérien. Apprenez-en davantage sur les membres qui rendent possible notre engagement envers l'excellence et la sécurité dans tous nos services aériens.</p>
                    </div>
                </div>
            </div>
        </div>

    <div class="row div-team-card">
        <div class="card-glob col-lg-3 col-md-6 mb-md-4">
            <div class="card1" style="min-height: 407px;">
                <div class="card-body">
                    <h5 class="card-title">Kevin SAITOUT</h5>
                    <p class="card-text">Chef pilote</p>
                </div>
            </div>
        </div>
        <div class="card-glob col-lg-3 col-md-6 mb-md-4">
            <div class="card2" style="min-height: 407px;">
                <div class="card-body">
                    <h5 class="card-title">Kevin SAITOUT</h5>
                    <p class="card-text">Chef pilote</p>
                </div>
            </div>
        </div>
        <div class="card-glob col-lg-3 col-md-6">
            <div class="card3" style="min-height: 407px;">
                <div class="card-body">
                    <h5 class="card-title">Kevin SAITOUT</h5>
                    <p class="card-text">Chef pilote</p>
                </div>
            </div>
        </div>
        <div class="card-glob col-lg-3 col-md-6">
            <div class="card4" style="min-height: 407px;">
                <div class="card-body">
                    <h5 class="card-title">Kevin SAITOUT</h5>
                    <p class="card-text">Chef pilote</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


<!-- ACTUALITE  -->



<section id="testi" style="margin-top: 164px;">

<div class="container-fluid services-div justify-content-between pb-5">
  
  <!-- Section "Nos Services" -->
  <div class="testimonial-section ">
  <div class="row justify-content-center">
    <div class="col-md-12 my-4">
      <h2 class="text-center titre-titre ml-4 mt-2">Testimonials</h2>
      
    </div>
    <p class="card-text text-center titre-chapeau mb-5">Découvrez les témoignages captivants de notre communauté aérienne. Ces récits reflètent l'expérience unique vécue au sein de notre club, illustrant l'impact positif et la passion partagée pour l'aviation. Explorez ces témoignages inspirants et ressentez l'esprit vibrant de notre communauté</p>
  </div>
</div>


    <div class="container-fluid section-div">
      <section id="services">
      <div class="row justify-content-lg-between justify-content-center">
        <div class="col-12 col-lg-4  col-md-12  mb-4 card-services">         
            <div class="card-body">
              <h5 class="card-title titre-card mt-3 my-2">“Un Vol Inoubliable”</h5>
              <p class="card-text texte-card">L’aéro-club assure la formation complète de pilotes et d’instructeurs qualifiés. Cela inclut des programmes de formation variés et des cours adaptés aux besoins individuels. De plus, des baptêmes de l’air sont proposés pour une première expérience aérienne.</p>
           
            <div class="name d-flex align-items-center">
              <img class="img-test" src="./ressources/tesimonial1.jpg" alt="T1">
              <div class="text-left">
              <h5 class="text-name">Sophie R.</h5>
              <h6 class="text-job">Enseignante</h6>
            </div>
            </div>
            </div>         
        </div>
        <div class="col-12 col-lg-4 col-md-12 mb-4 card-services">         
            <div class="card-body">
              <h5 class="card-title titre-card mt-3 my-2">“Une Expérience Spectaculaire ”</h5>
              <p class="card-text texte-card">Je recommande vivement cette association pour une expérience de vol en ULM. Les instructeurs sont professionnels et l'ULM offre une vue spectaculaire. </p> 
              <div class="name d-flex align-items-center">
                <img class="img-test" src="./ressources/tesimonial2.jpg" alt="T1">
                <div class="text-left">
                <h5 class="text-name">Marc D.</h5>
                <h6 class="text-job">Ingénieur</h6>
              </div>
              </div>
            </div>    
        </div>   
        <div class="col-12 col-lg-4 col-md-12 mb-4 card-services" >
            <div class="card-body">
              <h5 class="card-title titre-card mt-3 my-2">“Des Sensations Uniques”</h5>
              <p class="card-text texte-card mx-2">Un vol mémorable en ULM avec une équipe formidable. Les paysages vus d'en haut étaient à couper le souffle. Une expérience enrichissante et des sensations uniques. </p>  
              <div class="name d-flex align-items-center">
                <img class="img-test" src="./ressources/tesimonial3.jpg" alt="T1">
                <div class="text-left">
                  <h5 class="text-name">Nathalie L.</h5>
                  <h6 class="text-job">Architecte</h6>
                </div>
  
              </div>
            </div>
        </div>
      </div>
    </section>
    </div>
  </div>
</div>

</section>
        <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
