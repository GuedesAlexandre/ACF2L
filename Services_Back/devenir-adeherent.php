<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>



<body>


    <section id="compte" style="background-color:  #090a0c;">
    <?php
               require_once 'GestionNav.php'
               ?>
        <div class="container">
            <div class="row">
                <div class="texte-center mt-5 p-5 rounded-4" style="background-color:  #121318;">
                <h3 class="text-light mb-5">Devenir Adherent</h3>
                    <div class="">
                        <form action="devenir-adeherent.php" method="post">
                            <div class="mb-3">
                                <label for="civilite" class="form-label custom-form">Civilité</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="civilite" id="civilite_m" value="M">
                                    <label class="form-check-label custom-form" for="civilite_m">
                                        Monsieur
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="civilite" id="civilite_mme" value="Mme">
                                    <label class="form-check-label custom-form" for="civilite_mme">
                                        Madame
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nom" class="form-label custom-form">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom">
                            </div>
                            <div class="mb-3">
                                <label for="prenom" class="form-label custom-form">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom">
                            </div>
                            <div class="mb-3">
                                <label for="date_naissance" class="form-label custom-form">Date de naissance</label>
                                <input type="date" class="form-control" id="date_naissance" name="date_naissance">
                            </div>
                            <div class="mb-3">
                                <label for="adresse_numero" class="form-label custom-form">Adresse complète</label>
                                <input type="text" class="form-control" id="adresse_numero" name="adresse_numero">
                            </div>
                            
                            <div class="mb-3">
                                <label for="adresse_ville" class="form-label custom-form">Ville</label>
                                <input type="text" class="form-control" id="adresse_ville" name="adresse_ville">
                            </div>
                            <div class="mb-3">
                                <label for="situation_familiale" class="form-label custom-form">Situation familiale</label>
                                <select class="form-select" id="situation_familiale" name="situation_familiale">
                                    <option value="celibataire">Célibataire</option>
                                    <option value="marie">Marié</option>
                                    <option value="union_libre">Union Libre</option>
                                    <option value="pacs">PACS</option>
                                    <option value="divorce">Divorcé</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label custom-form">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label custom-form">Téléphone portable</label>
                                <input type="tel" class="form-control" id="telephone" name="telephone">
                            </div>
                            
                            
                              

                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>document.getElementById('activitiesForm').addEventListener('submit', function(event) {
  event.preventDefault();
  
  const checkedActivities = [];
  const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
  
  checkboxes.forEach(function(checkbox) {
    checkedActivities.push(checkbox.value);
  });

  displaySelectedActivities(checkedActivities);
});

function displaySelectedActivities(activities) {
  const resultDiv = document.getElementById('result');
  resultDiv.innerHTML = '<h2>Activités sélectionnées :</h2>';
  
  if (activities.length > 0) {
    const ul = document.createElement('ul');

    activities.forEach(function(activity) {
      const li = document.createElement('li');
      li.textContent = activity;
      ul.appendChild(li);
    });

    resultDiv.appendChild(ul);
  } else {
    resultDiv.innerHTML += '<p>Aucune activité sélectionnée</p>';
  }
}
</script>
<?php 

require_once 'adherents.php';
require_once 'User.php';


$_USERTOADHID = $_SESSION["user"][0]["USER_ID"];





$USER_INFO = Adherents::getUserInfo($_USERTOADHID);

$USERID = $USER_INFO[0]["USER_ID"];
$NOM = $USER_INFO[0]["NOM"];
$PRENOM = $USER_INFO[0]["PRENOM"];
$EMAIL = $USER_INFO[0]["EMAIL"];
$PASSWORD = $USER_INFO[0]["PASSWORD"];





//récup info du user
//ajout des nouvelles infos
//new adh
//insert adh


// Stockage des informations de l'utilisateur dans des variables

// Ajoutez d'autres variables selon les clés du tableau $USER_INFO




// Ajoutez d'autres variables selon les clés du tableau $USER_INFO


?>

<script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>