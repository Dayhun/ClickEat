<?php

class RestaurantDAO{

   private static $db;
   private static $restaurants;

   static function init(){
      self::$db = new PDOAgent('Restaurant');
   }

   static function getRestaurants(){
      return self::$restaurants;
   }

   static function setRestaurants()  {
      $sql = "SELECT * FROM tb_restaurant_info";
      //Query!
      self::$db->query($sql);
      //Execute!
      self::$db->execute();

      self::$restaurants = self::$db->getResultSet();
   }

   static function setRestaurantsByCategory(string $category){
      $sql = "SELECT * FROM tb_restaurant_info WHERE category=:category";

      self::$db->query($sql);

      self::$db->bind(":category",$category);
      self::$db->execute();

      self::$restaurants = self::$db->getResultSet();
   }
}