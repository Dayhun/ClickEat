<?php

class LoginManager{
    private static $login;

    static function verifyLogin(){
        self::$login = false;

        if(!isset($_SESSION)){
            session_start();
        }

        if(isset($_SESSION['loggedin'])){
            self::$login = true;
        }
        else{
            session_destroy();
            self::$login = false;
            // header("Location: login.php");
        }
        
        return self::$login;
    }
}