<?php

class UserDAO {
    
    private static $db;

    static function init()  {
        self::$db = new PDOAgent('User');
    }

    public static function getUserByEmail(string $email) {
        $sql = "SELECT * FROM tb_user_info WHERE email=:email";
        self::$db->query($sql);
        self::$db->bind(':email', $email);
        self::$db->execute();

        return self::$db->singleResult();
    }

    public static function insertNewUser(User $newUser){
        $sql = "INSERT INTO tb_user_info (username, password, email, picture) VALUES (:username, :password, :email, :picture)";
        self::$db->query($sql);
        self::$db->bind(':username', $newUser->getUsername());
        self::db->bind(':password', $newUser->getPassword());
        self::$db->bind(':email', $newUser->getEmail());
        self::$db->bind(':picture', $newUser->getPicture());
        self::$db->execute();

        return self::$db->lastInsertedId();
    }
}