<?php
require_once("inc/Page.class.php");
require_once("inc/MainPage.class.php");

echo Page::htmlStart();
echo MainPage::mainPageHeaderLogOut();
echo MainPage::mainPageNav();
echo MainPage::mainPageAdv();
echo MainPage::mainPageRestaurant();
echo MainPage::mainPageFooter();
echo Page::htmlEnd();