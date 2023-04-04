<?php
    declare(strict_types=1);

    namespace Auth;

    // spl_autoload_register(function($class) {     // подгружает необходимые для реализации интерфейсы
    //     $classname = explode('\\', $class);
    //     include 'abstract/' . end($classname) . '.php';
    // });

    // include "abstract/i_Auth.php";

    class Auth implements i_Auth {
        protected $login;
        protected $password;
        protected $userlabel;

        public function registration():void {   // регистрирует пользователя и создает куки для его определения в будущем
            $this->login = $_POST['login'];
            $this->password = $_POST['password'];
            $this->password = md5($this->login . $this->password);
            $this->userlabel = md5($this->password . time());

            $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
            if($connection) {
                mysqli_query($connection, "INSERT INTO Auth(login, password, userlabel) VALUES ('$login', '$password', '$userlabel')");
                setcookie('userlabel', $userlabel, time() + 3600 * 24 * 30);
            }
        }

        public function login() {

        }
        
        protected function initValues() {       // подготавливает внешние данные к удобной работе с ними
            if(isset($_COOKIE['userlabel'])) $this->userlabel = $_COOKIE['userlabel'];
        }

        public function validateAccess():bool { // проверяет права на доступ к запрашиваемой странице
            $this->initValues();
            $path_array = explode('/', $_SERVER['REQUEST_URI']);
            if(isset($this->userlabel)) {
                if(!empty($this->userlabel)) {
                    $validation = isUser($this->userlabel);
                    return ($validation) ? true : false;
                }
                else return false;
            }
            else return false;
        }

        protected function isUser(string $userlabel):bool {
            $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4', 'NATSU');
            if($connection) {
                $result = mysqli_query($connection, "SELECT FROM Auth WHERE userlabel = '$userlabel'");
                if($result->rows) {
                    foreach($result as $row) {
                        if($row['userlabel'] == $userlabel) return true;
                        else return false;
                    }
                }
                else return false;
            }
        }

        public function init():void {           // создает необходимые ресурсы для работы приложения
            $connection = mysqli_connect('localhost', 'root', 'KisaragiEki4');
            if($connection) {
                mysqli_query($connection, "CREATE DATABASE NATSU");
                mysqli_query($connection, "USE NATSU");
                mysqli_query($connection, "CREATE TABLE Auth(INT PRIMARY KEY AUTO_INCREMENT id, TINYTEXT login, TINYTEXT password, TINYTEXT userlabel)");
            }
        }
    }