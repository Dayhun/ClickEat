<?php
class OrderNumber {
   
   private $orderNumber;

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
}