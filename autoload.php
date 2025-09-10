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

    $fileName3 = __DIR__ . '/ORM/Entites/' . $className . '.php';

    if (file_exists($fileName3)) {
        require_once $fileName3;
        return;
    }

    $fileName4 = __DIR__ . '/ORM/Migrations/' . $className . '.php';
    if (file_exists($fileName4)) {
        require_once $fileName4;
        return;
    }

     $fileName5 = __DIR__ . '/Controllers/' . $className . '.php';

    throw new Exception("Class $className not found.");
});