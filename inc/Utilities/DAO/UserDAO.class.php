<?php

class UserDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOService("User");
    }

}