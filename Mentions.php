<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Mentions.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet">

   
    <title>Mentions légales</title>
</head>

<body>
<style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0px;
        }
        p{
            color:white;
        }
        h1, h2 {
            color: white;
        }

        address {
            font-style: normal;
        }

        footer {
            margin-top: 50px;
            text-align: center;
            color: #888;
        }
    </style>
    <section id="login">
        <div class="nav" style="padding: 0;">
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
        <main>
        <div class="container">
        <h1 class="mt-5">Mentions Légales</h1>

        <section>
            <h2 class="mt-4">Informations légales</h2>
            <address>
                <p>Le présent site web est édité par <strong>ACF2L, association ACF2L</strong>.</p>
                <p>Siège social : 62 avenue de la République, 70200 Lure</p>
                <p>Téléphone : 01 60 56 60 60</p>
                <p>Email : <a href="mailto:acf2l@gmail.com">acf2l@gmail.com</a></p>
            </address>
        </section>

        <section>
            <h2 class="mt-4">Hébergeur</h2>
            <p>Le site est hébergé par <strong>[Nom de l'hébergeur]</strong>, dont le siège social est situé à <strong>[...]</strong>.</p>
        </section>

        <section>
            <h2 class="mt-4">Propriété intellectuelle</h2>
            <p>L'ensemble des contenus (textes, images, vidéos, etc.) diffusé sur le site ACF2L est protégé par la législation en vigueur en France en matière de propriété intellectuelle et est la propriété exclusive de ACF2L ou de ses partenaires. Toute reproduction, représentation, diffusion ou rediffusion, totale ou partielle, du contenu de ce site par quelque procédé que ce soit sans l'autorisation expresse de ACF2L est interdite et constituerait une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle.</p>
        </section>

        <section>
            <h2 class="mt-4">Données personnelles</h2>
            <p>Les données personnelles collectées sur ce site sont destinées à ACF2L et sont utilisées uniquement dans le cadre légal prévu en France pour le respect de la vie privée. Conformément à la loi Informatique et Libertés du 6 janvier 1978, vous disposez d'un droit d'accès, de rectification et de suppression des données vous concernant. Pour exercer ce droit, veuillez vous adresser à <a href="mailto:acf2l@gmail.com">acf2l@gmail.com</a>.</p>
        </section>
    </div>

        </main>

        <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
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
                    <a href="Mentions.php"><p>Mentions Légales</p></a>
                </div>
            </div>
        </div>
    </footer>

</html>