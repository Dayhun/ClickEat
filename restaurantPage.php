<?php

require_once("./inc/config.inc.php");
require_once("inc/Page.class.php");


require_once("./inc/Utilities/PDOAgent.class.php");

require_once("./inc/Entities/Restaurant.class.php");
require_once("./inc/Utilities/DAO/RestaurantDAO.class.php");

require_once("inc/LoginManager.class.php");
require_once("inc/MainPage.class.php");
require_once("inc/RestaurantPage.class.php");

RestaurantDAO::init();

echo Page::htmlStart();
echo MainPage::mainPageHeader();

if(!empty($_GET)){
    if(!empty($_GET['restaurantId'])){
        $restaurantId = intval($_GET['restaurantId']);
        $restaurant = RestaurantDAO::getRestaurantsById($restaurantId);
        echo RestaurantPage::restaurantTopSection($restaurant);
        echo RestaurantPage::restaurantMenuSection();
    }
}

echo MainPage::mainPageFooter();
echo Page::htmlEnd();

