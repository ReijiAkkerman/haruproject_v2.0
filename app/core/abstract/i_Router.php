<?php
    declare(strict_types=1);

    namespace Routing;

    interface i_Router {
        public function getPage();      // подключает нужную страницу 
    }