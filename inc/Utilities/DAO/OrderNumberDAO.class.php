<?php

class OrderNumberDAO{

   private static $db;

   public static function init(){
      self::$db = new PDOAgent('OrderNumber');
   }

   public static function getOrderNumberByUserId(int $userId){
      $sql = "SELECT DISTINCT(orderNumber) FROM tb_order WHERE userId=:userId";

      self::$db->query($sql);

      self::$db->bind(":userId",$userId);
      self::$db->execute();

      return self::$db->getResultSet();
   }


}