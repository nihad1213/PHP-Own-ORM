<?php

/**
 * Class to hold database configuration settings.
 */

class Settings {
    public string $DB_TYPE;
    public string $DB_HOST;
    public string $DB_NAME;
    public string $DB_PASS;
    public string $DB_USER;
    public int $DB_PORT;

    public function __construct() {
        $this->DB_TYPE = 'mysql';
        $this->DB_HOST = '127.0.0.1';
        $this->DB_NAME = 'php-orm';
        $this->DB_USER = 'root';
        $this->DB_PASS = '';
        $this->DB_PORT = 3307;
    }
}