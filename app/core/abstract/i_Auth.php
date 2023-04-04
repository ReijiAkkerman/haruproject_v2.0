<?php
    declare(strict_types=1);

    namespace Auth;

    interface i_Auth {
        public function registration();
        public function login();
    }