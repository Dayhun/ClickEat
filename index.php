<?php
require_once("./inc/config.inc.php");

require_once("./inc/Entities/User.class.php");
require_once("./inc/Entities/Restaurant.class.php");

require_once("./inc/Utilities/PDOAgent.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utilities/DAO/RestaurantDAO.class.php");

require_once("inc/Page.class.php");
// require_once("inc/SignInPage.class.php");
require_once("inc/MainPage.class.php");
require_once("inc/RestaurantPage.class.php");

RestaurantDAO::init();
$restaurantsList = RestaurantDAO::getRestaurants();;

echo Page::htmlStart();
// echo MainPage::mainPageHeaderLogOut();
echo MainPage::mainPageHeader();
echo MainPage::mainPageNav();
echo MainPage::mainPageAdv();


if(!empty($_GET)){
   if(!empty($_GET['restaurantCategory'])){
      $category = $_GET['restaurantCategory'];
      $page = $_GET['restaurantPage'];
      $restaurantsList = RestaurantDAO::getRestaurantsByCategory($category);
      echo MainPage::mainPageRestaurant($restaurantsList, $page, $category);
   }
   else if(!empty($_GET['restaurantPage'])){
      $page = $_GET['restaurantPage'];
      $restaurantsList = RestaurantDAO::getRestaurants();
      echo MainPage::mainPageRestaurant($restaurantsList, $page);
   }
}
else{
   echo MainPage::mainPageRestaurant($restaurantsList);
}

echo MainPage::mainPageFooter();
echo Page::htmlEnd();