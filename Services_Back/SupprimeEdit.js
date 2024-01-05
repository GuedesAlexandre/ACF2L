
function deleteRow(avionId) {
    const host = "localhost";
    const username = "root";
    const password = "root";
    const database = "ASTA_ACF2L";
    const db = new Database(host, username, password, database);
    db.connect(); // Se connecter à la base de données
    const connection = db.connection; // Obtenir la connexion PDO 

    const query = "DELETE FROM ASTA_AVIONS WHERE ID_AVIONS = ?";
    const statement = connection.prepare(query);
    const success = statement.execute([avionId]);

    if (success) {
        console.log("Ligne supprimée avec succès");
    } else {
        console.log("Erreur lors de la suppression de la ligne");
    }
}
