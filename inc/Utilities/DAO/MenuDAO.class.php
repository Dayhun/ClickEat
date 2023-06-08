<?php

class MenuDAO{

   private static $db;

   public static function init(){
      self::$db = new PDOAgent('Menu');
   }

   public static function getMenuByRestaurantId(int $restaurantId){
      $sql = "SELECT * FROM tb_restaurant_menu WHERE restaurantId=:restaurantId";

      self::$db->query($sql);

      self::$db->bind(":restaurantId",$restaurantId);
      self::$db->execute();

      return self::$db->getResultSet();
   }

   public static function getMenuById(int $menuId){
    $sql = "SELECT * FROM tb_restaurant_menu WHERE menuId=:menuId";

    self::$db->query($sql);

    self::$db->bind(":menuId",$menuId);
    self::$db->execute();

    return self::$db->singleResult();
   }
}