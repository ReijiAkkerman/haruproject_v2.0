<?php
    declare(strict_types=1);

    namespace Routing;

    // spl_autoload_register(function($class) {     // подгружает необходимые для реализации интерфейсы
    //     $classname = explode('\\', $class);
    //     include 'abstract/' . end($classname) . '.php';
    // });

    // spl_autoload_register(function($class) {
    //     $classname = explode('\\', $class);
    //     include end($classname) . '.php';
    // });

    // include "abstract/i_Router.php";
    // include "Auth.php";

    class Router implements i_Router {
        protected $path_array;          // массив ассоциаций относительных путей с реальными

        function __construct() {
            $this->path_array = [
                'pages' => 'app/view/'
            ];
        }

        public function getPage() {     // подключает нужную страницу
            $auth = new \Auth\Auth;
            if($auth->validateAccess()) include "app/view/scheduler.php";
            else include "app/view/enter.php"; 
        }
    }