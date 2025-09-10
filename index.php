<?php

require_once __DIR__ . '/autoload.php';

// Test cases will be written here
$settings = new Settings();
$databaseInstance = new Database($settings);
$connection = $databaseInstance->getConnection();
// var_dump($connection->getAttribute(PDO::ATTR_CONNECTION_STATUS));

