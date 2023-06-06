<?php
require_once("inc/Page.class.php");
require_once("inc/MainPage.class.php");
require_once("inc/RestaurantPage.class.php");

echo Page::htmlStart();
echo MainPage::mainPageHeaderLogOut();
echo RestaurantPage::restaurantTopSection();
echo RestaurantPage::restaurantMenuSection();
echo MainPage::mainPageFooter();
echo Page::htmlEnd();