<?php

class OrderHistory{
   public static function orderHeader(){
      $orderHeader = '
         <main class="order">
            <h2>Order List</h2>';
            
      return $orderHeader;
   }

   public static function orderFooter(){
      $orderFooter = '</main>';
            
      return $orderFooter;
   }

   public static function orderSection($orderList , $restaurant){
      $orderSection = '
         <section>
            <figure>
               <img src="'. $restaurant->getPicture() .'" alt="">
            </figure>
            <article>
               <h3>'. $restaurant->getRestaurantName() .'</h3>
               <p class="desktop">'. count($orderList) .' items | '. $orderList[0]->getDate() .'</p>
               <p class="mobile">'. count($orderList) .' items</p>
               <ul>';

      foreach($orderList as $order){
         $orderSection .= self::orderLi($order);
      }

      $orderSection .= '
               </ul>
               <p class="mobile">'. $orderList[0]->getDate() .'</p>
            </article>
            <aside>
               <a href="">Reorder</a>
               <a href="">Rate your order</a>
            </aside>
         </section>';
      
      return $orderSection;
   }

   private static function orderLi($order){
      $menu = MenuDAO::getMenuById($order->getMenuId());
      $orderLi = '
         <li>
            <p>'. $order->getAmount() .'</p>
            <p>'. $menu->getName() .'</p>
         </li>
      ';
      
      return $orderLi;
   }

   public static function noOrder(){
      $noOrder = "
         <main class='order'>
            <h2>You don't have any orders yet</h2>
         </main>
      ";

      return $noOrder;
   }
}