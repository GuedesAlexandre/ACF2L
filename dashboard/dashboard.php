<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="dashboard.css" />
   
</head>

<body>
    <div class="dasboard-container d-flex vh-100">
        <aside class="" style="min-width: 270px;">
            <nav class="navbar bg-light h-100 justify-content-center align-items-start">
                <div>
                    <a href="" class="logo"><img src="ressources/logo-nav-dashboard.svg" alt="logo-nav" /></a>
                    <ul class="navbar-nav nav-dashboard gap-4 mt-5" id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <li class="nav-item">
                            <a class="nav-link active d-flex gap-2" id="v-pills-Dashboard-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-Dashboard" type="button" role="tab"
                                aria-controls="v-pills-Dashboard" aria-selected="true">
                                <img src="ressources/icons/Dashboard.svg" alt="" />Dashboard
                            </a>
                        </li>
                        

                        

                        <li class="nav-item">
                            <a class="nav-link d-flex gap-2" id="v-pills-adhérant-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-adhérant" type="button" role="tab"
                                aria-controls="v-pills-adhérant" aria-selected="false">
                                <img src="ressources/icons/Liste-adhérant-icons.svg" alt="" /> Liste adhérant
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex gap-2" id="v-pills-réservation-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-réservation" type="button" role="tab"
                                aria-controls="v-pills-réservation" aria-selected="false">
                                <img src="ressources/icons/Liste-réservation-icons.svg" alt="" /> Liste réservation
                            </a>
                        </li>


                        <li class="nav-item">

                            <a class="nav-link d-flex gap-2" id="v-pills-avions-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-avions" type="button" role="tab" aria-controls="v-pills-avions"
                                aria-selected="false">
                                <img src="ressources/icons/Liste-avions-icons.svg" alt="" /> Liste avions
                            </a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link d-flex gap-2" id="v-pills-add-avions-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-add-avions" type="button" role="tab"
                                aria-controls="v-pills-add-avions" aria-selected="false">
                                <img src="ressources/icons/add-icons-nav.svg" alt="" />
                                <!-- <img src="ressources/icons/Liste-avions-icons.svg" alt="" /> -->
                                Ajouter des avions
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>

        <main class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-Dashboard" role="tabpanel"
                aria-labelledby="v-pills-Dashboard-tab">
                <div class="text-center" style="margin-top:5%; font-size:3rem;">
                <img src="ressources/IA analyse données.png" ><br>
                
                Bienvenue sur votre Dashboard Entreprise !</div>
            </div>
            <div class="tab-pane fade" id="v-pills-Staff" role="tabpanel" aria-labelledby="v-pills-Staff-tab">

                <!-- CARD  -->

                <div class="row g-6 mb-6 mt-5 card-info-div">
                    <div class="col-xl-3 col-sm-6 col-12 p-0">
                        <div class="card card-info border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Nombre
                                            de staff</span>
                                        <span class="txt-info-card h3 font-bold mb-0">ecrit le nombre en php fdp</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- LISTE  -->
                <div class="card tab-list border-0 mt-5">
                    <div class="ligne-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste du Staff </h5>
                        <button href="#" class="d-flex align-items-center gap-1 btn btn-sm btn-neutral btn-modif"><img
                                width="18px" src="ressources/icons/add-icons.svg" alt="">Ajouter</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap ">
                            <thead class="txt-info-ligne">
                                <tr>
                                    <th class="txt-info-item-ligne py-3" scope="col">NOM</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">EMAIL</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">MOT de pass</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">Date de naissance</th>
                                    <th class="txt-info-item-ligne py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="ligne-content-info">
                                    <td>
                                        <img style="width: 37px" alt="..."
                                            src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                            class="avatar avatar-sm rounded-circle me-2">
                                        Ton grand pere
                                    </td>
                                    <td>
                                        Tongrandpere@gmail.com
                                    </td>
                                    <td>
                                        FDP1235415654132
                                    </td>
                                    <td>
                                        10/12/23
                                    </td>
                                    <td class="text-end">
                                        <button href="#" class="btn btn-sm btn-neutral btn-modif">Modifier</button>
                                        <button type="button"
                                            class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <img src="ressources/icons/trash-icons.svg" alt="">
                                        </button>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

           
            <div class="tab-pane fade" id="v-pills-adhérant" role="tabpanel" aria-labelledby="v-pills-adhérant-tab">

                <!-- CARD  -->

                <div class="row g-6 mb-6 mt-5 card-info-div">
                    <div class="col-xl-3 col-sm-6 col-12 p-0">
                        <div class="card card-info border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Nombre
                                            d'adhérent</span>
                                        <span class="txt-info-card h3 font-bold mb-0"><?php
                                        require_once '../Services_Back/Avion.php';
                                        Avion::countTableRows("ASTA_ADHERENTS");
                                        ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LISTE  -->
                <div class="card tab-list border-0 mt-5">
                    <div class="ligne-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des adherent </h5>
                        
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap ">
                            <thead class="txt-info-ligne">
                                <tr>
                                <th class="txt-info-item-ligne py-3" scope="col">Adherent_ID</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">NOM</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">PRENOM</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">CIVILITE</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">SITUATION</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">TELEPHONE</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">EMAIL</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">PASSWORD</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">Date de naissance</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">Adresse</th>
                                    <th class="txt-info-item-ligne py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once '../Services_Back/adherents.php';
                                Adherents::displayADH();
                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-réservation" role="tabpanel"
                aria-labelledby="v-pills-réservation-tab">

                <div class="row g-6 mb-6 mt-5 card-info-div">
                    <div class="col-xl-3 col-sm-6 col-12 p-0">
                        <div class="card card-info border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Nombre
                                            de reservation en cours</span>
                                        <span class="txt-info-card h3 font-bold mb-0"><?php
                                        require_once '../Services_Back/reservation.php';
                                        Reservation::countTableRows("ASTA_RESERVATION");
                                        ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LISTE  -->
                <div class="card tab-list border-0 mt-5">
                    <div class="ligne-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste de reservation </h5>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap ">
                            <thead class="txt-info-ligne">
                                <tr>
                                    <th class="txt-info-item-ligne py-3" scope="col">Reservation_ID</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">Adherent_ID</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">Pilotes_ID</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">DATE</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">Horaire</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">DESCRIPTION</th>
                                  
                                    <th class="txt-info-item-ligne py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                               require_once '../Services_Back/reservation.php';
                                Reservation::displayReserv();
                               ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-avions" role="tabpanel" aria-labelledby="v-pills-avions-tab">
                <div class="row g-6 mb-6 mt-5 card-info-div">
                    <div class="col-xl-3 col-sm-6 col-12 p-0">
                        <div class="card card-info border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Nombre
                                            d'avions</span>
                                        <span class="txt-info-card h3 font-bold mb-0"><?php
                                        require_once '../Services_Back/Avion.php';
                                        Avion::countTableRows("ASTA_AVIONS");
                                        ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LISTE  -->
                <div class="card tab-list border-0 mt-5">
                    <div class="ligne-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Liste des avions </h5>
                        <button href="dashboard.php #v-pills-add-avions" data-bs-toggle="pill"
                                data-bs-target="#v-pills-add-avions" type="button" role="tab"
                                aria-controls="v-pills-add-avions" aria-selected="false" class="d-flex align-items-center gap-1 btn btn-sm btn-neutral btn-modif"><img
                                width="18px" src="ressources/icons/add-icons.svg" alt="">Ajouter</button>
                       
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap ">
                            <thead class="txt-info-ligne">
                                <tr>
                                   
                                 
                                    <th class="txt-info-item-ligne py-3" scope="col">MODELE</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">CAPACITE</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">Poids à vide</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">Autonomie</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">Conssomation</th>
                                    <th class="txt-info-item-ligne py-3" scope="col">DESCRIPTION</th>
                                    <th class="txt-info-item-ligne py-3"></th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                               require_once '../Services_Back/Avion.php';
                                 Avion::displayAvions("ASTA_AVIONS");
                               ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            
                <?php
                require_once '../Services_Back/AjoutAvion.php'
                ?>
            
        </main>
    </div>


    <!-- INPUT IMAGE STYLYSER  -->
    <script>
        function handleImageUpload(event) {
            const file = event.target.files[0];
            const fileName = file.name;
            const fileReader = new FileReader();

            fileReader.onload = function (e) {
                const imageSrc = e.target.result;
                const uploadBtn = document.querySelector(".upload-btn");
                const fileNameElem = document.querySelector("#nom-file-name");
                const deleteBtn = document.querySelector("#delete-btn");
                const iconElem = document.querySelector(".upload-btn i");
                const paragraphe = document.querySelector(".upload-btn p");

                uploadBtn.style.backgroundImage = `url(${imageSrc})`;
                fileNameElem.textContent = fileName;
                deleteBtn.style.display = "block";
                iconElem.style.display = "none";
                paragraphe.style.display = "none";
            };

            fileReader.readAsDataURL(file);
        }

        function deleteImage() {
            const uploadBtn = document.querySelector(".upload-btn");
            const fileNameElem = document.querySelector("#nom-file-name");
            const deleteBtn = document.querySelector("#delete-btn");
            const fileInput = document.querySelector("#file-upload");
            const iconElem = document.querySelector(".upload-btn i");
            const paragraphe = document.querySelector(".upload-btn p");

            // Réinitialiser l'état du bouton d'upload
            uploadBtn.style.backgroundImage = "";''
            fileNameElem.textContent = "Pas de fichier sélectionné";
            fileInput.value = "";
            iconElem.style.display = "block"; // Afficher à nouveau l'icône
            paragraphe.style.display = "block"; // Afficher à nouveau l'icône
        }
    </script>

    <!-- REDIRECTION VERS LA PAGE AJOUTER AVIONS  -->
    <script>
        document.getElementById('addAvionsButton').addEventListener('click', function () {
            document.getElementById('v-pills-add-avions-tab').click();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html> 