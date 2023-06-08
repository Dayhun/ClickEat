<?php
class Order {
   
   private int $orderId;
   private int $orderNumber;
   private int $userId;
   private int $menuId;
   private int $amount;
   private string $date;
   

   /**
    * Get the value of date
    */ 
   public function getDate()
   {
      return $this->date;
   }

   /**
    * Set the value of date
    *
    * @return  self
    */ 
   public function setDate($date)
   {
      $this->date = $date;

      return $this;
   }

   /**
    * Get the value of amount
    */ 
   public function getAmount()
   {
      return $this->amount;
   }

   /**
    * Set the value of amount
    *
    * @return  self
    */ 
   public function setAmount($amount)
   {
      $this->amount = $amount;

      return $this;
   }

   /**
    * Get the value of menuId
    */ 
   public function getMenuId()
   {
      return $this->menuId;
   }

   /**
    * Set the value of menuId
    *
    * @return  self
    */ 
   public function setMenuId($menuId)
   {
      $this->menuId = $menuId;

      return $this;
   }

   /**
    * Get the value of userId
    */ 
   public function getUserId()
   {
      return $this->userId;
   }

   /**
    * Set the value of userId
    *
    * @return  self
    */ 
   public function setUserId($userId)
   {
      $this->userId = $userId;

      return $this;
   }

   /**
    * Get the value of orderNumber
    */ 
   public function getOrderNumber()
   {
      return $this->orderNumber;
   }

   /**
    * Set the value of orderNumber
    *
    * @return  self
    */ 
   public function setOrderNumber($orderNumber)
   {
      $this->orderNumber = $orderNumber;

      return $this;
   }

   /**
    * Get the value of orderId
    */ 
   public function getOrderId()
   {
      return $this->orderId;
   }

   /**
    * Set the value of orderId
    *
    * @return  self
    */ 
   public function setOrderId($orderId)
   {
      $this->orderId = $orderId;

      return $this;
   }
}