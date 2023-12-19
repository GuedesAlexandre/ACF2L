<?php
class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    public $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public  function connect() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->database}";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected to the database successfully!";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function displayTableData($tableName) {
        try {
            $query = "SELECT * FROM {$tableName}";
            $statement = $this->connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                foreach ($row as $key => $value) {
                    echo "{$key}: {$value}<br>";
                }
                echo "<br>";
            }
        } catch (PDOException $e) {
            echo "Error retrieving data: " . $e->getMessage();
        }
    }
    public function displayTableContentFromId($tableName, $sqlQuery, $id) {
        try {
            $query = "SELECT * FROM {$tableName} WHERE ID=:id";
            $statement = $this->connection->prepare($query);
            $statement->bindParam(':id', $id);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                foreach ($row as $key => $value) {
                    echo "{$key}: {$value}<br>";
                }
                echo "<br>";
            }
            $statement = $this->connection->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $row) {
                foreach ($row as $key => $value) {
                    echo "{$key}: {$value}<br>";
                }
                echo "<br>";
            }
        } catch (PDOException $e) {
            echo "Erreur lors de la récupération des données : " . $e->getMessage();
        }
    }
    public function displayAllTable($table){
        try{
            $query = "SELECT * FROM {$table}";
            $prepare = $this->connection->prepare($query);
            $prepare->execute();
            $resultat = $prepare->fetchAll(PDO::FETCH_ASSOC);
            foreach($resultat as $result){
                foreach($result as $key => $value){
                    echo "{$key} : {$value}<br>";
                }
                echo "<br>";
            }
        } catch (PDOException $e) {
            echo "Erreur lors de l'affichage des données de la table : " . $e->getMessage();
        }
    }
    public function deleteRowById($tableName, $id) {
        try {
            $query = "DELETE FROM {$tableName} WHERE ID=:id";
            $statement = $this->connection->prepare($query);
            $statement->bindParam(':id', $id);
            $statement->execute();
            echo "La ligne a été supprimée avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de la suppression de la ligne: " . $e->getMessage();
        }
    }
    //modif ici de value
    public function updateValueById($tableName, $id, $columnName, $newValue) {
        try {
            $sql = "UPDATE {$tableName} SET {$columnName} = :newValue WHERE id = :id";
            $statement = $this->connection->prepare($sql);
            $statement->bindParam(':newValue', $newValue);
            $statement->bindParam(':id', $id);
            $statement->execute();
            echo "La valeur a été mise à jour avec succès.";
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour de la valeur : " . $e->getMessage();
        }
    }
    public function insertData($tableName, $data) {
        try {
            $columns = implode(", ", array_keys($data));
            $placeholders = ":" . implode(", :", array_keys($data));
            $query = "INSERT INTO {$tableName} ({$columns}) VALUES ({$placeholders})";
            $statement = $this->connection->prepare($query);
            $statement->execute($data);
            echo "ça a marché ";
        } catch (PDOException $e) {
            echo "ptn batard tu sais pas coder " . $e->getMessage();
        }
    }
}


?>