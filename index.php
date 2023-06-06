<?php
require_once("inc/Page.class.php");
// require_once("inc/SignInPage.class.php");
require_once("inc/MainPage.class.php");
require_once("inc/RestaurantPage.class.php");


echo Page::htmlStart();
echo MainPage::mainPageHeaderLogOut();
echo MainPage::mainPageNav();
echo MainPage::mainPageAdv();
echo MainPage::mainPageRestaurant();
echo MainPage::mainPageFooter();
echo Page::htmlEnd();

