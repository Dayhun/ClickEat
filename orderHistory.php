<?php
require_once("./inc/config.inc.php");
require_once("./inc/LoginManager.class.php");

require_once("./inc/Entities/User.class.php");
require_once("./inc/Entities/Order.class.php");
require_once("./inc/Entities/OrderNumber.class.php");
require_once("./inc/Entities/Restaurant.class.php");
require_once("./inc/Entities/Menu.class.php");

require_once("./inc/Utilities/PDOAgent.class.php");
require_once("./inc/Utilities/DAO/OrderDAO.class.php");
require_once("./inc/Utilities/DAO/OrderNumberDAO.class.php");
require_once("./inc/Utilities/DAO/RestaurantDAO.class.php");
require_once("./inc/Utilities/DAO/MenuDAO.class.php");

require_once("./inc/MainPage.class.php");
require_once("./inc/Page.class.php");
require_once("./inc/OrderHistory.class.php");

OrderNumberDAO::init();
OrderDAO::init();
RestaurantDAO::init();
MenuDAO::init();
session_start();

echo Page::htmlStart();
echo MainPage::mainPageHeader();

if(LoginManager::verifyLogin()){
   $user = $_SESSION["email"];
   $orderNumberList = OrderNumberDAO::getOrderNumberByUserId($user->getUserId());
   if(count($orderNumberList)<=0){
      echo OrderHistory::noOrder();
   }
   else{
      echo OrderHistory::orderHeader();
      foreach($orderNumberList as $orderNumber){
         $orderList = OrderDAO::getOrderByOrderNumber($orderNumber->getOrderNumber());
         $menu = MenuDAO::getMenuById($orderList[0]->getMenuId());
         $restaurant = RestaurantDAO::getRestaurantsById($menu->getRestaurantId());
         echo OrderHistory::orderSection($orderList, $restaurant);
      }
      echo OrderHistory::orderFooter();
   }
}

echo MainPage::mainPageFooter();
echo Page::htmlEnd();