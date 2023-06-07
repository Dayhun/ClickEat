<?php
require_once("inc/MainPage.class.php");
require_once("./inc/Page.class.php");
require_once("./inc/Order.class.php");

echo Page::htmlStart();
echo MainPage::mainPageHeader();
echo Order::orderBody();
echo MainPage::mainPageFooter();
echo Page::htmlEnd();