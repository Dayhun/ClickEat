<?php
require_once("inc/Page.class.php");
require_once("inc/MainPage.class.php");

echo Page::htmlStart();
echo MainPage::mainPageHeader();
echo Page::htmlEnd();