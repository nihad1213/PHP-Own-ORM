<?php

spl_autoload_register(function ($className) {
    $fileName = __DIR__ . '/ORM/' . $className . '.php';
    
    if (file_exists($fileName)) {
        require_once $fileName;
    }
});