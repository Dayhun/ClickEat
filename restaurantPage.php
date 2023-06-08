<?php

require_once("./inc/config.inc.php");
require_once("./inc/LoginManager.class.php");

require_once("./inc/Entities/Restaurant.class.php");
require_once("./inc/Entities/Menu.class.php");
require_once("./inc/Entities/Order.class.php");
require_once("./inc/Entities/OrderNumber.class.php");
require_once("./inc/Entities/User.class.php");

require_once("./inc/Utilities/PDOAgent.class.php");
require_once("./inc/Utilities/DAO/RestaurantDAO.class.php");
require_once("./inc/Utilities/DAO/MenuDAO.class.php");
require_once("./inc/Utilities/DAO/OrderDAO.class.php");
require_once("./inc/Utilities/DAO/OrderNumberDAO.class.php");

require_once("./inc/MainPage.class.php");
require_once("./inc/RestaurantPage.class.php");
require_once("./inc/Page.class.php");

session_start();
RestaurantDAO::init();
MenuDAO::init();
OrderDAO::init();
OrderNumberDAO::init();

echo Page::htmlStart();
echo MainPage::mainPageHeader();
$location = "Location: restaurantPage.php?restaurantId=";

if(!empty($_GET)){
    if(!empty($_GET['restaurantId'])){
        $location .= $_GET['restaurantId'];
        $restaurantId = intval($_GET['restaurantId']);
        $restaurantInfo = RestaurantDAO::getRestaurantsById($restaurantId);
        $restaurantMenu = MenuDAO::getMenuByRestaurantId($restaurantId);
        echo RestaurantPage::restaurantTopSection($restaurantInfo);
        echo RestaurantPage::restaurantMenuSection($restaurantMenu);
    }
}

if(!empty($_POST)){
    $userId = $_SESSION["email"]->getUserId();

    date_default_timezone_set("America/Vancouver");
    $date = date("Y-m-d-H-i-s");

    $dateExploded = explode("-", $date);
    $orderNumber = null;
    foreach($dateExploded as $number){
        $orderNumber += intval($number);
    }

    foreach($_POST as $menuId=>$amount){
        if($amount != 0){
            $newOrder = new Order();
            $newOrder->setOrderNumber($orderNumber);
            $newOrder->setUserId($userId);
            $newOrder->setMenuId($menuId);
            $newOrder->setAmount($amount);
            $newOrder->setDate($date);

            OrderDAO::insertOrder($newOrder);
        }
    }

    header("Location: orderHistory.php");
    unset($_POST);
}

echo MainPage::mainPageFooter();
echo Page::htmlEnd();

