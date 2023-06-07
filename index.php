<?php
require_once("./inc/config.inc.php");

require_once("./inc/Entities/User.class.php");
require_once("./inc/Entities/Restaurant.class.php");

require_once("./inc/Utilities/PDOAgent.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utilities/DAO/RestaurantDAO.class.php");

require_once("inc/Page.class.php");
require_once("inc/SignInPage.class.php");
require_once("inc/MainPage.class.php");
require_once("inc/RestaurantPage.class.php");


RestaurantDAO::init();
$restaurants = RestaurantDAO::getRestaurantsByCategory("Burger");

echo Page::htmlStart();
echo MainPage::mainPageHeaderLogOut();
echo MainPage::mainPageNav();
echo MainPage::mainPageAdv();
echo MainPage::mainPageRestaurant($restaurants);
echo MainPage::mainPageFooter();
echo Page::htmlEnd();


