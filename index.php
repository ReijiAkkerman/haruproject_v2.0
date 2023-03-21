<?php
    // spl_autoload_register(function ($classname) {
    //     include 'app/core/' . $classname . '.php';
    // });

    $path = explode('/', $_SERVER['REQUEST_URI']);
    switch($path[1]) {
        case '':
            include "index2.html";
            break;
        case 'var':
            include "app/view/scheduler.php";
            break;
    }