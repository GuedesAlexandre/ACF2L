<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="styles.css" />

    <title>ACF2L</title>
</head>

<body>



<section id="loader">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="loadingModal" class="gif">
                        <img src="ressources/Loader.gif" alt="Loading..." class="img-fluid" />
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <section id="hommepage">
        <div class="home-img">
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
                                    <a class="nav-link" href="#section-services">Nos services</a>
                                    <a class="nav-link" href="#ulm">Types d’ULM</a>
                                    <a class="nav-link" href="#team">Notre équipe</a>
                                    <a class="nav-link" href="#actualité">Événement</a>
                                    <a class="nav-link" href="#galery">Galerie</a>
                                    <a class="nav-link" href="#formulaire">Contact</a>
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

            <div class="container-fluid txt-home">
                <div class="row">
                    <div class="container-fluid col-11 justify-content-center">
                        <div class="row sm-ustify-content-center">
                            <div class="col">
                                <div class="titre-home">
                                    <h1>Aéro-Club de Frotey-Les-Lures</h1>
                                </div>
                                <div class="para-home">
                                    <p>Explorez l'aviation légère dans des paysages époustouflants. Une aventure unique pour les passionnés de vol et les explorateurs en quête de nouveautés.</p>
                                </div>
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
                            <h5 class="title-section">Notre équipe</h5>
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

    <section id="actualité" oncontextmenu='return false' class="pt-5 pb-5 snippet-body " style="font-family: 'Inter', sans-serif; margin-top:  120px;">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb3">Actualités récentes</h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button " style="    background-color: #A59E20;
                        border-color: #A59E20;" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next" style="    background-color: #A59E20;
                        border-color: #A59E20;">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div>
                                            <img class="img-fluid" alt="100%x280 " style="border-radius: 16px;" src="ressources/avions-card1.jpg">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p>Opinion</p>
                                                    <p>30 novembre 2023</p>
                                                </div>
                                                <h4 class="card-title">Journée Sécurité des vols - Grand Est </h4>
                                                <p class="card-text">Sensibilisation, prévention, sécurité aérienne, partage d'expertise, événement régional majeur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div>
                                            <img class="img-fluid" alt="100%x280" style="border-radius: 16px;" src="ressources/avions-card2.jpg">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p>Opinion</p>
                                                    <p>30 novembre 2023</p>
                                                </div>

                                                <h4 class="card-title">1er rassemblement ULM des Femmes Pilotes</h4>
                                                <p class="card-text">Célébration féminine, passion volante, rassemblement historique, partage expérience unique</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div>
                                            <img class="img-fluid" alt="100%x280" style="border-radius: 16px;" src="ressources/avions-card3.jpg">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p>Opinion</p>
                                                    <p>30 novembre 2023</p>
                                                </div>

                                                <h4 class="card-title">France air Expo 2023 </h4>
                                                <p class="card-text">Événement aéronautique majeur, innovations, présentations technologiques, aviation française réunie.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div>
                                            <img class="img-fluid" alt="100%x280" style="border-radius: 16px;" src="ressources/avions-card5.jpg">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p>Opinion</p>
                                                    <p>30 novembre 2023</p>
                                                </div>

                                                <h4 class="card-title">Rasemblement speciale ULM Paris</h4>
                                                <p class="card-text">Volées rassemblées, partage passion, événement aérien exceptionnel, culture ULM.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div>
                                            <img class="img-fluid" alt="100%x280" style="border-radius: 16px;" src="ressources/avions-card4.jpg">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p>Opinion</p>
                                                    <p>30 novembre 2023</p>
                                                </div>

                                                <h4 class="card-title">Expo Paris concord</h4>
                                                <p class="card-text">Légende volante, supersonique exposition, histoire aviation, célébration Concorde.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div>
                                            <img class="img-fluid" alt="100%x280" style="border-radius: 16px;" src="ressources/avions-card6.png">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p>Opinion</p>
                                                    <p>30 novembre 2023</p>
                                                </div>

                                                <h4 class="card-title">bapteme de l'air</h4>
                                                <p class="card-text">Aventure ciel, émotion volée, découverte sensation, expérience inoubliable, altitude découverte.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div>
                                            <img class="img-fluid" alt="100%x280" style="border-radius: 16px;" src="ressources/avions-card7.jpg">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p>Opinion</p>
                                                    <p>30 novembre 2023</p>
                                                </div>

                                                <h4 class="card-title">Salon International de l'Aviation Verte - Lyon 2024</h4>
                                                <p class="card-text">Rassemblement pionnier, technologies durables, avenir aérien écologique, conférences innovantes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div>
                                            <img class="img-fluid" alt="100%x280" style="border-radius: 16px;" src="ressources/avions-card8.jpg">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p>Opinion</p>
                                                    <p>30 novembre 2023</p>
                                                </div>

                                                <h4 class="card-title">Festival des Montgolfières - Vallée de la Loire</h4>
                                                <p class="card-text">Ciel coloré, vol majestueux, paysages vus d'en haut, festivités aériennes.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div>
                                            <img class="img-fluid" alt="100%x280" style="border-radius: 16px;" src="ressources/avions-card9.jpg">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <p>Opinion</p>
                                                    <p>30 novembre 2023</p>
                                                </div>

                                                <h4 class="card-title">Symposium Mondial de la Sécurité Aérienne - Marseille</h4>
                                                <p class="card-text">Partage meilleures pratiques, sécurité vol, experts mondiaux, innovations cruciales.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testi" style="margin-top: 164px;">

        <div class="container-fluid services-div justify-content-between pb-5">

            <!-- Section "Nos Services" -->
            <div class="testimonial-section ">
                <div class="row justify-content-center">
                    <div class="col-md-12 my-4">
                        <h2 class="text-center titre-titre ml-4 mt-2">Testimonials</h2>

                    </div>
                    <p class="card-text text-center titre-chapeau mb-5" style="max-width: 1200px;">Découvrez les témoignages captivants de notre communauté aérienne. Ces récits reflètent l'expérience unique vécue au sein de notre club, illustrant l'impact positif et la passion partagée pour l'aviation. Explorez ces témoignages inspirants et ressentez l'esprit vibrant de notre communauté</p>
                </div>
            </div>


            <div class="container-fluid section-div">
                <section id="services">
                    <div class="row justify-content-lg-between justify-content-center" style="padding:10px;">
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
                        <div class="col-12 col-lg-4 col-md-12 mb-4 card-services">
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
    <section id="galery" style="margin: 160px 0px;">
        <h1 class="title-section text-center mb-5">Prenez en plein les yeux </h1>

        <div class="container-galery d-flex justify-content-center align-items-center flex-column flex-md-row" style="gap: 24px;">
            <div class="big-images">
                <img src="./ressources/ULM1.svg" alt="Image 2">
            </div>
            <div class="image-col-central d-flex flex-column" style="gap: 4px;">
                <img src="./ressources/ULM2.svg" alt="Image 2">
                <img src="./ressources/ULM3.svg" alt="Image 3">
            </div>
            <div class="big-images">
                <img src="./ressources/ULM4.svg" alt="Image 4">
            </div>
        </div>
    </section>
    <section id="formulaire">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 text-white infos">
                    <h2 class="infos-titre">Informations<br />de contact</h2>
                    <h3 class="adresse">
                        Adresse : 62, Avenue de la République, 70200 Lure
                    </h3>
                    <h3>Appelez-nous : +33 01 60 56 60 60</h3>
                    <h3 class="email">Notre adresse e-mail : acf2l@gmail.com</h3>
                    <h2 class="infos-follow">Suivez-nous</h2>
                    <div>
                        <a class="reseau mr-3" href="#">Facebook</a>
                        <a class="reseau" href="#">Instagram</a>
                        <a class="reseau ml-3" href="#">Vimeo</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 contact">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10">
                                <h2 class="text-left mb-4 infos-titre">Contactez-nous</h2>
                                <p class="text-left present">
                                    Vous avez des questions ? N'hésitez pas à nous écrire.
                                </p>
                                <form>
                                    <div class="form-row row">
                                        <div class="form-group col-md-6">
                                            <input class="input-form" type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input class="input-form" type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez votre prénom" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="input-sujet" type="email" class="form-control" id="email" name="email" placeholder="Entrez votre mail" required />
                                    </div>
                                    <div class="form-group">
                                        <input class="input-sujet" type="text" class="form-control" id="sujet" name="sujet" placeholder="Quel est le sujet de votre message ?" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="input-message" id="message" name="message" rows="4" placeholder="Allez, écrivez votre message"></textarea>
                                    </div>
                                </form>
                                <button type="submit" class="btn-block" onclick="sendMail()">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <footer id="footer" class="footer-bg text-white ">
        <div class="container footer-container ">
            <div class="row ">
                <!-- Logo and Text Section -->
                <div class="col-lg-4 comp-text ">
                    <svg class="mb-5" xmlns="http://www.w3.org/2000/svg" width="152" height="53" viewBox="0 0 152 53" fill="none">
                        <path d="M75.7387 39.0362H72.2629L71.394 34.2871H66.4983L65.6717 39.0362H62.1748L67.3672 15.0254H70.5886L75.7175 39.0362H75.7387ZM70.7794 30.8638L68.9779 20.8111L67.1765 30.8638H70.8006H70.7794Z" fill="white" />
                        <path d="M87.8612 32.6483C87.7976 34.9144 87.2254 36.626 86.1021 37.7831C85.1484 38.7956 83.9404 39.3019 82.4569 39.3019C80.7402 39.3019 79.3838 38.6269 78.3665 37.2528C77.7095 36.3608 77.2856 35.2037 77.1161 33.8054C76.9254 32.4072 76.8406 30.1411 76.8406 27.0313C76.8406 23.9215 76.9254 21.6795 77.1161 20.2572C77.3068 18.859 77.7307 17.7018 78.3665 16.8099C79.3838 15.4357 80.7402 14.7607 82.4569 14.7607C83.9616 14.7607 85.1908 15.267 86.1657 16.3036C87.2254 17.4125 87.7976 19.1 87.8612 21.3661H84.5338C84.4914 20.2813 84.3219 19.5099 84.0252 19.0277C83.7073 18.4491 83.1774 18.1599 82.4569 18.1599C81.7363 18.1599 81.2276 18.4733 80.8885 19.0759C80.5918 19.6063 80.4011 20.4742 80.2951 21.6554C80.1892 22.8367 80.1468 24.6206 80.1468 27.0313C80.1468 29.442 80.1892 31.226 80.2951 32.4072C80.4011 33.5885 80.5918 34.4563 80.8885 34.9867C81.2276 35.5894 81.7575 35.9028 82.4569 35.9028C83.1562 35.9028 83.7073 35.6135 84.0252 35.0349C84.3219 34.5287 84.4914 33.7331 84.5338 32.6724H87.8612V32.6483Z" fill="white" />
                        <path d="M99.5178 18.4252H93.9651V25.2475H98.7336V28.6466H93.9651V39.0369H90.6377V15.002H99.4966V18.4011L99.5178 18.4252Z" fill="white" />
                        <path d="M111.11 39.0364H101.828V35.9989L107.105 24.331C107.677 23.1256 107.974 21.6792 107.974 20.0399C107.974 19.3649 107.847 18.8587 107.55 18.4971C107.274 18.1354 106.914 17.9667 106.448 17.9667C105.982 17.9667 105.621 18.1354 105.325 18.4971C105.028 18.8587 104.88 19.3649 104.88 20.0158V21.5587H101.743V20.1363C101.743 18.4247 102.167 17.0988 103.057 16.1587C103.926 15.2185 105.07 14.7363 106.469 14.7363C107.868 14.7363 108.928 15.1703 109.733 16.014C110.665 17.0024 111.132 18.3765 111.132 20.1605C111.132 21.9444 110.75 23.7283 109.966 25.4158L105.197 35.806H111.132V39.0123L111.11 39.0364Z" fill="white" />
                        <path d="M122.979 39.0369H114.12V15.002H117.447V35.6136H123V39.0127L122.979 39.0369Z" fill="white" />
                        <path d="M42.1043 28.574C41.7228 28.9838 41.3625 29.3454 41.0022 29.707C39.667 31.057 38.3318 32.4311 36.9967 33.7811C36.7211 34.0463 36.594 34.2874 36.7211 34.6972C36.8907 35.2999 37.0178 35.9508 37.145 36.5776C37.4205 37.7829 37.3357 38.0481 36.2549 38.8196C36.0641 38.4097 35.8522 37.9999 35.6615 37.6142C35.3436 36.9392 35.174 35.9749 34.6866 35.6615C34.2839 35.3963 33.4997 35.9026 32.8851 36.0713C32.7791 36.0954 32.6944 36.0713 32.4189 36.1195C32.5884 35.4445 32.6944 34.8419 32.9063 34.3115C33.1182 33.757 32.9911 33.4919 32.5248 33.2749C31.8466 32.9374 31.2108 32.5035 30.5538 32.1419C30.0664 31.8767 30.13 31.6356 30.4479 31.2258C30.8717 30.6713 31.338 30.5267 31.9526 30.7436C32.6732 31.0088 33.4997 31.4668 34.1355 31.274C34.7289 31.0811 35.1528 30.141 35.6403 29.5142C36.7635 28.0918 37.908 26.6695 39.0948 25.1749C38.8617 25.0061 38.6921 24.8615 38.5014 24.7409C35.1528 22.499 31.8254 20.257 28.4769 18.015C27.841 17.5811 27.841 17.4606 28.4769 17.0266C28.7736 16.8338 29.0703 16.6409 29.3458 16.4239C29.812 16.0623 30.2995 16.0382 30.8505 16.207C34.7289 17.4123 38.6074 18.6177 42.4858 19.8472C43.058 20.04 43.4395 19.9436 43.8422 19.4132C45.0502 17.8704 46.3218 16.3998 47.5934 14.9293C48.7591 13.5552 50.2214 12.9766 51.8745 13.0007C52.6163 13.0007 52.807 13.2418 52.8282 14.0855C52.8494 15.99 52.3196 17.6775 51.0903 19.0034C49.7763 20.4499 48.4412 21.8963 47.0848 23.3186C46.6821 23.7284 46.6397 24.09 46.7881 24.6445C47.8689 29.1043 48.9286 33.5642 50.0095 38.0481C50.2002 38.7954 49.6068 40.724 49.0134 41.1338C48.9074 41.2062 48.5683 40.9892 48.4624 40.8204C47.8689 39.7356 47.3179 38.6508 46.7457 37.5419C45.3045 34.7695 43.8845 31.9972 42.4434 29.2249C42.3586 29.032 42.2315 28.8633 42.1043 28.6222V28.574Z" fill="white" />
                        <path d="M120.764 1H31.2357C14.537 1 1 12.4167 1 26.5C1 40.5833 14.537 52 31.2357 52H120.764C137.463 52 151 40.5833 151 26.5C151 12.4167 137.463 1 120.764 1Z" stroke="white" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                    <p>Notre association est une communauté dédiée à l'aviation, offrant formation de qualité, événements captivants et ressources pédagogiques exceptionnelles pour les passionnés du vol.</p>
                </div>

                <!-- Pages Section -->
                <div class="col-lg-4">
                    <h5 class="mb-5">Pages</h5>
                    <ul class="list-unstyled">
                        <div class="row">
                            <div class="col-md-6">
                                <li class="mb-3"><a href="#">Accueil</a></li>
                                <li class="mb-3"><a href="#">Nos Services</a></li>
                                <li class="mb-3"><a href="#">Types d'ULM</a></li>
                                <li class="mb-3"><a href="#">Ressources Pédagogiques</a></li>
                            </div>
                            <div class="col-md-6">
                                <li class="mb-3"><a href="#">Notre Équipe</a></li>
                                <li class="mb-3"><a href="#">Événements</a></li>
                                <li class="mb-3"><a href="#">Galerie</a></li>
                                <li class="mb-3"><a href="#">Contact</a></li>
                            </div>
                        </div>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="col-lg-4">
                    <h5 class="mb-5">Contact</h5>
                    <p>+33 01 60 56 60 60</p>
                    <p><a href="mailto:acf2l@gmail.com">acf2l@gmail.com</a></p>
                    <p>62, Avenue de la République, 70200 Lure</p>
                </div>
            </div>
        </div>
    </footer>

    <div class="coockies-pop-up" id="pop-up-cookies">
      <header>
        <i class="bx bx-cookie"></i>
        <h2>Consentement aux cookies</h2> 
      </header>

      <div class="data">
        <p>Ce site web utilise des cookies pour vous aider à bénéficier d'une expérience de navigation supérieure et plus pertinente sur le site <a href="#"></a></p>
      </div>

      <div class="buttons">
        <button class="button" id="acceptBtn">Accepter</button>
        <button class="button" id="declineBtn">Refuser</button>
      </div>
    </div>


    <script>
        const cookieBox = document.querySelector(".coockies-pop-up"),
  buttons = document.querySelectorAll(".button");

const executeCodes = () => {
  //if cookie contains codinglab it will be returned and below of this code will not run
  if (document.cookie.includes("codinglab")) return;
  cookieBox.classList.add("show");

  buttons.forEach((button) => {
    button.addEventListener("click", () => {
      cookieBox.classList.remove("show");

      //if button has acceptBtn id
      if (button.id == "acceptBtn") {
        //set cookies for 1 month. 60 = 1 min, 60 = 1 hours, 24 = 1 day, 30 = 30 days
        document.cookie = "cookieBy= codinglab; max-age=" + 60 * 60 * 24 * 30;
      }
    });
  });
};

//executeCodes function will be called on webpage load
window.addEventListener("load", executeCodes);

const Cookie = {
    storeIp: function() {
        fetch('https://api.ipify.org?format=json')
            .then(response => response.json())
            .then(data => {
                document.cookie = "ip=" + data.ip;
            });
    },
    showIp: function() {
        var ip = document.cookie.replace(/(?:(?:^|.*;\s*)ip\s*\=\s*([^;]*).*$)|^.*$/, "$1");
        document.getElementById('ip').textContent = "Votre adresse IP est : " + ip;
    },
    checkCookie: function(name) {
        return document.cookie.includes(name + "=");
    }
};

document.getElementById('acceptBtn').addEventListener('click', Cookie.storeIp);


    </script>

    
    <script>
        function sendMail() {
            (function() {
                emailjs.init("e6FlcKhB09eh89q1U");
            })();

            var params = {
                prenom: document.querySelector("#prenom").value,
                nom: document.querySelector("#nom").value,
                sujet: document.querySelector("#sujet").value,
                mail: document.querySelector("#email").value,
                message: document.querySelector("#message").value
            };

            var serviceID = "service_x150wjp";
            var templateID = "template_19tkneu";

            emailjs.send(serviceID, templateID, params)
                .then(res => {
                    alert("Email sent success !");
                })

                .catch(error => {
                    alert("Erreur d'envoi...");
                });
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Affiche le loader de chargement lorsque la page est chargée
            showLoadingModal();

            // Donne un délai de 3 secondes avant de masquer le loader
            setTimeout(function() {
                // Masque le loader après un certain délai
                hideLoadingModal();
            }, 3000); // ici par exemple on a mis 3000 millisecondes (3 secondes)
        });

        function showLoadingModal() {
            document.getElementById("loadingModal").classList.add("loading");
        }

        function hideLoadingModal() {
            document.getElementById("loadingModal").classList.remove("loading");
        }
    </script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>