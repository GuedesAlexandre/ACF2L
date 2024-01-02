<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet">

   
    <title>Document</title>
</head>

<body>
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
                    <a class="nav-link" href="#section-services">Nos services</a>
                    <a class="nav-link" href="#ulm">Types d’ULM</a>
                    <a class="nav-link" href="#team">Notre équipe</a>
                    <a class="nav-link" href="#">Événement</a>
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

        <div class="login">
            <div class>
                <div class="row justify-content-center justify-content-lg-end">
                    <div class="col-12 col-lg-5">
                        <div class="mx-auto mx-lg-0" style="max-width: 426px; margin-top: 59px;">
                            <h5 class="text-center titre-login-register">Salut ! <br> Bon retour</h5>
                            <form class="d-flex justify-content-center flex-column" action="Services_Back/Verif_Login.php" method="post">
                                <div class=" d-flex align-items-center input-control" style="margin-bottom: 21px">
                                    <input type="email" class="form-control-mo" name="email" id="email" placeholder="Entrez votre adresse e-mail" required />
                                    <i class="clear-email ri-close-circle-line" id="clear-email"></i>
                                </div>
                                <div class=" input-control password-container d-flex align-items-center " style="margin-bottom: 50px">
                                    <input type="password" name="password" class="form-control-mo" id="password" placeholder="Entrez votre mot de passe" required />
                                    <i class="toggle-password ri-eye-line" id="toggle-password"></i>
                                </div>

                                <button type="submit" class="btn btn-primary text-center btn-submit">
                                    Se connecter
                                </button>
                                <a class="text-center a-switch " href="Register.php">Vous n’avez pas de compte ? <span style=" font-weight: 700; ">Crée un compte ! </span> </a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var password = document.getElementById('password');
        var togglePassword = document.getElementById('toggle-password');

        var emailInput = document.getElementById('email');
        var icon = document.getElementById('clear-email');

        togglePassword.addEventListener('click', function() {
            if (password.type === 'password') {
                password.type = 'text';
                togglePassword.classList.remove('ri-eye-line');
                togglePassword.classList.add('ri-eye-off-line');
            } else {
                password.type = 'password';
                togglePassword.classList.remove('ri-eye-off-line');
                togglePassword.classList.add('ri-eye-line');
            }
        });

        // Ajoutez un gestionnaire d'événements click à l'icône
        icon.addEventListener('click', function() {
            // Définissez la valeur de l'entrée de l'e-mail à une chaîne vide
            emailInput.value = '';
        });
    </script>
  <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>