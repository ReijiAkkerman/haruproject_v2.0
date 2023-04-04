<?php
    declare(strict_types=1);

    spl_autoload_register(function($class) {
        $classname = explode('\\', $class);
        include 'app/core/' . end($classname) . '.php';
    });

    spl_autoload_register(function($class) {     // подгружает необходимые для реализации интерфейсы
        $classname = explode('\\', $class);
        include 'app/core/abstract/' . end($classname) . '.php';
    });

    // include "app/core/Router.php";

    $router = new Routing\Router();
    $router->getPage();