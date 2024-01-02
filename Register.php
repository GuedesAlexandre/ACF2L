<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.7.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="styles.css" />

  
    <title>Document</title>
</head>

<body>

    <section id="login">
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

        <div class="login">
            <div class>
                <div class="row justify-content-center justify-content-lg-end">
                    <div class="col-12 col-lg-5">
                        <div class="mx-auto mx-lg-0" style="max-width: 426px; margin-top: 30px">
                            <h5 class="text-center titre-login-register" style="margin-bottom: 30px;">
                                Bienvenue ! <br /> Crée un compte
                            </h5>
                            <form class="d-flex justify-content-center flex-column" method="POST" action="Register.php">
                                <div class="nom-prenom d-flex justify-content-between">
                                    <!-- Nom  -->
                                    <div class="d-flex align-items-center input-control" style="margin-bottom: 21px">
                                        <input type="texte" class="form-control-mo" id="nom" name="nom" placeholder="Nom" required />
                                    </div>
                                    <!-- Prenom  -->
                                    <div class="d-flex align-items-center input-control" style="margin-bottom: 21px">
                                        <input type="texte" class="form-control-mo" id="prenom" name="prenom"placeholder="Prenom" required />
                                    </div>
                                </div>

                                <div class="d-flex align-items-center input-control" style="margin-bottom: 21px">
                                    <input type="date" class="form-control-mo date" name="date" id="date" " required />
                                </div>

                                <div class="d-flex align-items-center input-control " style="margin-bottom: 21px ">
                                    <input type="email" class="form-control-mo " name="email" id="email2"
                                        placeholder="Entrez votre adresse e-mail " required />
                                    <i class="clear-email ri-close-circle-line " id="clear-email2"></i>
                                </div>
                                    
                                <div class="input-control password-container d-flex align-items-center " style="margin-bottom: 21px ">
                                    <input type="text" class="form-control-mo " name="Adresse" id="adresse" placeholder="Entrez votre adresse" required />
                                </div>
                                
                                <div class="input-control password-container d-flex align-items-center " style="margin-bottom: 21px ">
                                    <input type="password" class="form-control-mo " name="password" id="password-register1" placeholder="Entrez votre mot de passe " required />
                                    <i class="toggle-password ri-eye-line " id="toggle-password-register1"></i>
                                </div>
                                
                                <div class="input-control password-container d-flex align-items-center " style="margin-bottom: 50px ">
                                    <input type="password" class="form-control-mo " name="passwordverifie" id="password-register2" placeholder="Confirmer votre mot de passe " required />
                                    <i class="toggle-password ri-eye-line " id="toggle-password-register2"></i>
                                </div>
                                 

                                <button type="submit " class="btn btn-primary text-center btn-submit ">
                                    Se connecter</button>
                  
                                <a class="text-center a-switch " href="login.php ">Vous avez déjà compte ? <span style=" font-weight: 700; ">Connecter vous !</span> </a>
                            </form>
                           
                        <?php
    require_once 'Services_Back/Crea_User.php';
    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style >
    .menu-connect a {
    color:black!important;
    font-family: "Rubik", sans-serif;
    font-size: 13px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}</style>

    <script>

        function togglePassword(passwordInput, toggleButton) {
            toggleButton.addEventListener('click', function() {
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    toggleButton.classList.remove('ri-eye-line');
                    toggleButton.classList.add('ri-eye-off-line');
                } else {
                    passwordInput.type = 'password';
                    toggleButton.classList.remove('ri-eye-off-line');
                    toggleButton.classList.add('ri-eye-line');
                }
            });
        }
    
        function clearEmail(emailInput, clearButton) {
            clearButton.addEventListener('click', function() {
                emailInput.value = '';
            });
        }
    
        var passwordRegister1 = document.getElementById('password-register1');
        var togglePasswordRegister1 = document.getElementById('toggle-password-register1');
        togglePassword(passwordRegister1, togglePasswordRegister1);
    
        var passwordRegister2 = document.getElementById('password-register2');
        var togglePasswordRegister2 = document.getElementById('toggle-password-register2');
        togglePassword(passwordRegister2, togglePasswordRegister2);
    
        var emailInput2 = document.getElementById('email2');
        var icon2 = document.getElementById('clear-email2');
        clearEmail(emailInput2, icon2);
        
    </script>
      <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>