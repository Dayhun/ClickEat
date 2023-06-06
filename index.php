<?php
require_once("inc/Page.class.php");
require_once("inc/SignUpPage.class.php");

echo Page::htmlStart();
echo SignUpPage::signUp();
echo Page::htmlEnd();
