<?php

class RestaurantDAO{

   private static $db;

   static function init(){
      self::$db = new PDOAgent('Restaurant');
   }

   static function getRestaurants()  {
      $sql = "SELECT * FROM tb_restaurant_info";
      //Query!
      self::$db->query($sql);

      //Execute!
      self::$db->execute();
      //Return the reuslts!
      return self::$db->getResultSet();
   }

   static function getRestaurantByCategory(string $category){
      $sql = "SELECT * FROM tb_restaurant_info WHERE category=:category";

      self::$db->query($sql);

      self::$db->bind(":category",$category);
      self::$db->execute();

      return self::$db->getResultSet();
   }
}