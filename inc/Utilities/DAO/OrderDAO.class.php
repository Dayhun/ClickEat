<?php

class OrderDAO{

   private static $db;

   public static function init(){
      self::$db = new PDOAgent('Order');
   }

   public static function getOrderByOrderNumber(int $orderNumber){
      $sql = "SELECT * FROM tb_order WHERE orderNumber=:orderNumber";

      self::$db->query($sql);

      self::$db->bind(":orderNumber",$orderNumber);
      self::$db->execute();

      return self::$db->getResultSet();
   }
}