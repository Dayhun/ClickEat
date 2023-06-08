<?php
class Menu {
   
   private int $menuId;
   private int $restaurantId;
   private string $name;
   private float $price;
   private string $picture;

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
    * Get the value of restaurantId
    */ 
   public function getRestaurantId()
   {
      return $this->restaurantId;
   }

   /**
    * Set the value of restaurantId
    *
    * @return  self
    */ 
   public function setRestaurantId($restaurantId)
   {
      $this->restaurantId = $restaurantId;

      return $this;
   }

   /**
    * Get the value of name
    */ 
   public function getName()
   {
      return $this->name;
   }

   /**
    * Set the value of name
    *
    * @return  self
    */ 
   public function setName($name)
   {
      $this->name = $name;

      return $this;
   }

   /**
    * Get the value of price
    */ 
   public function getPrice()
   {
      return $this->price;
   }

   /**
    * Set the value of price
    *
    * @return  self
    */ 
   public function setPrice($price)
   {
      $this->price = $price;

      return $this;
   }

   /**
    * Get the value of picture
    */ 
   public function getPicture()
   {
      return $this->picture;
   }

   /**
    * Set the value of picture
    *
    * @return  self
    */ 
   public function setPicture($picture)
   {
      $this->picture = $picture;

      return $this;
   }
}