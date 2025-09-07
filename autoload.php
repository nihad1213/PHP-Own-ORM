<?php

spl_autoload_register(function ($className) {
    $fileName1 = __DIR__ . '/ORM/' . $className . '.php';
    
    if (file_exists($fileName1)) {
        require_once $fileName1;
        return;
    }

    $fileName2 = __DIR__ . '/ORM/Core/' . $className . '.php';

    if (file_exists($fileName2)) {
        require_once $fileName2;
        return;
    }

    throw new Exception("Class $className not found.");
});