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

   public static function insertOrder(Order $newOrder) {
      $sql = "INSERT INTO tb_order(orderNumber,userId,menuId,amount,date) VALUES (:orderNumber,:userId,:menuId,:amount,:date)";

      self::$db->query($sql);

      self::$db->bind(":orderNumber",$newOrder->getOrderNumber());
      self::$db->bind(":userId",$newOrder->getUserId());
      self::$db->bind(":menuId",$newOrder->getMenuId());
      self::$db->bind(":amount",$newOrder->getAmount());
      self::$db->bind(":date",$newOrder->getDate());

      self::$db->execute();

      return self::$db->lastInsertedId();
   }
}