<?php
session_start();
if(isset( $_SESSION["user"]) OR isset( $_SESSION["USER"])){
    echo '<div class="dropdown show">
    <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ri-user-line"></i></a>
    <div class="dropdown-menu menu-connect" aria-labelledby="dropdownMenuLink">
        <a style="gap: 5px;" class="dropdown-item d-flex align-items-center" href="Compte.php"><i style="font-size: 18px;" class="ri-user-add-line"></i> Mon Compte</a>
        <hr class="drop-hr" />
        <a style="gap: 4px;" class="dropdown-item d-flex align-items-center" href="deconnexion.php"><ion-icon style="font-size: 24px;" name="log-in-outline"></ion-icon>Déconnexion</a>
    </div>
</div>';

}else{
    echo'<div class="dropdown show">
    <a class="nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ri-user-line"></i></a>
    <div class="dropdown-menu menu-connect" aria-labelledby="dropdownMenuLink">
        <a style="gap: 5px;" class="dropdown-item d-flex align-items-center" href="Register.php"><i style="font-size: 18px;" class="ri-user-add-line"></i> Créer un compte</a>
        <hr class="drop-hr" />
        <a style="gap: 4px;" class="dropdown-item d-flex align-items-center" href="login.php"><ion-icon style="font-size: 24px; " name="log-in-outline"></ion-icon>Se connecter</a>
    </div>
</div>';
}


?>