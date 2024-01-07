<div class="tab-pane fade" id="v-pills-add-avions" role="tabpanel" aria-labelledby="v-pills-add-avions-tab">
    <div class="container mx-0 my-5">
        <div class="row">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <h5 style="margin-bottom: 17px;">Ajouter un produit</h5>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label for="nom">Nom:</label>
                        <input type="text" class="form-control" id="nom" name="nom">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label for="capacite">Capacité:</label>
                        <input type="number" class="form-control" id="capacite" name="capacite">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label for="poids">Poids à vide:</label>
                        <input type="number" class="form-control" id="poids" name="poids">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label for="autonomie">Autonomie:</label>
                        <input type="number" class="form-control" id="autonomie" name="autonomie">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label for="consommation">Consommation:</label>
                        <input type="number" class="form-control" id="consommation" name="consommation">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="description" id="description" rows="4" cols="50"></textarea>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label for="avion_id">ID de l'avion:</label>
                        <input type="number" class="form-control" id="avion_id" name="avion_id">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="form-group">
                        <label for="pilote_id">Pilote ID:</label>
                        <select class="form-control" id="pilote_id" name="pilote_id">
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "root";  
                            $dbname = "ASTA_ACF2L";

                            // Create connection
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Fetch pilotes from database
                            $sql = "SELECT ID_PILOTES, NOM FROM ASTA_PILOTES";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row["ID_PILOTES"] . "'>" . $row["NOM"] . "</option>";
                                }
                            }

                            $conn->close();
                            ?>
                        </select>
                    </div>
                </div>

                <div class="upload p-0 mx-3">
                   
                   <br>
                    <input type="submit" name="submit" value="Ajouter l'avion" class="input-submit-forms" style="border-radius:8px; background: #7A5CFA; border:none; padding: 13px 16px; width: 140px; font-size: 13px; color: #FFF;" />
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require_once 'Avion.php';
require_once 'Database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['avion_id']) && isset($_POST['pilote_id']) && isset($_POST['nom']) && isset($_POST['capacite']) && isset($_POST['poids']) && isset($_POST['autonomie']) && isset($_POST['consommation']) && isset($_POST['description'])){
        $avion_id = $_POST['avion_id'];
        $pilote_id = $_POST['pilote_id'];
        $modele = $_POST['nom'];
        $capacite = $_POST['capacite'];
        $poids_a_vide = $_POST['poids'];
        $autonomie = $_POST['autonomie'];
        $consommation = $_POST['consommation'];
        $description = $_POST['description'];

        // Vérifier si les champs modèle et poids ne sont pas vides
        if (!empty($modele) && !empty($poids_a_vide)) {
            $avion = new Avion($avion_id, $pilote_id, $modele, $capacite, $poids_a_vide, $autonomie, $consommation, $description);

            if($avion->insertIntoTable("ASTA_AVIONS")){
                echo "Avion ajouté avec succès";
            } else {
                echo "Erreur lors de l'ajout de l'avion";
            }
        } else {
            // Afficher un message d'erreur ou effectuer une autre action en cas de champs vides
        }
    } else {
        // Afficher un message d'erreur ou effectuer une autre action en cas de champs manquants
    }
}
?>
