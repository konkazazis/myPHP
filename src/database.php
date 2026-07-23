<?php
class Database {
    public $connection;

    public function __construct($config) {

        $dsn = "pgsql:" .  http_build_query($config, '', ';');
        
        $this->connection = new PDO($dsn, 'root', '', [PDO::ATTR_ERRMODE => PDO::FETCH_ASSOC]);

    }

    public function query($query) {
        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}