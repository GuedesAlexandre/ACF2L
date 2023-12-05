<?php
class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    public function connect() {
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

    public function insertData($tableName, $data) {
        try {
            $columns = implode(", ", array_keys($data));
            $placeholders = ":" . implode(", :", array_keys($data));
            $query = "INSERT INTO {$tableName} ({$columns}) VALUES ({$placeholders})";
            $statement = $this->connection->prepare($query);
            $statement->execute($data);
            echo "ça a marché khoya";
        } catch (PDOException $e) {
            echo "ptn batard tu sais pas coder " . $e->getMessage();
        }
    }
}


?>