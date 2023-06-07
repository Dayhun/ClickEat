<?php

class RestaurantDAO{

   private static $db;

   public static function init(){
      self::$db = new PDOAgent('Restaurant');
   }

   public static function getRestaurants()  {
      $sql = "SELECT * FROM tb_restaurant_info";
      //Query!
      self::$db->query($sql);
      //Execute!
      self::$db->execute();

      return self::$db->getResultSet();
   }

   public static function getRestaurantsByCategory(string $category){
      $sql = "SELECT * FROM tb_restaurant_info WHERE category=:category";

      self::$db->query($sql);

      self::$db->bind(":category",$category);
      self::$db->execute();

      return self::$db->getResultSet();
   }

   public static function getRestaurantsById(int $restaurantId){
    $sql = "SELECT * FROM tb_restaurant_info WHERE restaurantId=:restaurantId";

    self::$db->query($sql);

    self::$db->bind(":restaurantId",$restaurantId);
    self::$db->execute();

    return self::$db->singleResult();
 }
}