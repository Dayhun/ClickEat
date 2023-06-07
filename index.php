<?php
require_once("./inc/Page.class.php");
require_once("./inc/SignUp.page.php");
require_once("./inc/Userpage.class.php");


echo Page::htmlStart();
// echo Userpage::Userpage();
echo SignUpPage::signUp();
echo Page::htmlEnd();

