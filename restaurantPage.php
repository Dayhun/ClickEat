<?php

require_once("./inc/config.inc.php");
require_once("./inc/LoginManager.class.php");

require_once("./inc/Entities/Restaurant.class.php");
require_once("./inc/Entities/Menu.class.php");
require_once("./inc/Entities/Order.class.php");
require_once("./inc/Entities/OrderNumber.class.php");

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

if(!empty($_GET)){
    if(!empty($_GET['restaurantId'])){
        $restaurantId = intval($_GET['restaurantId']);
        $restaurantInfo = RestaurantDAO::getRestaurantsById($restaurantId);
        $restaurantMenu = MenuDAO::getMenuByRestaurantId($restaurantId);
        echo RestaurantPage::restaurantTopSection($restaurantInfo);
        echo RestaurantPage::restaurantMenuSection($restaurantMenu);
    }
}

if(!empty($_POST)){
    $newOrder = new Order();
    // $newOrder->
    header("Location: orderHistory.php");
    unset($_POST);
} else {
    header("Location: restaurantPage.php");
}
echo MainPage::mainPageFooter();
echo Page::htmlEnd();

