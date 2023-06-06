<?php

class UserDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOAgent('User');
    }

    static function getUser(string $email){
        $sql = "SELECT * FROM tb_user_info WHERE email=:email";
  
        self::$db->query($sql);
        self::$db->bind(":email",$email);
        self::$db->execute();
  
        return self::$db->singleResult();
    }

}