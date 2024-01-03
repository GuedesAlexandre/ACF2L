<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body style="background-color: #090a0c; font-family: 'Inter', sans-serif;">

    <section id="compte">
        <div class="text-center mt-5">
            <img class="rounded-circle" src="ressources/user.jpg" alt="" style="width: 140px;">
            <h3 class=" text-light mt-3">Username</h3>
        </div>
        
        <div>
        </div>

        <div class="my-5 text-center">
            <div class="card-body">
                <h5 class="card-title text-success mb-4">Vos information</h5>
                <p class="card-text text-light">Nom: John Doe</p>
                <p class="card-text text-light">Adresse: 123 Rue Principale</p>
                <p class="card-text text-light">Date de naissance: 01/01/1990</p>
            </div>
        </div>

      

        </div>

        <div class="text-center">
            <a href="dashboard/dashboard.php" class="btn btn-light"> Dashboard</a>
            <a href="devenir-adeherent.php" class="btn btn-primary">Devenir adherent</a>
            <a href="./page-reservation.php" class="btn btn-success">Reserver un vol</a>
        </div>

        <div class="container-fluid px-5">
            <div class="card tab-list border-0 mt-5">
                <div class="ligne-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0 p-4">Vos reservation</h5>

                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-nowrap ">
                        <thead class="txt-info-ligne">
                            <tr>

                                <!-- MET CE QUE TU VEUX DANS LES TH  -->
                                <th class="txt-info-item-ligne py-3" scope="col">Nom pilote</th>
                                <th class="txt-info-item-ligne py-3" scope="col">DATE/HORAIRE</th>
                                <th class="txt-info-item-ligne py-3" scope="col">Date de naissance</th>
                                <th class="txt-info-item-ligne py-3" scope="col">DESCRIPTION</th>
                                <th class="txt-info-item-ligne py-3" scope="col">TYPE D'AVION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="ligne-content-info">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>