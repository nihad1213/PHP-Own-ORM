<?php

class Database {
    private PDO $connection;

    public function __construct(Settings $settings) {
        $dsn = "{$settings->DB_TYPE}:host={$settings->DB_HOST};dbname={$settings->DB_NAME};port={$settings->DB_PORT}";
        $this->connection = new PDO($dsn, $settings->DB_USER, $settings->DB_PASS);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getConnection(): PDO {
        return $this->connection;
    }
}